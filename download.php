<?php
if(isset($_GET['name']))
{
    $var_1 = $_GET['name'];
//    $file = $var_1;

$dir = "upload/"; // trailing slash is important
$file = $dir . $var_1;

if (file_exists($file))
    {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
    }
header("location:index.php");
} 

?>