<!Doctype html>
<?php
$name = "sid";
$value= "lomdu";
setcookie($name,$value,time()+60);
?>
<html>
    <head>
        <title></title>
</head>
<body>
    <?php

    echo $COOKIE[$name];
    ?>
    </body>
</html>