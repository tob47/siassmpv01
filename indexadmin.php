<?php
session_start();
require("_db.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SIAS SMP KREASINDO TEGAL</title>
<link rel="stylesheet" href="../themes/alertify.core.css" />
<link rel="stylesheet" href="../themes/alertify.default.css" id="toggleCSS" />
<link rel="stylesheet" type="text/css" media="all" href="1.css" />
<link rel="stylesheet" type="text/css" media="all" href="2.css" />
<link rel="stylesheet" type="text/css" media="all" href="3.css" />
<link rel="shortcut icon" type="image/x-icon" href="book.ico" />
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="4.js"></script>
<script type='text/javascript' src="5.js"></script>
<script type='text/javascript' src="6.js"></script>
</head>
<body class="loginbody">

    <div class="loginwrapper1">
        <div class="loginwrap zindex100 animate2">
        <h1 class="logintitle"><span class="iconfa-lock"></span>SIAS SMP KREASINDO TEGAL<span class="subtitle">Silahkan login untuk memulai.</span></h1>
            <div class="loginwrapperinner">
				<?php include("login.php") ?>
            </div><!--loginwrapperinner-->
        </div>
        <div class="loginshadow animate3 fadeInUp"></div>
    </div><!--loginwrapper-->
    
    <script type="text/javascript">
    jQuery.noConflict();
    
    jQuery(document).ready(function(){
        
        var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
        jQuery('.loginwrap').bind(anievent,function(){
            jQuery(this).removeClass('animate2 bounceInDown');
        });
        
        jQuery('#username,#password').focus(function(){
            if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
        });
        
        jQuery('#loginform button').click(function(){
            if(!jQuery.browser.msie) {
                if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
                    if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
                    if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
                    jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
                        jQuery(this).removeClass('animate0 wobble');
                    });
                } else {
                    jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
                        jQuery('#loginform').submit();
                    });
                }
                return false;
            }
        });
    });
    </script>

</body>
</html>