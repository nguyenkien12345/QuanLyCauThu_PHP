



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    button {
        margin-right: 20px;
        padding: 5px;
    }

    form {
        width: 600px;
        margin: auto;
        text-align: center;
    }

    div.form-group {
        width: 90%;
        height: 24px;
        margin: 5px;
    }

    div.form-group input {
        float: right;
        height: 20px;
        width: 400px;
    }

    span {
        font: 18px bold;
        font-weight: bold;
        float: right;
        margin-right: 10px;
    }

    h1 {
        text-align: center;
    }
</style>

<body>
<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'demo');
$sql = "SELECT * FROM players WHERE id =".$id;
$result = mysqli_query($conn,$sql);
//Gắn dữ liệu lấy được vào mảng $data
while($row = mysqli_fetch_assoc($result))
{
    $info = $row; 
}
// phần action của form, mình vẫn để là process.php mà phương thức thêm cầu thủ sử dụng, sở dĩ mình sử dụng chung file này để xử lý vì phương thức chỉnh sửa cũng có các bược validate giống với thêm mới.
// Cuối cùng là khi đã có thông tin cầu thủ lưu trong biến $info, mình sẽ đổ nó ra các ô nhập liệu bằng thuộc tính value của thẻ input:
?>
<form action="process.php?id=<?php echo $id ?>" method="POST">
            <h1>Chỉnh sửa thông tin cầu thủ</h1>
            <div class="form-group">
                <input type="text" name="name" value="<?php echo $info['name'] ?>"><span>Tên cầu thủ: </span>
            </div>
            <div class="form-group">
                <input type="text" name="age" value="<?php echo $info['age'] ?>"><span>Tuổi: </span>
            </div>
            <div class="form-group">
                <input type="text" name="national" value="<?php echo $info['national'] ?>"><span>Quốc tịch: </span>
            </div>
            <div class="form-group">
                <input type="text" name="position" value="<?php echo $info['position'] ?>"><span>Vị trí: </span>
            </div>
            <div class="form-group">
                <input type="text" name="salary" value="<?php echo $info['salary'] ?>"><span>Lương: </span>
            </div>
            <div class="form-group">
                <button type="submit" class="btnUpdate">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
        <!-- Ta sẽ gửi tới file process.php một biến $id thông qua url để nó nhận ra đâu là chỉnh sửa đâu là thêm mới. -->
        <!-- Giờ ta sẽ chỉnh sửa flle process.php để nó nhận diện đâu là thêm mới và đâu là chỉnh sửa để có những xử lý phù hợp. -->
        <!-- Mình sẽ chỉ cần chỉnh sửa doạn code sau khi đã validate thành công, vì cả hai phương thức đều cần validate mà. Ta sẽ chú ý đến đoạn code trong khung được bôi đỏ: -->
</body>

</html>