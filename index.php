<!DOCTYPE HTML>
<html>
   <head>
    <title>Harjutus-8</title>
    <meta http-equiv="Content-Type" content="text/html;
    charset=utf-8">
   </head>
<body>
<h2>Funktsioon "continue"</h2>
   	<?php
    for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
       	continue;
    }

    echo $number . ", ";
    			}
			?>

<?php
//while ($number = 1; $number <= 10; $number++) {
//if ($number == 5) {
//continue;
//}
//echo $number . ", ";
//}
?>
<h2>Funktsioon "break"</h2>
<?php
for ($number = 1; $number <= 10; $number++) {
if ($number == 6) {
    break;
    				}
echo $number . ", ";
    			}
			?>

 </body>
</html>