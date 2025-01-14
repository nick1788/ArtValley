<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send_mail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('phpmailer_lib');
    }

    public function send_email() {
        if ($this->input->post('submit')) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $mail = $this->phpmailer_lib->load();

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'artvalleycreation@gmail.com';
            $mail->Password = 'phyx otcn kovv ubuw'; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587; 

            $mail->setFrom($email, $name);
            $mail->addReplyTo($email, $name);
            $mail->addAddress('artvalleycreation@gmail.com', '');

            $mail->Subject = $subject;
            $mail->isHTML(true);
            $mail->Body = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; background-color: #f8f8f8; color: #333; margin: 0; padding: 20px; }
                        h1 { color: #333; text-align: center; margin-bottom: 20px; }
                        h5 { color: #555; margin-bottom: 5px; }
                        p { margin: 0 0 10px; }
                        .info-block { background-color: #fff; padding: 15px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px; }
                    </style>
                </head>
                <body>
                    <h1>Contact Form Submission</h1>
                    <div class='info-block'>
                        <h5>Name:</h5><p style='color: #777;'>$name</p>
                        <h5>Email:</h5><p style='color: #777;'>$email</p>
                        <h5>Subject:</h5><p style='color: #777;'>$subject</p>
                        <h5>Message:</h5><p style='color: #777;'>$message</p>
                    </div>
                </body>
                </html>
            ";

            if ($mail->send()) {
                echo '<script>alert("Email sent successfully!");</script>';
                echo '<script>window.location.href="'.base_url('Contact').'";</script>';
            } else {
                log_message('error', 'Mail Error: ' . $mail->ErrorInfo);
                echo '<script>alert("Failed to send email. Error: ' . $mail->ErrorInfo . '");</script>';
                echo '<script>window.location.href="'.base_url('Contact').'";</script>';
            }
        } else {
            echo '<script>alert("Form submission failed.");</script>';
            echo '<script>window.location.href="'.base_url('Contact').'";</script>';
        }
    }
}
