<?php
    if(isset($_GET['file'])){
        $file = $_GET['file'];
        header('Content-Type: text/plain');
        if($file == 'info.txt')
            header('Content-Disposition: attachment; filename="info.txt"');
        else
            header('Content-Disposition: attachment; filename="certificate.txt"');
        readfile($file);
    }
?>