<?php

$my_file = fopen("location.txt", "W");
$information = "lat:" . $_GET["lat"] . "\nlong:" . $_GET["long"];
fwrite($my_file, $information)
fclose($my_file)

?>
