<?php
//appends to the list if append POST is present
if(isset($_POST['append']) && $_POST['append'] != ''){
   
    $append = htmlspecialchars($_POST['append']);
    $handle = fopen('database/filedb.txt', 'a');
    fwrite($handle, $append."\n");
    fclose($handle);
    
}
//deletes if delete_index is present in POST
if(isset($_POST['delIndex']) && is_numeric($_POST['delIndex'])){
    $delIndex = $_POST['delIndex'];
    $file = file('database/filedb.txt');
    unset($file[$delIndex-1]);
    $newFile = '';
        foreach($file as $line){
            $newFile .= $line."";
        }
   $handle = fopen('database/filedb.txt', 'w');
    fwrite($handle, $newFile);
    fclose($handle);
}