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

    public function contact(Request $request){
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'));
            $mail->addAddress(env('MAIL_USERNAME'));

            $mail->Subject = "PERMINTAAN CONTACT US";
            $mail->Body =   "Name                    : " . $request->name . "\n" .
                            "Email                   : " . $request->email . "\n" .
                            "Job Title               : " . $request->job . "\n" .
                            "Company                 : " . $request->company . "\n" .
                            "Company Size (Employees): " . $request->size . "\n" .
                            "Industry Fields         : " . $request->industry . "\n" .
                            "Company Location        : " . $request->location . "\n" .
                            "Notes                   : " . $request->notes . "\n";

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

    public function consultation(Request $request){
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'));
            $mail->addAddress('arka.brian13@gmail.com');

            $mail->Subject = "[CONSULTATION]";
            $mail->Body =   "Consultation Time       : " . $request->consult_date . " at " . $request->consult_time ."\n" .
                            "First Name              : " . $request->first_name . "\n" .
                            "Last Name               : " . $request->last_name . "\n" .
                            "Email                   : " . $request->email . "\n" .
                            "Phone Number            : " . $request->phone_number . "\n" .
                            "Company Name            : " . $request->company . "\n" .
                            "Consultation Needs      : " . $request->consult_type . "\n";

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
    public function resource(Request $request){
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'));
            $mail->addAddress(env('MAIL_USERNAME'));

            $mail->Subject = "PERMINTAAN RESOURCE";
            $mail->Body =   "Resource      : " . $request->article_title . " (" . $request->article_id . ")". "\n" .
                            "Full Name     : " . $request->fullname . "\n" .
                            "Company Email : " . $request->companymail . "\n" .
                            "Company Name  : " . $request->companyname . "\n" .
                            "Resource Type : " . $request->resourcetype . "\n" .
                            "Remarks       : " . $request->remarks . "\n";

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

    public function case(Request $request){
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'));
            $mail->addAddress(env('MAIL_USERNAME'));

            $mail->Subject = "PERMINTAAN CASE STUDY";
            $mail->Body =   "Full Name       : " . $request->fullname . "\n" .
                            "Company Email   : " . $request->companymail . "\n" .
                            "Company Name    : " . $request->companyname . "\n" .
                            "Case Study Type : " . $request->case_study_type . "\n" .
                            "Remarks         : " . $request->remarks . "\n";

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
