<?php

    $image = imagecreate(480, 320);

    imagejpeg($image);
    
    // header("Content-Type: image/jpeg");

    if (imagetypes() & IMG_PNG) { 
        echo "PNG Support is enabled"; 
    } 
    else { 
        echo "Not supported image type."; 
    } 


    echo "<br>";
    echo "imagesize() : ";  print_r(getimagesize ("image.jpeg"));
    echo "<br>";
    echo "imagex() : " . imagesx($image);
    echo "<br>";
    echo "imagey() : " . imagesy($image);
?>