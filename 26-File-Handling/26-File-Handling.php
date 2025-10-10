<?php
if (file_exists("26-File-Handling.txt")) {
    echo "Data file exists!";
} else {
    echo "Data file does not exist on that path.";
}

$dataFile = "26-File-Handling.txt";

echo "<br><br>--- a+ ---<br>";
$appendFile = fopen($dataFile, "a+");
if ($appendFile) {
    fwrite($appendFile, "This text was appended using a+ mode.\n");

    rewind($appendFile);
    $appendedContent = fread($appendFile, filesize($dataFile));
    echo "Content after a+ mode:<br>" . $appendedContent . "<br>";
    fclose($appendFile);
} else {
    echo "Failed to open file in a+ mode.<br>";
}

echo "<br>--- r+ ---<br>";
$opening = fopen($dataFile, "r+");

if ($opening) {
    $content = fread($opening, filesize($dataFile));
    echo "Original content:<br>" . $content . "<br>";

    fwrite($opening, "This text was added using r+ mode.\n");

    rewind($opening);
    $updatedContent = fread($opening, filesize($dataFile));
    echo "Updated content:<br>" . $updatedContent . "<br>";

    fclose($opening);
} else {
    echo "Failed to open and read from the file.";
}

/*
// File delete
if (file_exists("file_to_delete.txt")) {
    if (unlink("file_to_delete.txt")) {
        echo "File deleted successfully.";
    } else {
        echo "Failed to delete file.";
    }
} else {
    echo "File does not exist.";
}
*/

/*
// File rename
if (file_exists("26-File-Handling.txt")) {
    if (rename("26-File-Handling.txt", "26-File-Handling-renamed.txt")) {
        echo "File renamed successfully.";
    } else {
        echo "Failed to rename file.";
    }
} else {
    echo "Original file does not exist.";
}
*/

?>