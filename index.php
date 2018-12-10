<?php
    include 'config.php';
    
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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Tiffany Hansen | harpist</title>
    </head>

    <body>
        <!-- Header 1 Tiff mtn -->
        <!-- <header class="header">
            <div class="header__topLine">
                <div class="header__topLine--logo-box">
                    <img src="img/logo.png" alt="Logo" class="header__topLine--logo">
                </div>
                <div class="navigation">                   
                    <nav class="header__topLine--navigation">
                        <ul class="header__topLine--navigation-list">
                            <li class="header__topLine--navigation-item"><a href="#about" class="header__topLine--navigation-link">About Tiffany</a></li>
                            <li class="header__topLine--navigation-item"><a href="#section-weddings" class="header__topLine--navigation-link">Weddings</a></li>
                            <li class="header__topLine--navigation-item"><a href="#section-testimonials" class="header__topLine--navigation-link">Testimonials</a></li>
                            <li class="header__topLine--navigation-item"><a href="#section-book" class="header__topLine--navigation-link">Contact</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Dreams</span>
                    <span class="heading-primary--sub">are where life happens</span>
                </h1>
                <h1 class="header__text-box--heading-secondary">Tiffany Hansen, harpist</h1>
            </div>
        </header> -->
        <!-- end header 1 tiff mountain -->

        <!-- Header 2 harphands -->
        <header class="header">
            <div class="header__topLine">
                <div class="header__topLine--logo-box">
                    <img src="img/logo.png" alt="Logo" class="header__topLine--logo">
                </div>
                <div class="navigation">                 
                    <nav class="header__topLine--navigation">
                        <ul class="header__topLine--navigation-list">
                            <li class="header__topLine--navigation-item"><a href="#about" class="header__topLine--navigation-link">About Tiffany</a></li>
                            <li class="header__topLine--navigation-item"><a href="#section-weddings" class="header__topLine--navigation-link">Weddings</a></li>
                            <li class="header__topLine--navigation-item"><a href="#section-testimonials" class="header__topLine--navigation-link">Testimonials</a></li>
                            <li class="header__topLine--navigation-item"><a href="#section-book" class="header__topLine--navigation-link">Contact</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Dreams</span>
                    <span class="heading-primary--sub">are where life happens</span>
                </h1>
                <h1 class="header__text-box--heading-secondary">Tiffany Hansen, harpist</h1>
            </div>
        </header>
        <!-- end header 2 harp hands -->

        <main>
            <section class="section-subLanding">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Weddings, Special Occasions. ..
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with the harp!</h3>
                        <p class="paragraph">
                            A fabulous event deserves fabulous music! The majestic harp adds a special, elegant touch that makes any occasion memorable.
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">What style of music do you prefer?</h3>
                        <p class="paragraph">
                            From Bach to Beyonce, any piece sounds beautiful on the harp! Please feel free to <a href="contact">contact Tiffany</a> for more information, to schedule a free consultation, or to book an event. 
                        </p>
                        <div class="u-center-text u-margin-top-huge">
                            <a href="#section-weddings" class="btn btn--green">More About Weddings</a>
                        </div>
                        <!-- <a href="#section-weddings" class="btn-text">Learn more &rarr;</a> -->
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="img/HarpBase.jpg">

                            <img alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="img/HarpHands.jpg">

                            <img alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="img/tiffany.jpg">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features">
                
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Weddings</h3>
                            <p class="feature-box__text">
                                Wedding packages include music for the bridal entrance and the couple's triumphant walk back down the aisle. <a href="#section-weddings">Learn More...</a></p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Receptions</h3>
                            <p class="feature-box__text">
                                The harp can provides magical ambience for your reception. Do you have a song in mind? Let Tiffany know! <a href="#section-book">Contact Tiffany</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Special Occasions</h3>
                             <p class="feature-box__text">
                                Anniversaries, Christmas Parties, Birthday Celebrations... the harp will make any event a memorable one!<a href="contact">Contact Tiffany</a>
                            </p>
                        </div>
                    </div>  

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Harp Lessons</h3>
                            <p class="feature-box__text">
                                Have you always wanted to learn the harp? Tiffany would love to teach you how to sound beautiful on the harp. <a href="contact">Contact Tiffany</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-weddings" id="section-weddings">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        More About Weddings
                    </h2>
                </div>

               <div class="weddingsContainer">
                   <div class="weddingsContainer__image">
                       <img src="img/tiffany_wedding.jpg">
                   </div>
                   <div class="weddingsContainer__text">
                       <h3 class="heading-tertiary u-margin-bottom-small">Make your wedding extraordinary</h3>
                       <p>Here we need a bunch of text about what the harp adds to a wedding. Something like, from the first sounds of the entrance of the bride to the final moments of an exquisite ceremony, the harp can create the atmosphere that you are dreaming of (ugh, this is certainly not the text content you are dreaming of).  Tiffany has added an incredible specialness (ok, this is really, really bad copy) to many weddings in the Calgary area.<br><br> Tiffany offers a free consultation and will customize all of the music to your musical tastes. If you are not sure, she can choose elegant, appropriate music for you. <a href="#section-book">Contact Tiffany</a></p>
                   </div>
               </div>
               
                <div class="u-center-text u-margin-top-huge">
                    <a href="#section-book" class="btn btn--green">Contact Tiffany</a>
                </div>
            </section>

            <section class="section-about">
                
                <div class="bg-video">
                     
                
                <!-- <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="img/video.mp4" type="video/mp4">
                        <source src="img/video.webm" type="video/webm">
                        Your browser is not supported!
                    </video>
                </div> -->

                

                <div class="row">
                    <div class="story">
                        <!-- <figure class="story__shape">
                            <img src="img/nat-8.jpg" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Mary Smith</figcaption>
                        </figure> -->
                        <div class="story__text">
                            <div class="u-center-text u-margin-bottom-small">
                                <h2 class="heading-secondary">
                                    About Tiffany
                                </h2>
                            </div> 
                            <p>
                                Tiffany Hansen has played the harp for 29 years. Her musical pursuits have taken her to many places throughout Canada and the United States. She has been the Principal Harpist of the Calgary Civic Symphony for the past 14 years. One of her greatest enjoyments in playing such an elegant instrument is being able to provide a unique and memorable musical experience for weddings and special events. <br><br>

                                <span>&quot;</span>Tiffany is an amazing musician with a natural talent for creating a beautiful atmosphere. I would highly recommend her for any occasion.<span>&quot;</span>&nbsp;&nbsp;&nbsp;--Tisha Murvihill
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="img/nat-9.jpg" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Jack Wilson</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">Made the day memorable!</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                                ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                                repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                            </p>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="u-center-text">  
                    <a href="#section-features" class="btn-text">Contact Tiffany &rarr;</a>
                </div> -->
                
            </section>
        </div> 
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Contact
            </h2>
        </div>
        <section class="section-book" id='section-book'>           
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="index.php#section-book" class="form" name="submit" method='post'>
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    <?php if(isset($result)&&(!$result=='')) {echo $result.'<br>'; unset($result);} else {echo 'Contact Tiffany';} ?>                                    
                                </h2>
                            </div>  
                            <div class="form__text">
                                <p>Email Tiffany at <a href="mailto: info@albertaharpist.com">info@albertaharpist.com</a> <span>   or...</span></p>
                            </div>
                            <div class="form__group">
                                <label for="name" class="form__label">Full name</label>
                                <input type="text" name="name" class="form__input" id="name" required>                           
                            </div>

                            <div class="form__group">
                                <label for="email" class="form__label">Email address</label>
                                <input type="email" name="email" class="form__input" id="email" required>
                                
                            </div>
                            <div class="form__group">
                                <label for="phone" class="form__label">Optional Phone</label>
                                <input type="phone" name="phone" class="form__input" id="phone">
                            </div>
                            <div class="form__group">
                                <label for="message" class="form__label">Optional Message</label>
                                <textarea rows='4' name="message" class="form__input" id="message"></textarea>
                            </div>

                            <!-- <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Small tour group
                                    </label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Large tour group
                                    </label>
                                </div>
                            </div> -->
                            <!-- <div class="g-recaptcha" data-sitekey="6LcrP3sUAAAAACZXFfHU362MVFkMvhuTo83bRnNr"></div>
                        -->
                            <div class="form__group">
                                <button class="btn btn--green" type='submit' name='submit'>Send &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <footer class="footer">
            <div class="footer__logo-box">

                <picture class="footer__logo">
                    <img alt="Full logo" src="img/logo.png">
                </picture>


                
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#section-about" class="footer__link">About Tiffany</a></li>
                            <li class="footer__item"><a href="#section-weddings" class="footer__link">Weddings</a></li>
                            <li class="footer__item"><a href="#section-testimonials" class="footer__link">Testimonials</a></li>
                            <li class="footer__item"><a href="#section-book" class="footer__link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        Website built by <a href="https://take2tech.ca">take2tech.ca</a>. &nbsp;Design ideas courtesy of Jonas Schmedtmann. Used with permission.
                    </p> 
                </div>
            </div>
        </footer>

        <!-- <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                    <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-weddings" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
                    <p class="popup__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                        amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                        sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                        gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
                        Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
                        vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                        vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                        euismod nisi porta.
                    </p>
                    <a href="#section-book" class="btn btn--green">Book now</a>
                </div>
            </div>
        </div> -->
    </body>
</html>