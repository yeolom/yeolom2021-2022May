<?php


//Get target directory.
    $dirTonow = dirname( dirname(__FILE__) );
    $directories = explode("/", $dirTonow);
    print_r($directories);
    //$targetDir = "$directories[0]\\pdf\\$userId";
    
    $targetDir = "/pdf/$userId";
    echo $targetDir;
    echo "<br/>";

// $dirTonow = dirname( dirname(__FILE__) );
// //$dir = (dirname( dirname(__FILE__) )."\pdf");
// $directories = explode("\\", $dirTonow);
// //print_r($directories);

//$pdfPath = "$directories[0]\\pdf\\";

echo $pdfPath;