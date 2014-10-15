$(document).ready(function() {
                $("#tabs").tabs();
                $("#signinbutton").button();
                $("#registerbutton").button();
                $("#signupbutton").button();
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
                $(".zip-error").slideUp(200);

                $("#signupdiv").dialog({
                    autoOpen: false,
                    width: 500,
                    modal: true,
                    create: function() {
                        var firstReveal = true;
                        $("#ziptxt").keyup(function() {
                            $(".zip-error").slideUp(200);
                            var el = $(this);
                            if ((el.val().length == 5)) {
                                $.ajax({
                                    url: "http://zip.elevenbasetwo.com",
                                    cache: false,
                                    dataType: "json",
                                    type: "GET",
                                    data: "zip=" + el.val(),
                                    success: function(result, success) {
                                        $(".zip-error").slideUp(200);
                                        $("#citytxt").val(result.city);
                                        $("#statetxt").val(result.state);
                                        $("#addressdiv > div").slideDown();
                                        if (firstReveal) {
                                            setTimeout(function() {
                                                $("streettxt").focus();
                                            },
                                                    400);
                                        }
                                        ;
                                        firstReveal = false;
                                    },
                                    error: function(result, success) {
                                        $("#addressdiv > div").slideUp();
                                        $(".zip-error").slideDown(300);
                                    }
                                });
                            }
                            else if (el.val().length < 5) {
                                $(".zip-error").slideUp(200);
                            }
                            ;
                        });
                        
                        $("#agreecheckbox").click(function (){
                           if($("#agreecheckbox:checked")){
                             $("#signupbutton").removeAttr("disabled");
                           }
                           else{
                               $("#signupbutton").attr("disabled", "disabled");
                           }
                        });
                        
                        $("#signupbutton").click(function (event){
                            email = $("#emailtxt").val();
                            name = $("#nametxt").val();
                            pwd = $("#passwordtxt").val();
                            zip = $("#ziptxt").val();
                            street = $("#streettxt").val();
                            state = $("#statetxt").val();
                            city = $("#citytxt").val();
                            
                            $.post("join.php",{emailtxt: email, nametxt: name, passwordtxt: pwd, ziptxt: zip, streettxt: street, citytxt: city, statetxt: state})
                            .done(function (){
                                alert("Registration Successfully Completed. Thank You for Joining METRO CAB");
                                $("#signupdiv").dialog("close");
                                
                            });
                        });
                    }
                });
                $("#registerbutton").click(function() {
                    $("#addressdiv > div").hide();
                    $("#signupbutton").attr("disabled", "disabled");
                    $("#ziptxt").show();
                    $("#signupdiv").dialog("open");
                });
                
                $("#onlinetaxisdiv").draggable({containment: "#centerimage_div", scroll: false});



                $(document).tooltip({
                    show: {
                        effect: "slideDown",
                        delay: 150
                    }
                });

            });//end of document ready
            
            function ajaxrequestrandom() {
                $.post("randomtaxi.php", {type: 'random'}).done(function(data) {
                    $("#onlinetaxisdiv").html('<h2>' + data + ' Cabs </h2><span>VACANT NOW</span>');
                });
            }