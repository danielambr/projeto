<?php
header("Content-Type: text/html; charset=utf-8");

require_once ("../src/vendor/autoload.php");

require_once ("../config/config.php");


echo DIRIMG;
?>

<html>
<body>
<img src="<?php echo DIRIMG."usuario.jpg" ?>" alt="">
</body>
</html>