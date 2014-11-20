<?php
    @session_start();
    $cache_age = 1; // Seconds
    header('Cache-control: must-revalidate', false);
    header('Cache-control: max-age='.$cache_age, false);
    header( 'Expires: '.date( 'r', time() + $cache_age ) );
    include('ribbons.php');
    new RIBBONS;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>KSP Ribbon Generator - TESTING</title>
    <link rel="stylesheet" type="text/css" href="ribbons.css"/>
    <script type="text/javascript" src="jquery-2.1.1.js"></script>
    <script type="text/javascript" src="ribbons.js"></script>
</head>
<body>
<div style="
    width:840px;
    margin:auto;
    text-align:center;
">
    <h2>KSP Ribbon Generator - Testing</h2>
    <p>It's done! Please test everything carefully and report any problems or suggestions.
    <br/>If all goes well, I'd like to take down the old one in the next few days.</p>
    <h3><a onclick="window.open(this.href);return false;" title="Ribbons Rules by Unistrut" href="http://forum.kerbalspaceprogram.com/threads/25188?p=307673&amp;viewfull=1#post307673">Official Rules</a> | <a onclick="window.open(this.href);return false;" title="Contact Us" href="http://www.kerbaltekaerospace.com/?page=contact">Contact Us</a> | <a onclick="window.open(this.href);return false;" title="[WEB APP] KSP Ribbon Generator" href="http://forum.kerbalspaceprogram.com/threads/86422">KSP Forum Thread</a> | <a onclick="window.open(this.href);return false;" title="KSP-Ribbon-Generator on GitHub" href="https://github.com/Ezriilc/KSP-Ribbon-Generator">Source Code</a></h3>
<?php
    if(
        isset( RIBBONS::$user_id )
        AND RIBBONS::$user_id !== null
    ){
?>
    <h3 style="background-color:green;color:white;">You're logged in!</h3>
<?php }else{ ?>
    <p>You don't need to be logged in, but your <a title="Login" href="http://ribbons.kerbaltek.com/">normal login</a> should work here.<br/>Just come back and refresh this page after logging in.</p>
<?php } ?>
    <p>Don't worry, your ribbons in the old generator are safe - they won't be affected by this test page.</p>
<?php echo RIBBONS::$output; ?>
    <a title="Validate HTML" href= "http://validator.w3.org/check?uri=<?php echo rawurlencode( 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ); ?>">HTML5</a>, 
    <a title="Validate CSS" href= "http://jigsaw.w3.org/css-validator/validator?uri=<?php echo rawurlencode( 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ); ?>">CSS3</a>, & JavaScript
</div>
</body>
</html>