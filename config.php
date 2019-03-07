<?php
    if (!$_SESSION) {
        session_start();
        //echo "session started";
        sleep(3);
    }
    //email info for contact form
    $email = 'tmurv@shaw.ca'; //for testing
    //$email = 'info@albertaharpist.com';
    $siteEmailRecipient = "Tiffany";

    //reCaptcha ver. 2 info for contact form
    $recaptchaKeyv2 = '6LfvPJYUAAAAAETNBCYsJeUfj2VWtJaDrSL-RR0A';
    $recaptchaSecretKeyv2 = '6LfvPJYUAAAAAFKrXl9AxQjtuoGFztBzLUtuLsj5';

    //reCaptcha ver. 3 info for contact form
    $recaptchaKey = '6LdrkJIUAAAAAItgLonuFmpJSDOnofRZqEaamBni';
    $recaptchaSecretKey = '6LdrkJIUAAAAAMfuPB0mkRBec5fj2H2I3RlXtXku';