<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller
{
    public function index(){
        return view('contact-us');
    }

    public function store(Request $request){
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress('arka.brian13@gmail.com');

            $mail->isHTML(true);

            $mail->Subject = $request['subject'];
            $mail->Body = $request['body'];

            if(!$mail->send()){
                echo "<script type='text/javascript'>alert('Email GAGAL terkirim');</script>";
                return back()->with('error', 'Email not sent')->withErrors($mail->ErrorInfo);
            }
            else{
                echo "<script type='text/javascript'>alert('Email BERHASIL terkirim');</script>";
                return back()->with('success', 'Email has been sent');
            }
        }
        catch(Exception $e){
            echo "<script type='text/javascript'>alert('etot');</script>";
            return back()->with('error', 'Message could not be sent');
        }
    }
}
