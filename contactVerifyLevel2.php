<?php session_start();
    include 'config.php';
    
    if (isset($_POST['submit'])) {
        // Initiate variables
        $_SESSION['result'] = '';
        $inputEmail = '';
        $inputName = '';
        $inputMessage = '';
        $inputPhone = '';
        
        //prepare and send reCaptcha verification
        $recaptchaArray = [
            'secret' => $recaptchaSecretKeyv2,
            'response' => $_POST['g-recaptcha-response']
        ];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($recaptchaArray));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        
        // Check for reCaptcha success
        if (isset($response->success) && !$response->success == true) {
            $_SESSION['result'] = 'ReCaptcha validation failed.';
        }
        if (isset($_SESSION['result']) && !$_SESSION['result'] == 'ReCaptcha validation failed.') { // Recaptcha successful
            // get post variables
            if (isset($_POST['name'])) {
                $inputName = $_POST['name'];
            }
            if (isset($_POST['email'])) {
                $inputEmail = $_POST['email'];
            }
            if (isset($_POST['phone'])) {
                $inputPhone = $_POST['phone'];
            }
            if (isset($_POST['message'])) {
                $inputMessage = $_POST['message'];
            }

            //prepare email
            $subject = "Message from albertaharpist.com contact form";
            $headers = "From: albertaharpist.com" . "\r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $mail_body = '
                <html>
                <body style="font-family: Arial, Helvetica, sans-serif;
                                    line-height:1.8em;">
                    <p>Hello '.$siteEmailRecipient.', <br> A message with the following information was sent via the contact form on the albertaharpist.com website:</p>
                    <p>Name: '.$inputName.'<br>
                    Email: '.$inputEmail.'<br>
                    Phone: '.$inputPhone.'<br>
                    Message: '.$inputMessage.'<br>
                    <br>
                    Have a nice day!<br>
                    albertaharpist.com
                    </p>
                </body>
                </html>
            ';

            //Send email
            if(!mail($email, $subject, $mail_body, $headers)){
                $_SESSION['result'] = "Email failed to send.";
            }
            else{
                $_SESSION['result'] = "Email sent!";
                header('Location: index.php#contact');
                exit();
            }
        }       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133302782-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-133302782-1');
    </script>

    <!-- Google reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta name="description=" content="Professional Harpist Tiffany Hansen provides elegant, beautiful music for weddings, parties, funerals, or any special occasion.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush:100,300,400,700,900" rel="stylesheet">

    <!--script.js located at bottom of body tag due to Safari failing to load slideshow-->

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052385/musiclogonobacktancolor1.png">
    <title>Tiffany Hansen | Wedding Music | Calgary | Harpist | Ceremony Music | Background Music</title>
</head>
<body>
    <section class="section-book" id='contact'>           
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <form action="contactVerifyLevel2.php" class="form" name="submit" method='post'>
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary" style="font-size: 16px">
                                <?php if(isset($_SESSION['result'])&&(!$_SESSION['result']=='')) {echo $_SESSION['result'].'<br>'; unset($_SESSION['result']);} else {echo 'Contact Tiffany';} ?>                                    
                            </h2>
                        </div>  
                        <div class="form__text">
                            <p>Email Tiffany at <a href="mailto: info@albertaharpist.com">info@albertaharpist.com</a> <span>   or...</span></p>
                        </div>
                        <div class="form__group">
                            <label for="name" class="form__label">Full name</label>
                            <input type="text" name="name" class="form__input" id="name" value="<?php echo $_SESSION['name']; ?>" required>                           
                        </div>
                        <div class="form__group">
                            <label for="email" class="form__label">Email address</label>
                            <input type="email" name="email" class="form__input" id="email" value="<?php echo $_SESSION['email']; ?>" required>
                        </div>
                        <div class="form__group">
                            <label for="phone" class="form__label">Optional Phone</label>
                            <input type="phone" name="phone" class="form__input" id="phone" value="<?php echo $_SESSION['phone']; ?>">
                        </div>
                        <div class="form__group">
                            <label for="message" class="form__label">Optional Message</label>
                            <textarea rows='4' name="message" class="form__input" id="message"><?php echo $_SESSION['message']; ?></textarea>
                        </div>
                        <!-- reCaptcha fields -->
                        <div class="g-recaptcha" data-sitekey="6LfvPJYUAAAAAETNBCYsJeUfj2VWtJaDrSL-RR0A"></div>
                        <!-- end reCaptcha fields -->
                    
                        <div class="form__group">
                            <button class="btn btn--green" type='submit' name='submit'>Send &rarr;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>         
</body>
</html>      