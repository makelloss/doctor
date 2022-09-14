<?php
$b = 37.7;
$a = rand(330, 420)/10;
//$a = 37.7;
echo  ($a);
echo ($a >$b ? "<span style = \" color: red;\">Болен!</span>" : ($a ==$b ? "<span style = \" color: orange;\">Что-то нездоровится…</span>": "<span style = \" color: green;\">Здоров!</span>")); 
?>
