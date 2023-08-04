<?php

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BytebuilderController;
use App\Http\Controllers\PortfolioProjectController;
use App\Http\Controllers\PortfolioFormationController;
use App\Http\Controllers\PortfolioExperienceController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for Bytebuilder
Route::resource('bytebuilder', BytebuilderController::class);

// Routes for Portfolio Projects
Route::resource('portfolio-project', PortfolioProjectController::class);

// Routes for Portfolio Experiences
Route::resource('portfolio-experience', PortfolioExperienceController::class);

// Routes for Portfolio Formations
Route::resource('portfolio-formation', PortfolioFormationController::class);
Route::get("sendmail", function (Request $request){
    $recipientEmail = 'roskovacatarina745@gmail.com'; // Replace with the recipient's email address.
            $mail = new PHPMailer(true);
            $mail->CharSet = "UTF-8";
    
            $mail->IsSMTP();
            $mail->Mailer = env("MAIL_MAILER"); 
            $mail->SMTPAuth = true;
            $mail->SMTPAutoTLS = false;
            $mail->Port = env("(MAIL_PORT)");
            $mail->Host = env("MAIL_HOST");
            $mail->Username = env("MAIL_USERNAME");
            $mail->Password = env("MAIL_PASSWORD");

            $mail->IsHTML(true);
            $mail->AddAddress($recipientEmail);
            $mail->SetFrom(env("MAIL_USERNAME"), "no-reply");
            $mail->AddReplyTo(env("MAIL_USERNAME"), "no-reply");
            $mail->AddCC(env("MAIL_USERNAME"), "no-reply");
            $mail->Subject = "ff";
            $mail->Body = "fzef";

            $mail->send();
});
