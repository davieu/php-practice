<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
<?php
$break = "<br>";
echo 40 . $break;
echo -40 . $break;
echo 5 * 9 . $break;
echo 10 % 3 . $break;
echo (4 + 5) * 10 . $break;

$num = 10;
$num++; //11
$num += 10; //21
echo $num . $break;

echo abs(-100) . $break; //100  
echo pow(2, 4) . $break; //16
echo sqrt(144) . $break; //12
echo max(15, 2, 10, 13, 5) . $break; //15
echo min(15, 2, 10, 13, 5) . $break; //2
//rounds 
echo round(3.2) . $break; //3
//rounds up
echo ceil(3.3) . $break; //4
//rounds down
echo floor(3.9) . $break; //3


?>

</body>
</html>