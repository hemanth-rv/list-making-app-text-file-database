<?php
/**
 * List making program uses txt file db
 * has 2 text field forms, one appends to a list and the other delete any line number
 */
include 'includes/form-handle.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP File DB Note App</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
  </head>
  <body>
    <div class="yellow-box header">
        <h1><img src="assets/img/favicon.png" width="14px">PHP File DB list making app</h1>
    </div>
    <!-- Append & delete form -->
    <form class="yellow-box" method="post">
        <abbr title="Appends to the list">Add</abbr> a List: <input type="text" name="append"/><br>
        <abbr title="Delete a list by its serial number">Delete</abbr> a List: <input type="number" name="delIndex"/><br>
        <input type="submit" value="Submit"/>
    </form>
    <ol class="yellow-box">
<?php
// Lists down all lines of file db
$lines='';
$file_content = file('database/filedb.txt');
if(empty($file_content)){
    $lines = "Empty file";
    echo "<p>List is empty</p>";
}else{
    echo "Your List";
    foreach($file_content as $line){
        echo "<li>$line</li>";
        $lines .= "$line<br>";
    }
}
?>
    </ol>
    <div class="yellow-box footer">
        <p>End of list!</p>
    </div>
    <div class="yellow-box text-box">
        <p>Database View</p>
        <a href="database/filedb.txt">/database/filedb.txt (200 OK):</a>
        <p class="view-file"><?php echo $lines; ?></p>
    </div>
  </body>
</html>