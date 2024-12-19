<?php
require_once 'connect.php';
global $conn;
for($i=1;$i<=50;$i++){
    $sql='INSERT INTO `trenlop`(`fullname`,`dob`,`gender`) VALUES ("Dinh Hoang Duc '.$i.'","2005/03/29","male")';
    mysqli_query($conn,$sql);
}
//tạo 1 đường link, lấy danh sách theo từng trang, mỗi trang 10 phần tử.
