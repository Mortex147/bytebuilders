<?php

namespace App\Http\Livewire;

use App\Mail\email;
use Livewire\Component;
use App\Models\Bytebuilder;
use Livewire\WithFileUploads;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;


class MultiStepForm extends Component
{
    use WithFileUploads;

    public $bytebuilder_name;
    public $bytebuilder_prename;
    public $bytebuilder_email;
    public $bytebuilder_password;
    public $bytebuilder_category;
    public $bytebuilder_city;
    public $bytebuilder_country;
    public $bytebuilder_birthdate;
    public $bytebuilder_password_confirmation;

    public $totalSteps = 3;
    public $currentSteps = 1;

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteps++;
        if ($this->currentSteps > $this->totalSteps) {
            $this->currentSteps = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {  
        $this->resetErrorBag();
        $this->currentSteps--;
        if ($this->currentSteps < 1) {
            $this->currentSteps = 1;
        }
    }

    public function validateData()
   
    { 
        $this->resetErrorBag();
        if ($this->currentSteps == 1) {
            $this->validate([
                'bytebuilder_name' => 'required',
                'bytebuilder_prename' => 'required',
                'bytebuilder_birthdate' => 'required',
            ]);
        } elseif ($this->currentSteps == 2) {
            $this->validate([
                'bytebuilder_email' => 'required|email|unique:bytebuilder',
                'bytebuilder_city' => 'required',
                'bytebuilder_country' => 'required',
            ]);
        } elseif ($this->currentSteps == 3) {
            $this->validate([
                'bytebuilder_password' => 'required|min:8|confirmed',
                'bytebuilder_category' => 'required',
            ]);
        }
    }

    public function register()
    {
        $this->resetErrorBag();
        $this->validateData();

        // Hash the password
        $password = $this->bytebuilder_password;
        $hashedPassword = Hash::make($password);

        // Create the data array for creating a new Bytebuilder
        $data = [
            'bytebuilder_name' => $this->bytebuilder_name,
            'bytebuilder_prename' => $this->bytebuilder_prename,
            'bytebuilder_email' => $this->bytebuilder_email,
            'bytebuilder_password' => $hashedPassword,
            'bytebuilder_category' => $this->bytebuilder_category,
            'bytebuilder_city' => $this->bytebuilder_city,
            'bytebuilder_country' => $this->bytebuilder_country,
            'bytebuilder_birthdate' => $this->bytebuilder_birthdate,
        ];

        // Create a new Bytebuilder instance
        $bytebuilder=Bytebuilder::create($data);
         
        $date =$bytebuilder->created_at;
        $id =$bytebuilder->id;
        $href=url('').'/verify_email/'. base64_encode($date.'///'.$id);
        // Mail::to('nourdinachlafta14@gmail.com')->send(new email($bytebuilder));
        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->IsSMTP();
        $mail->Mailer = env("MAIL_MAILER");
        $mail->SMTPAuth   = TRUE;
        // $mail->SMTPSecure = env("MAIL_ENCRYPTION");
        $mail->SMTPAutoTLS = false;
        $mail->Port       = env("MAIL_PORT");
        $mail->Host       = env("MAIL_HOST");
        $mail->Username   = env("MAIL_USERNAME");
        $mail->Password   = env("MAIL_PASSWORD");

        $mail->IsHTML(true);
        $mail->AddAddress($bytebuilder->bytebuilder_email);
        $mail->SetFrom(env("MAIL_USERNAME"), "no-reply");
        $mail->AddReplyTo(env("MAIL_USERNAME"), "no-reply");
        $mail->AddCC(env("MAIL_USERNAME"), "no-reply");
        $mail->Subject = 'Email Verification';
        $mailBody = '<body style="background-color: #f7fafc; font-family: Arial, sans-serif; text-align: center;">
  <div style="padding: 32px;">
    <br><br>ByteBuilders<br><h1>Hello ' . $bytebuilder->bytebuilder_prename . '</h1><br><br><h5>To activate your account press the button below:</h5><br><br><button><a href="' . $href . '">confirm Your email</a></button><br><br>
  </div>
</body>';

        $mail->MsgHTML($mailBody);


        if (!$mail->Send()) {
            return false;
        }
        
        

       
        $this->reset([
            'bytebuilder_name',
            'bytebuilder_prename',
            'bytebuilder_email',
            'bytebuilder_password',
            'bytebuilder_category',
            'bytebuilder_city',
            'bytebuilder_country',
            'bytebuilder_birthdate',
            'bytebuilder_password_confirmation',
       
        ]);

        
        return view('/welcome');
    }
}
