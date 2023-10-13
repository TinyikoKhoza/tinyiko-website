<?php
$name= $_POST['name'];
$text = $_POST['mes'];
$post = $_POST['post'];

if($post){
    $write = fopen("com.txt","a+");
    fwrite($write, "<u><b>$name</b></u><br>$text<br>");
    fclose($write);


    $read = fopen("com.txt","r+t");
    echo "All comments:";

    while(!feof($read)){
        echo fread($read, 1024);
    }
    fclose($read);
}

else{
    $read = fopen("com.txt","r+t");
    echo "All comments:<br>";

    while(!feof($read)){
        echo fread($read, 1024);
    }
    fclose($read);
}
?>