<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/mobilehome.css" />
        <link rel="stylesheet" href="themes/metrocabmobile.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0-rc.1/jquery.mobile.structure-1.4.0-rc.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0-rc.1/jquery.mobile-1.4.0-rc.1.min.js"></script>
        <script src="js/mobileDash.js"></script>
    </head>
    <body>
        <div data-role="page" id="page2">
            <div id="imageheader">
                <img src="images/logomobile.png" alt="Logo" id="logoimage">
                <a href="#menupanel"><img src="themes/images/icons-png/bars-black.png" alt="Menu" id="menuimage"></a>
            </div>
            
            <div id="title"> 
                <h4>Welcome, <?php echo $_SESSION['pname'];?></h4> 
            </div>
            
            <div data-role="navbar" id="tabs">
                <ul>
                    <li><a href="#tab1" class="ui-btn-active ui-state-persist">BOOK NOW</a></li>
                </ul>
                <div id="tab1">
                    <input type="text" name="from" id="from" placeholder="From" value="" data-clear-btn="true">
                    <input type="text" name="to" id="to" placeholder="To" value="" data-clear-btn="true">
                    <input type="datetime-local" name="datetime-l" id="datetime-l" value="">
                    <input type="submit" value="Book" data-icon="grid" data-iconpos="right" data-mini="true">
                </div>
            </div>


            <div data-role="panel" id="menupanel" data-display="push" data-position-fixed="true">
                <div id="menu_container">
                    <ul id="menu">
                        <li><a href="mobilehome.html">Home</a></li>
                        <li><a href="">Contact Us</a>
                            <ul>
                                <li><a href="">General Manager</a></li>
                                <li><a href="">Accounts Manager</a></li>
                                <li><a href="">Customer Support</a></li>
                            </ul>
                        </li>
                        <li><a href="">Account Enquiries</a>
                            <ul>
                                <li><a href="">Print Application</a></li>
                                <li><a href="">CCard Auth. Form</a></li>
                            </ul>
                        </li>
                        <li><a href="">Supplies</a>
                            <ul>
                                <li><a href="">Order Voucher Form</a></li>
                            </ul>
                        </li>
                        <li><a href="">Useful Info</a>
                            <ul>
                                <li><a href="">Taxi Info</a></li>
                                <li><a href="">Meter Rates</a></li>
                                <li><a href="">Flat Rates</a></li>
                                <li><a href="">Online Services</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
