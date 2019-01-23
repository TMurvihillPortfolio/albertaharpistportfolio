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
        <meta name="description=" content="Professional Harpist Tiffany Hansen provides elegant, beautiful music for weddings, parties, funerals, or any special occasion.">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <script src="js/script.js"></script>
        <title>Tiffany Hansen | Wedding Music | Harpist | Wedding Ceremony</title>
    </head>

    <body>
        <header class="header">
            <div class="header__topLine">
                <div class="header__topLine--logo-box">
                    <img src="img/musiclogonobacktancolor1.png" alt="Logo made up of music symbols" class="header__topLine--logo">
                </div>
                <div class="navigation">                 
                    <nav class="header__topLine--navigation">
                        <ul class="header__topLine--navigation-list">
                            <li class="header__topLine--navigation-item"><a href="#about" class="header__topLine--navigation-link">About Tiffany</a></li>
                            <li class="header__topLine--navigation-item"><a href="#weddings" class="header__topLine--navigation-link">Weddings</a></li>
                            <li class="header__topLine--navigation-item"><a href="#contact" class="header__topLine--navigation-link">Contact</a></li>
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

        <main>
            <section class="section-subLanding">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Weddings, Special Occasions&hellip;
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">A fabulous event deserves fabulous music!</h3>
                        <p class="paragraph">
                             One of Tiffany's greatest enjoyments in playing such an elegant instrument is being able to provide a unique and memorable musical experience for weddings and special events. 
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">What style of music is on your playlist?</h3>
                        <p class="paragraph">
                            From Bach to Beyonce, any piece sounds beautiful on the harp! Please feel free to <a href="contact">contact Tiffany</a> for more information, to schedule a free consultation, or to book an event. 
                        </p>
                        <div class="u-center-text u-margin-top-huge">
                            <a href="#weddings" class="btn btn--green">More About Weddings</a>
                        </div>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img alt="The base of a beautiful gold harp."
                                 class="composition__photo composition__photo--p1"
                                 src="img/HarpBase.jpg">

                            <img alt="Closeup of hands playing the harp."
                                 class="composition__photo composition__photo--p2"
                                 src="img/HarpHands.jpg">

                            <img alt="Tiffany playing the harp in a long gown."
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
                                Wedding packages include music for the bridal entrance and the couple's triumphant walk back down the aisle. <a href="#weddings">Learn More...</a></p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Receptions</h3>
                            <p class="feature-box__text">
                                The harp can provide an elegant, magical atmosphere for your reception. Do you have a song in mind? <br> <a href="#contact">Contact Tiffany</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Special Occasions</h3>
                             <p class="feature-box__text">
                                Anniversaries, Christmas Parties, Funerals, Birthday Celebrations... the harp will make any event memorable!<br><a href="#contact">Contact Tiffany</a>
                            </p>
                        </div>
                    </div>  

                    <div class="col-1-of-4" id="tester">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Harp Lessons</h3>
                            <p class="feature-box__text">
                                Have you always wanted to learn the harp? Tiffany would love to teach you how to sound beautiful on the harp.<br> <a href="#contact">Contact Tiffany</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-weddings">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary" id="weddings">
                        More About Weddings
                    </h2>
                </div>

               <div class="weddingsContainer">

                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                      <div class="numbertext">1 / 9</div>
                      <img src="img/HarpSunlight.jpg" class="u-width-100" style="margin-top: 0;" alt="Harp in window with sunlight pouring in.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 9</div>
                      <img src="img/tiffany_weddingBrushOutBag2.jpg" class="u-width-100" style="margin-top:0;" alt="Tiffany playing the harp at a wedding beside a lake with a mountain background.">
                      <!-- <div class="text">Caption Text</div> -->
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">3 / 9</div>
                      <img src="img/HarpYellow.jpg" class="u-width-100" style="margin-top: -13%;" alt="Tiffany playing the harp at an intimate chapel in Calgary.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">4 / 9</div>
                      <img src="img/TiffAtLakeLouise.jpg" class="u-width-100" style="margin-top: -10%;" alt="Tiffany playing the harp at Lake Louise.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">5 / 9</div>
                      <img src="img/HarpHands.jpg" class="u-width-100" alt="Closeup of two hands playing the harp.">
                      <!-- <div class="text">Caption Two</div> -->
                    </div>                 
                    <div class="mySlides fade">
                      <div class="numbertext">6 / 9</div>
                      <img src="img/HarpBase.jpg" class="u-width-100" alt="Closeup of the base of a beautiful golden harp.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">7 / 9</div>
                      <img src="img/tiffanyBrownTint.gif" class="u-width-100" style="margin-top: -27%;" alt="Tiffany playing the harp in a long gown.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">8 / 9</div>
                      <img src="img/HarpAtLakeLouise.jpg" class="u-width-100" style="margin-top: -13%;" alt="Tiffany's harp with a Lake Louise background.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>           
                    <div class="mySlides fade">
                      <div class="numbertext">9 / 9</div>
                      <img src="img/TiffSmiling.jpg" class="u-width-100" style="margin-top:-60%;" alt="Closeup of Tiffany at the harp with a big smile for the camera.">
                      <!-- <div class="text">Caption Three</div> -->
                    </div>                                    
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>
                  <br>                 
                  <!-- The dots/circles -->
                  <div class = "dotContainer">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                    <span class="dot" onclick="currentSlide(6)"></span> 
                    <span class="dot" onclick="currentSlide(7)"></span> 
                    <span class="dot" onclick="currentSlide(8)"></span> 
                    <span class="dot" onclick="currentSlide(9)"></span> 
                  </div>

                   <div class="weddingsContainer__text">
                        <h3 class="heading-tertiary">Make your wedding extraordinary</h3>
                        <p><span>From Confetti Magazine (Fall/Winter 2018)  --  </span><br> When choosing music for your ceremony, hiring a live musician is infinitely more elegant than using a sound system. Professional musicians are trained to adapt to any situation, such as inconsistencies in the timing of your procession. They also add a tasteful pause for your officiant to say "Please rise," just before you and your betrothed make your way down the aisle. They can also incorporate other cues into your procession at your request.<br><br> Tiffany offers a free consultation and will customize all of the music to your musical tastes.</p>
                        <div class="u-center-text u-margin-top">
                            <a href="#contact" class="btn btn--green">Contact Tiffany</a>
                        </div>
                   </div>
               </div>               
            </section>

            <section class="section-about" id="about">               
                <div class="aboutContainer">
                    <div class="row">
                        <div class="story">
                            <div class="story__text">
                                <div class="u-center-text u-margin-bottom-small">
                                    <h2 class="heading-secondary">
                                        About Tiffany
                                    </h2>
                                </div> 
                                <p>
                                    Tiffany Hansen has played the harp for 29 years. Her musical pursuits have taken her to many places throughout Canada and the United States. She has been the Principal Harpist of the Calgary Civic Symphony for the past 14 years. One of her greatest enjoyments in playing such an elegant instrument is being able to provide a unique and memorable musical experience for weddings and special events. <br><br>

                                    <span>&quot;</span>Tiffany is an amazing musician and a wonderful harpist. I would highly recommend her for any occasion.<span>&quot;</span>&nbsp;&nbsp;&nbsp;--Tisha Murvihill
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
        
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Contact
            </h2>
        </div>
        <section class="section-book" id='contact'>           
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
    </body>
</html>