<?php
$erros = [];
if (!is_string($_POST['name']) || strlen($_POST['name']) < 5 || strlen($_POST['name']) > 55) {
    $erros['name'] = "Tên cầu thủ không hợp lệ";
}
if (!is_numeric($_POST['age']) || $_POST['age'] < 0 || $_POST['age'] > 100) {
    $erros['age'] = "Tuổi cầu thủ không hợp lệ";
}
if (!is_string($_POST['national']) || strlen($_POST['national']) < 2 || strlen($_POST['national']) > 55) {
    $erros['national'] = "Quốc tịch cầu thủ không hợp lệ";
}
if (!is_string($_POST['position']) || strlen($_POST['position']) < 2 || strlen($_POST['position']) > 55) {
    $erros['position'] = "Vị trí cầu thủ không hợp lệ";
}
if (!is_numeric($_POST['salary']) || $_POST['salary'] < 0 || $_POST['salary'] > 100000000) {
    $erros['salary'] = "Lương cầu thủ không hợp lệ";
}
if (count($erros) > 0) {
    $err_str = '<ul>';
    foreach ($erros as $err) {
        $err_str .= '<li>' . $err . '</li>';
    }
    $err_str .= '</ul>';
    echo  $err_str;
} else 
{
    if (isset($_GET['id'])) {
        //Chỉnh sửa thông tin
        //Kết nối databse
        $con = mysqli_connect('localhost', 'root', '', 'demo');
        //Viết câu SQL lấy tất cả dữ liệu trong bảng players
        $sql = "UPDATE players SET name='".$_POST['name']."',age='".$_POST['age']."',national='".$_POST['national']."',position='".$_POST['position']."',salary='".$_POST['salary']."' WHERE id = ".$_GET['id'];
        // Chạy câu SQL
        if ($result = mysqli_query($con,$sql)) {
            echo "<h1>Chỉnh sửa thông tin cầu thủ thành công Click vào <a href='index.php' class='returnDemo'>đây</a> để về trang danh sách</h1>";
        }else{
            echo "<h1>Có lỗi xảy ra Click vào <a href='index.php' class='returnDemo'>đây</a> để về trang danh sách</h1>";
        }
    }
    else{
    $conn = mysqli_connect('localhost', 'root', '', 'demo');
    $sql = "INSERT INTO players(`name`,`age`,`national`,`position`,`salary`) VALUES 
    ('" . $_POST['name'] . "','" . $_POST['age'] . "','" . $_POST['national'] . "','" . $_POST['position'] . "','" . $_POST['salary'] . "');";
    if ($result = mysqli_query($conn, $sql)) {
        echo "<h1>Thêm mới cầu thủ thành công Click vào 
        <a href='index.php' class='returnDemo'>đây</a> để về trang danh sách</h1>";
    } else {
        echo "<h1>Có lỗi xảy ra Click vào 
        <a href='index.php' class='returnDemo'>đây</a> để về trang danh sách</h1>";
    }
}
}