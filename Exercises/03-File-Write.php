<?php
$text = "Sample text that should be written in the given file.";

try {
    $file = fopen("03-File-Write.txt", 'w');
    fwrite($file, $text);
    fclose($file);
    echo "Text was written in the file.";
} catch (Error) {
    echo "Error occured.";
}
?>