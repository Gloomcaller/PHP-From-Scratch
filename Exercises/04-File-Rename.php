<?php
$oldName = "04-File-Renam.txt";
$content = file_get_contents($oldName);
echo "Old file content from: $oldName<br>";
echo $content;

$newName = "04-File-Rename.txt";
if (rename($oldName, $newName)) {
    echo "File was renamed to: $newName<br>";
} else {
    echo "Failed to rename the file.<br>";
}
?>