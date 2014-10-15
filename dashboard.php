<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Metro Cab of Boston</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script src="js/addressto.js"></script>
        <script src="js/addressfrom.js"></script>
        <link rel="stylesheet" href="css/dashboardGT1200.css" media="(min-width:1200px)">
        <link rel="stylesheet" href="css/dashboardGT1024.css" media="(min-width:1025px) and (max-width:1199px)">
        <link rel="stylesheet" href="css/dashboardGT768.css" media="(min-width:768px) and (max-width:1024px)">
        <link rel="stylesheet" href="css/dashboardGT481.css" media="(min-width:481px) and (max-width:767px)">
        <link rel="stylesheet" href="css/dashboardGT32.css" media="(min-width:320px) and (max-width:480px)">

        <link rel="stylesheet" href="css/animations.css">


        <link href="css/custom-theme/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.js"></script>

        <script src="js/dashboard.js"></script>


        <style>
            @media all{
                article, aside, details, figcaption, figure, footer, header, hgroup, nav, section{display: block;}
            }
        </style>
    </head>
    <body>
        <div id="top"></div>
        <div id="container">
            <header>
                <div id="headertop_container">
                    <div id="signin_container">
                        <ul id="signoutul">
                            <li id="welcome">Welcome, <?php echo $_SESSION['pname'];?></li>
                            <li><a href="<?php session_unset(); session_destroy(); ?>homepage.html">Sign out</a></li>
                        </ul>
                    </div>
                    <div id="numimage_container">
                        <img src="images/phone.jpg" alt="Number_Image" id="numimage">
                    </div>
                    <div id="logoimage_container">
                        <img src="images/Logo1.jpg" alt="Logo_Image" id="logoImage">
                    </div>
                </div>

                <nav>
                    <div id="menu_container">
                        <ul class="blankul">
                            <li><a class="blankmenu"></a></li>
                        </ul>
                        <ul id="menu">
                            <li class="sixteen"><a href="homepage.html">Home</a></li>
                            <li class="twentyone"><a href="">Contact Us</a>
                                <ul>
                                    <li><a href="">General Manager</a></li>
                                    <li><a href="">Accounts Manager</a></li>
                                    <li><a href="">Customer Support</a></li>
                                </ul>
                            </li>
                            <li class="twentysix"><a href="">Account Enquiries</a>
                                <ul>
                                    <li><a href="">Print Application</a></li>
                                    <li><a href="">CCard Auth. Form</a></li>
                                </ul>
                            </li>
                            <li class="sixteen"><a href="">Supplies</a>
                                <ul>
                                    <li><a href="">Order Voucher Form</a></li>
                                </ul>
                            </li>
                            <li class="twentyone"><a href="">Useful Info</a>
                                <ul>
                                    <li><a href="">Taxi Info</a></li>
                                    <li><a href="">Meter Rates</a></li>
                                    <li><a href="">Flat Rates</a></li>
                                    <li><a href="">Online Services</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="blankul">
                            <li class="blankli"><a class="blankmenu"></a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div id="contentdiv">
                <div id="signupdiv">
                    <form>
                        <div id="formfieldsdiv">
                            <div id="titlediv">New Booking</div>
                            <input id="TextField1" type="text" size="50" placeholder="FROM" required="required">   
                            <input id="TextField2" type="text" size="50" placeholder="TO" required="required">

                            <input type="text" name="pickupdatepicker" id="pickupdatepicker" placeholder="WHEN" required="required"/>
                            <select class="timeselector">
                                <option value="00:00">12:00 Midnight</option><option value="00:30">12:30 AM</option><option value="01:00">01:00 AM</option><option value="01:30">01:30 AM</option><option value="02:00">02:00 AM</option><option value="02:30">02:30 AM</option><option value="03:00">03:00 AM</option><option value="03:30">03:30 AM</option><option value="04:00">04:00 AM</option><option value="04:30">04:30 AM</option><option value="05:00">05:00 AM</option><option value="05:30">05:30 AM</option><option value="06:00">06:00 AM</option><option value="06:30">06:30 AM</option><option value="07:00">07:00 AM</option><option value="07:30">07:30 AM</option><option value="08:00">08:00 AM</option><option value="08:30">08:30 AM</option><option value="09:00">09:00 AM</option><option value="09:30">09:30 AM</option><option value="10:00">10:00 AM</option><option value="10:30">10:30 AM</option>
                                <option value="11:00">11:00 AM</option><option value="11:30">11:30 AM</option><option selected="selected" value="12:00">12:00 Noon</option><option value="12:30">12:30 PM</option><option value="13:00">01:00 PM</option><option value="13:30">01:30 PM</option><option value="14:00">02:00 PM</option><option value="14:30">02:30 PM</option><option value="15:00">03:00 PM</option><option value="15:30">03:30 PM</option><option value="16:00">04:00 PM</option><option value="16:30">04:30 PM</option><option value="17:00">05:00 PM</option><option value="17:30">05:30 PM</option><option value="18:00">06:00 PM</option><option value="18:30">06:30 PM</option><option value="19:00">07:00 PM</option><option value="19:30">07:30 PM</option><option value="20:00">08:00 PM</option><option value="20:30">08:30 PM</option><option value="21:00">09:00 PM</option><option value="21:30">09:30 PM</option>
                                <option value="22:00">10:00 PM</option><option value="22:30">10:30 PM</option><option value="23:00">11:00 PM</option><option value="23:30">11:30 PM</option>
                            </select>

                        </div>
                        <div id="bookbtndiv">
                            <button id="bookbtn"> Book Now </button> 
                        </div>
                    </form>
                </div>
                <div id="map-canvas"></div>
            </div>
            <footer>
                <div class="totop" id="gototop">
                    <a href="javascript:void(0)" class="totop">Top</a>
                </div>
                <img src="images/googleplay.jpg" class="footerimage" alt="googleplay"/>
                <img src="images/appstore.jpg" class="footerimage" alt="appstore"/>
            </footer>
        </div>
    </body>
</html>