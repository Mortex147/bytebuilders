<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\password;
use App\Models\Bytebuilder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;

class ForgotPassword extends Controller
{
    public function forgotpassword(){
        return view('forgot_password');
    }

  
    public function forgotpasswordpost(Request $req){
  

        $req->validate([
            'bytebuilder_email' => 'required|email|exists:bytebuilders' // Update the table name to "bytebuilders" (plural)
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $req->bytebuilder_email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        
        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->IsSMTP();
        $mail->Mailer = env("MAIL_MAILER");
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPAutoTLS = false;
        $mail->Port       = env("MAIL_PORT");
        $mail->Host       = env("MAIL_HOST");
        $mail->Username   = env("MAIL_USERNAME");
        $mail->Password   = env("MAIL_PASSWORD");

        $mail->IsHTML(true);
        $mail->AddAddress($req->bytebuilder_email);
        $mail->SetFrom(env("MAIL_USERNAME"), "no-reply");
        $mail->AddReplyTo(env("MAIL_USERNAME"), "no-reply");
        $mail->AddCC(env("MAIL_USERNAME"), "no-reply");
        $mail->Subject = 'Reset password';
        // $mail->Body = '<a href="' . route('reset.password', ['token' => $token]) . '">Reset Password</a>';
        $linkStyles = 'display: inline-block; padding: 10px 20px; background-color: #4a9df8; color: #ffffff; text-decoration: none; border-radius: 4px;';
        $mail->Body = '<p style="text-align: center;">Click the button below to reset your password:</p>
                      <p style="text-align: center;"><a href="' . route('reset.password', ['token' => $token]) . '" style="' . $linkStyles . '">Reset Password</a></p>';
        
                      
        if (!$mail->Send()) {
            return false;
        }
        $req->session()->flash('success', 'Password reset link has been sent to your email.');

        return redirect()->back(); // Redirect back to the form page
    }

    public function resetpassword($token){
        return view("newpassword",compact('token'));
    }
    public function resetpasswordpost(Request $req)
    {
        $req->validate([
            'token' => 'required', // Token from the form
            'bytebuilder_email' => 'required|email|exists:bytebuilders',
            'bytebuilder_password' => 'required|string|min:8|confirmed', // Update the table name to "bytebuilders" (plural)
            'bytebuilder_password_confirmation' => 'required' // Update the table name to "bytebuilders" (plural)
        ]);

        // Check if the token exists in the password_reset_tokens table
        $resetToken = DB::table('password_reset_tokens')
            ->where('token', $req->token)
            ->where('email', $req->bytebuilder_email)
            ->first();

        if (!$resetToken) {
            $req->session()->flash('error', 'Invalid or expired token.');
            return redirect()->back();
        }

        // Update the password for the user
        Bytebuilder::where('bytebuilder_email', $req->bytebuilder_email)
            ->update(['bytebuilder_password' => bcrypt($req->bytebuilder_password)]);

        // Remove the used token from the password_reset_tokens table
        DB::table('password_reset_tokens')->where('token', $req->token)->delete();

       $req->session()->flash('success', 'Password reset successful!');

       return redirect()->back();
    }
}