<?php
// Set the path to the "images" folder
$dir = 'images/';
$files = scandir($dir);
$imageFiles = [];

// Loop through all files and filter only valid image files (jpg, jpeg, png, gif)
foreach ($files as $file) {
    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
        $imageFiles[] = $file;
    }
}

// Return the list of images as a JSON response
echo json_encode($imageFiles);
?>
