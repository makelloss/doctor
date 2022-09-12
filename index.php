<?php
$b = 37.7;
$a = rand(330, 420)/10;

//echo round ($a);
if ($a > $b) {
    echo "<span style = \" color: red;\">Болен!</span>";
} elseif ($a == $b) {
    echo "<span style = \" color: orange;\">Что-то нездоровится…</span>";
} else {
    echo "<span style = \" color: green;\">Здоров!</span>";
}
//echo ($x >=36.7 ) ? "<span style = \" color: green;\">Здоров!</span>" : "<span style = \" color: red;\">Болен!</span>"; 
?>
