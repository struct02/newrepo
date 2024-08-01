<?php
unlink('upload/'.$_GET['name']);
header("location:index.php");
?>
