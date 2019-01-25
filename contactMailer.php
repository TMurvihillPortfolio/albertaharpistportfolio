if (isset($_POST['submit'])) {
        $result = '';
        $inputEmail = '';
        $inputName = '';
        $inputMessage = '';
        $inputPhone = '';

        if(isset($_POST['g-recaptcha-response'])  && isset($recaptchaSecretKey)) {
            $recaptchaArray = ['secret' => $recaptchaSecretKey,
            'response' => $_POST['g-recaptcha-response']
            ];
        }

        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        // curl_setopt($curl, CURLOPT_POST, true);
        // curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($recaptchaArray));
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // $response = json_decode(curl_exec($curl));
        // curl_close($curl);
      
        // if (isset($response->success) && !$response->success == true) {
        //     $result = 'ReCaptcha validation failed.';
        // }

        if (isset($result) && !$result == 'ReCaptcha validation failed.') {
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
            <a href="https://albertaharpist.com">albertharpist.com</a>
            </p>
            </body>
            </html>';
        
            $subject = "Message from albertaharpist.com contact form";
            $headers = "From: albertaharpist.com" . "\r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            //Error Handling for PHPMailer
            if(!mail($email, $subject, $mail_body, $headers)){
                $result = "Email failed to send.";
            }
            else{
                $result = "Email sent!";
                unset($POST);
            }
        }       
    }