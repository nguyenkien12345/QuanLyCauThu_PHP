<?php 
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'demo');
$sql = "DELETE FROM players where id = '".$id."'";
if($result = mysqli_query($conn,$sql))
{
    echo '<h1>Đã xóa thành công Click vào <a href="index.php" class="returnDemo">đây</a> để quay lại trang chủ </h1>';
}
else
{
    echo '<h1>Xóa không thành công Click vào <a href="index.php" class="returnDemo">đây</a> để quay lại trang chủ </h1>';
}

?>