<?php

// Create a function that convert pdf to image
function pdf2image($pdf_file, $image_file, $resolution = 300) {

    if (!file_exists($pdf_file)) {
        return false;
    }

    $imagick = new Imagick();
    $imagick->setResolution($resolution, $resolution);
    $imagick->readImage($pdf_file);
    $imagick->setImageFormat('jpg');
    $imagick->writeImage($image_file);
    $imagick->clear();
    $imagick->destroy();
}

// Use the function
$pdf_file = "test.pdf";
$image_file = "test.jpg";
pdf2image($pdf_file, $image_file);

?>
