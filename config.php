<?php
$Server = 'localhost';
$User = 'root';
$Password = '';
$db = 'QuanLyCauThu';

$conn = mysqli_connect($Server,$User,$Password,$db);

$sql = 'SELECT * FROM players';
$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
    $data[] = $row;
}

$html = '';
// ghi nội dung html
foreach ($data as $value) {
    $html .= '
    <tr role="row">
        <td>'.$value['id'].'</td>
        <td>'.$value['name'].'</td>
        <td>'.$value['age'].'</td>
        <td>'.$value['national'].'</td>
        <td>'.$value['position'].'</td>
        <td>'.$value['salary'].' $</td>
        <td><a href="edit.php?id='.$value['id'].'" class="Edit_Player" id="Edit'.$value['id'].'">Edit</a></td>
        <td><a href="delete.php?id='.$value['id'].'" class="Delete_Player" id="Delete'.$value['id'].'"> Delete</a></td>
    </tr>';
}
// .= để nối chuỗi như vậy cứ mỗi lần lặp qua 1 cầu thủ trong danh sách thì sẽ có thêm một thẻ <tr> được nối vào $html.
?>