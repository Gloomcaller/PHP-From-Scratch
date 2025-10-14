<?php
if (isset($_POST['languages'])) {
    foreach ($_POST['languages'] as $language) {
        echo $language . "<br>";
    }
}
?>