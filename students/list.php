<?php
require_once('../config/db.php');

$query = 'SELECT * FROM rezume';
$res  = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>


<table class="table" border="2">
<tr>
    <th>#</th>
    <th>Фото</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Отчество</th>
    <th>Дата рождения</th>
    <th>Телефон</th>
    <th>Адресс</th>
    <th>образование</th>
    <th>Позиция</th>
    <th>В какой школе он предподовал</th>
    <th>Доп. инфо</th>
    <th>Удалить</th>
</tr>

<?php
$i=0;
while($row = mysqli_fetch_assoc($res))
{
$i++;    
?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['photo'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['surname'];?></td>  
    <td><?php echo $row['otchestva'];?></td>
    <td><?php echo $row['birthday'];?></td>
    <td><?php echo $row['telephone'];?></td>
    <td><?php echo $row['adress'];?></td>
    <td><?php echo $row['obrzovanie'];?></td>
    <td><?php echo $row['opit'];?></td>
    <td><?php echo $row['school_id'];?></td>
    <td><?php echo $row['dop_info'];?></td>
    <td>
        <form action="students/delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <input type="submit" value="Удалить">
        </form>
    </td>
</tr>
<?php

}
?>
<style>
body {
    margin: 20px;
    font-family: Arial, sans-serif;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: center;
    background-color: #eaeaea; /* Цвет фона ячеек */
    color: #000; /* Цвет текста в ячейках */
}
th {
    background-color: #ccc; /* Цвет фона заголовков */
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
.name {
    text-align: left;
    margin: 20px;
}

  </style>

</body>
</html>

