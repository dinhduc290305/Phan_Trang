<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
require_once "connect.php";
global $conn;
$sql_page= 'SELECT * FROM trenlop';
$result = mysqli_query($conn, $sql_page);
$tongso=mysqli_num_rows($result);
//echo $tongso;
$row_per_page = 10;
$sql_in= "SELECT * FROM trenlop";
$result = mysqli_query($conn, $sql_in);
while($row = mysqli_fetch_assoc($result)){
//    echo $row['id'] .' '. $row['fullname'] .' '. $row['dob'] . '<br>';
}
for($i=1; $i<=($tongso/$row_per_page); $i++){
    echo '<a href="home.php?page='.$i.'">Trang '.$i.'</a> <br>';
}
$tranghientai=isset($_GET['page'])?$_GET['page']:1;
$vitridau = $row_per_page*($tranghientai-1);
$sql_query= "SELECT * FROM trenlop LIMIT ".$vitridau.",".$row_per_page."";
//echo $sql_query;
$result = mysqli_query($conn, $sql_query);
while($row = mysqli_fetch_assoc($result)){
    echo $row['id'] .' '. $row['fullname'] .' '. $row['dob'] . '<br>';
}

?>
</body>
</html>