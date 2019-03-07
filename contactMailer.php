<?php 
    if (isset($_POST['submit'])) {
        
        $inputEmail = '';
        $inputName = '';
        $inputMessage = '';
        $inputPhone = '';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['g-recaptcha-response'])) {
            
            // Build POST request:
            $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptchaSecretKey = "6LdrkJIUAAAAAMfuPB0mkRBec5fj2H2I3RlXtXku";
            $recaptcha_response = $_POST['g-recaptcha-response'];
        
            // Make and decode POST request: $recaptchaSecretKey from config.php file
            $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptchaSecretKey . '&response=' . $recaptcha_response);
            $recaptcha = json_decode($recaptcha);
            
            //$recaptcha->score = 0.3;  //DELETE THIS -- FOR TESTING ONLY
            
            // Take action based on the score returned:
            if (isset($recaptcha->score) && $recaptcha->score >= 0.5) {
                // Verified - send email
                
                if(isset($_POST['name'])) {
                    $inputName = $_POST['name'];
                }
                if(isset($_POST['email'])) {
                    $inputEmail = $_POST['email'];
                }
                if(isset($_POST['phone'])) {
                    $inputPhone = $_POST['phone'];
                }
                if(isset($_POST['message'])) {
                    $inputMessage = $_POST['message'];
                }
                
                // $inputPhone = $_POST['phone'];
                // $inputMessage = $_POST['message'];
        
                $mail_body = '<html>
                <body style="font-family: Arial, Helvetica, sans-serif;
                                    line-height:1.8em;">
                <p>Hello '.$siteEmailRecipient.', <br><br> A message with the following information was sent via the contact form on the albertaharpist.com website:</p>
                <p>Name: '.$inputName.'<br>
                Email: '.$inputEmail.'<br>
                Phone: '.$inputPhone.'<br>
                Message: '.$inputMessage.'<br>         
                <br>
                Have a nice day!<br>
                <a href="https://albertaharpist.com">albertaharpist.com</a>
                </p>
                </body>
                </html>';
            
                $subject = "Message from albertaharpist.com contact form";
                $headers = "From: albertaharpist.com" . "\r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                //Error Handling for PHPMailer
                if(!mail($email, $subject, $mail_body, $headers)){
                    $_SESSION['result'] = "Email failed to send.";
                    unset($_POST);
                }
                else{
                    $_SESSION['result'] = "Email sent!";
                    unset($_POST);
                }
                        
            } else {
                // Not verified - show form error
                $_SESSION['result'] = "Oops... need a spam-bot check. Please press 'send' again.";
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phone'] = $_POST['phone'];
                $_SESSION['message'] = $_POST['message'];
    
                //$_POST = [];
                header('Location: contactVerifyLevel2.php');
                exit();
            }
        }            
    }
?>