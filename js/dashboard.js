$(document).ready(function() {
                $("#tabs").tabs();
                $("#signinbutton").button();
                $("#registerbutton").button();
                $("#signupbutton").button();
                $("#bookbtn").button();
                $("#pickupdatepicker").datepicker({minDate: 0, maxDate: "+1M"});
                $('#tab1').click(function() {
                    $("#tabs-1").addClass("expandOpen1");
                });
                $('#tab2').click(function() {
                    $("#tabs-2").addClass("expandOpen1");
                });
                $('#tab3').click(function() {
                    $("#tabs-3").addClass("expandOpen1");
                });
                $('#tab4').click(function() {
                    $("#tabs-4").addClass("expandOpen1");
                });
                $("#gototop").hide();
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#gototop').fadeIn();
                    } else {
                        $('#gototop').fadeOut();
                    }
                });
                $('.totop').click(function() {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'slow');
                });
                ajaxrequestrandom();
                var set_delay = 10000;
                setInterval(ajaxrequestrandom, set_delay);


//                $("#signupdiv").dialog({
//                    autoOpen: false,
//                    width: 500,
//                    modal: true
//                });
//                $("#registerbutton").click(function() {
//                    $("#signupdiv").dialog("open");
//                });
            });
            function ajaxrequestrandom() {
                $.post("home.php", {type: 'random'}).done(function(data) {
                    $("#onlinetaxisdiv").html('<h2>' + data + ' Cabs </h2><span>VACANT NOW</span>');
                });
            }