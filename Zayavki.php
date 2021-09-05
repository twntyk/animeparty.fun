<?php

// Открыть текстовый файл
$f = fopen("Zayavki.txt", "a");

// Записать текс
fwrite($f, $_POST["name"]);




// Закрыть текстовый файл
fclose($f);

// Открыть файл для чтения и прочитать строку
$f = fopen("file.txt", "r");

// Читать текст
echo fgets($f );
fclose($f);

?>
