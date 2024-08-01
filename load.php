
<?php

if ($handle = opendir('./upload')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<p>$entry\n<a class='dnl' href='download.php?name=$entry'>DNL</a>&nbsp;<a class='rem' href='remove.php?name=$entry'>REM</a></p>";
        }
    }

    closedir($handle);
}



?>
