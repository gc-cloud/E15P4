<!doctype html>
<html>
<head>

    <title>Hello World</title>
    <meta charset='utf-8'>

</head>
<body>

  <?php
    echo '<h1> Hello Visitor! </h1>';
    echo '<h1> You are in universe 4 </h1>';
    echo '<br/>';

    echo 'The requesting browser is: ';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '<br/>';
    echo 'The remote port is: ';
    echo $_SERVER['REMOTE_PORT'];
    echo '<br/>';
  ?>

<!-- Make a comment about which browser is being used -->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br/>';
} else {
    echo 'You are not using Internet Explorer.<br/>';
}
echo '<br/>';
?>



</body>
</html>
