<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class MailController
{
    use Queueable, SerializesModels;
    private static $mail;

    public function config()
    {
        if (!isset(self::$mail)) {
            self::$mail = new PHPMailer(true);
        }

        self::$mail->isSMTP();
        self::$mail->Host = env('MAIL_HOST');
        self::$mail->Port = 465;
        self::$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        self::$mail->SMTPAuth = true;
        self::$mail->Username = env('MAIL_USERNAME');
        self::$mail->Password = env('MAIL_PASSWORD');
        self::$mail->setFrom('notify@fresh2go.com', env('APP_NAME'));
        self::$mail->isHTML(true);

        return self::$mail;
    }

    /*
    * Add recipients
    *
    * @return void
    *
    *
    */
    private function add(string $case, $recipient)
    {
        self::$mail->clearAddresses();

        switch ($case) {
            case 'specific':
                echo $recipient;
                self::$mail->addAddress($recipient);
                break;

            case 'list':
                $users = User::all();
                foreach ($users as $recipient) {
                    self::$mail->addAddress($recipient['email']);     //Add a recipient
                }
                break;
        }
    }

    /*
     *
     * Construct the email template
     * 
     * @param string
     * 
     * 
     */
    private function create($email_type)
    {
        switch ($email_type) {
            case 'general':
                // $general = file_get_contents(__DIR__ . '\resources\mail_template.html');
                // file_put_contents(__DIR__ . '\resources\mail_template.txt', $general);
                $view = view('mail.welcome');
                return $view->render();
        }
    }


    /*
    *
    * Deliver email
    *
    *
    */
    public function deliver(Request $request, $recipient = null, $email_type = "general")
    {
        global $mail;
        try {
            self::config();
            self::add($request->case, $request->email);
            // self::create($email_type);

            self::$mail->Subject = 'Welcome to Fresh2GoHub!';
            self::$mail->Body = self::create($email_type); //file_get_contents(__DIR__ . '\resources\mail_template.txt');
            self::$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            self::$mail->send();
            echo 'message sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error:';
            echo self::$mail->ErrorInfo;
        }

         return redirect()->route('home');
    }
}
