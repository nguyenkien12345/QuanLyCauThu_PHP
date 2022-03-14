<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<head>
    <meta charset="utf-8">
    <style type="text/css">
        table {
            width: 800px;
            margin: auto;
            text-align: center;
        }

        tr {
            border: 1px solid;
        }

        th {
            border: 1px solid;
        }

        td {
            border: 1px solid;
        }

        h1 {
            text-align: center;
            color: red;
        }

        #button {
            margin: 2px;
            margin-right: 10px;
            float: right;
        }
    </style>

<body>
    <table id="datatable" style="border: 1px solid">
        <h1>Quản lý cầu thủ</h1>
        <thead>
            <tr role="row">
                <th>ID</th>
                <th>Tên cầu thủ</th>
                <th>Tuổi</th>
                <th>Quốc tịch</th>
                <th>Vị trí</th>
                <th>Lương</th>
                <th style="width: 7%;">Edit</th>
                <th style="width: 10%;">Delete</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr role="row">
                <td>1</td>
                <td>Lionel Messi</td>
                <td>30</td>
                <td>Argentina</td>
                <td>Tiền Đạo</td>
                <td>230000 $</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#"> Delete</a></td>
            </tr> -->
        </tbody>
        <?php
        echo $html;
        ?>
        <tfoot>
            <tr>
                <td colspan="8">
                    <a href="add.php"><button id="button" class="Add_Player">Thêm cầu thủ</button></a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>