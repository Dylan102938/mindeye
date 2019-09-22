<?php

    $img = $_POST['image'];
    $folderPath = "people/images/";

    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpg';

    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);

    $name = $_POST['name'];
    $relation = $_POST['relation'];

    $text = $name." - ".$relation;

    $namesPath = "people/";
    $file = $namesPath.'names.txt';

    $current = file_get_contents($file);
    $current .= $text."\n";
    file_put_contents($file, $current);

    header("Location: index.php");

?>
