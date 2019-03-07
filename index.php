<?php session_start();  
    include 'config.php';
    include 'contactMailer.php';  
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
        <script src="https://www.google.com/recaptcha/api.js?render=6LdrkJIUAAAAAItgLonuFmpJSDOnofRZqEaamBni"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('6LdrkJIUAAAAAItgLonuFmpJSDOnofRZqEaamBni', {action: 'homepage'}).then(function(token) {
                    // pass the token to the backend script for verification

                    // add token value to form for PHP verification
                    document.getElementById('g-recaptcha-response').value = token;
                });
            });
        </script>

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
        <header class="header">
            <div class="header__topLine">
                <div class="header__topLine--logo-box">
                    <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052385/musiclogonobacktancolor1.png" alt="Logo made up of music symbols" class="header__topLine--logo">
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
                <p class="heading-primary">
                    <span class="heading-primary--main">Dreams</span>
                    <span class="heading-primary--sub">are where life happens</span>
                </p>
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

                <div class="row section-sublanding__text">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">A fabulous event deserves fabulous music!</h3>
                        <p class="paragraph">
                             One of Tiffany's greatest enjoyments in playing such an elegant instrument is being able to provide a unique and memorable musical experience for weddings and special events. 
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">What style of music is on your playlist?</h3>
                        <p class="paragraph">
                            From Bach to Beyonce, any piece sounds beautiful on the harp! Please feel free to <a href="#contact">contact Tiffany</a> for more information, to schedule a free consultation, or to book an event. 
                        </p>
                        <div class="u-center-text u-margin-top-big u-margin-bottom-big">
                            <a href="#weddings" class="btn btn--green">More About Weddings</a>
                        </div>
                    </div>
                    <div class="col-1-of-2 section-sublanding__text--photos">
                        <div class="composition"> 
                            <img alt="The base of a beautiful gold harp."
                                 class="composition__photo composition__photo--p1"
                                 src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052405/HarpBase.jpg">

                            <img alt="Closeup of hands playing the harp."
                                 class="composition__photo composition__photo--p2"
                                 src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1550592300/HarpHands.jpg">

                            <img alt="Tiffany playing the harp in a long gown."
                                 class="composition__photo composition__photo--p3"
                                 src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052426/tiffany.jpg">
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
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551051538/HarpSunlight.jpg" class="u-width-100" style="margin-top: 0;" alt="Harp in window with sunlight pouring in.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                        <div class="mySlides fade">
                        <div class="numbertext">2 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052353/tiffany_weddingBrushOutBag2.jpg" class="u-width-100" style="margin-top:0;" alt="Tiffany playing the harp at a wedding beside a lake with a mountain background.">
                        <!-- <div class="text">Caption Text</div> -->
                        </div>
                        <div class="mySlides fade">
                        <div class="numbertext">3 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp/v1550592922/HarpYellow.jpg" class="u-width-100" style="margin-top: -13%;" alt="Tiffany playing the harp at an intimate chapel in Calgary.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                        <div class="mySlides fade">
                        <div class="numbertext">4 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_auto,fl_lossy/v1551113200/TiffAtLakeLouise.jpg" class="u-width-100" style="margin-top: -10%;" alt="Tiffany playing the harp at Lake Louise.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                        <div class="mySlides fade">
                        <div class="numbertext">5 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1550592300/HarpHands.jpg" class="u-width-100" alt="Closeup of two hands playing the harp.">
                        <!-- <div class="text">Caption Two</div> -->
                        </div>                 
                        <div class="mySlides fade">
                        <div class="numbertext">6 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052405/HarpBase.jpg" class="u-width-100" alt="Closeup of the base of a beautiful golden harp.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                        <div class="mySlides fade">
                        <div class="numbertext">7 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052416/tiffanyBrownTint.gif" class="u-width-100" style="margin-top: -27%;" alt="Tiffany playing the harp in a long gown.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                        <div class="mySlides fade">
                        <div class="numbertext">8 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551051563/HarpAtLakeLouise.jpg" class="u-width-100" style="margin-top: -13%;" alt="Tiffany's harp with a Lake Louise background.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>           
                        <div class="mySlides fade">
                        <div class="numbertext">9 / 9</div>
                        <img src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052451/TiffSmiling.jpg" class="u-width-100" style="margin-top:-60%;" alt="Closeup of Tiffany at the harp with a big smile for the camera.">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>                                    
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>                 
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
                            <p><span>From Confetti Magazine (Fall/Winter 2018)  --  </span><br>
                                <span>&ldquo;</span>&nbsp;&nbsp;&nbsp;When choosing music for your ceremony, hiring a live musician is infinitely more elegant than using a sound system. Professional musicians are trained to adapt to any situation, such as inconsistencies in the timing of your procession. They also add a tasteful pause for your officiant to say 'Please rise,' just before you and your betrothed make your way down the aisle. They can also incorporate other cues into your procession at your request.<span>&rdquo;</span><br><br> Tiffany offers a free consultation and will customize all of the music to your musical tastes.</p>
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
                                        Tiffany has been one of the top free-lance harpists in the Calgary area for many years. Her musical pursuits have taken her to many places throughout Canada and the United States. She is Principal Harpist Emeritus of the <a href="https://calgarycivicsymphony.ca" target="_blank">Calgary Civic Symphony</a>. One of her greatest enjoyments in playing such an elegant instrument is being able to provide a unique and memorable musical experience for weddings and special events. <br><br>
                                    <span>&ldquo;</span>&nbsp;Tiffany is an amazing musician and a wonderful harpist. I would highly recommend her for any occasion.&nbsp;&nbsp;<span>&rdquo;</span>&nbsp;&nbsp;&nbsp;--Tisha Murvihill
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
                        <form action="index.php#contact" class="form" name="submit" method='post'>
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    <?php if(isset($_SESSION['result'])&&(!$_SESSION['result']=='')) {echo $_SESSION['result'].'<br>'; unset($_SESSION['result']);} else {echo 'Contact Tiffany';} ?>                                    
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
                            <!-- reCaptcha fields -->
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <input type="hidden" name="action" value="validate_captcha">
                        
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
                    <img alt="Logo-Tiffany Hansen's name in a pretty font." src="https://res.cloudinary.com/take2tech-ca/image/upload/q_auto,f_webp,fl_awebp,fl_lossy/v1551052457/logo.png">
                </picture>               
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#about" class="footer__link">About Tiffany</a></li>
                            <li class="footer__item"><a href="#weddings" class="footer__link">Weddings</a></li>
                            <li class="footer__item"><a href="#contact" class="footer__link">Contact</a></li>
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
        <script src="js/script.js?version=1.001"></script>
    </body>
</html>