<?php
    require_once('../config/db.php');
if (isset($_POST['save']))
{
    $photo = $_POST['photo'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $otchestva = $_POST['otchestva'];
    $birthday = $_POST['birthday'];
    $telephone = $_POST['telephone'];
    $adress = $_POST['adress'];
    $obrzovanie = $_POST['obrzovanie'];
    $opit = $_POST['opit'];
    $school_id = $_POST['school_id'];
    $dop_info = $_POST['dop_info'];
    $query = "INSERT INTO rezume (photo,`name`,surname,otchestva,birthday,telephone,adress,obrzovanie,opit,school_id,dop_info)
    VALUES('$photo','$name','$surname','$otchestva','$birthday','$telephone','$adress','$obrzovanie','$opit','$school_id','$dop_info');";
    mysqli_query($con,$query);
    
}
?>
<?php
    require_once('../config/db.php');
    $query = "SELECT id, nomi_maktab FROM school;";
    $res = mysqli_query($con, $query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Резюме</title>
    
</head>
<body>
<div class="form-body">
    <div class="form-title ">
		<h3>Резюме предподователья</h3>
    <form action="" method="post">
        <label for="photo">Загрузить фото:</label><br>
        <input type="file" id="photo" name="photo" class="form-control" accept="image/*"><br>
        <label for="">Имя:</label>
        <input type="text" name="name" class="form-control"><br>    
        <label for="">Фамиля:</label>
        <input type="text" name="surname" class="form-control"><br>
        <label for="">отчество:</label><br>
        <input type="text" name="otchestva" class="form-control"><br>
        <label for="">дата рождения:</label><br>
        <input type="date" name="birthday" class="form-control"><br>
        <label for="">телефон:</label><br>
        <input type="number" name="telephone" class="form-control"><br>
        <label for="">адресс:</label><br>
        <input type="text" name="adress" class="form-control"><br>
        <label for="">образование:</label>
        <input type="text" name="obrzovanie" class="form-control"><br>
        <label for="">Позиция</label>
        <input type="text" name="opit" class="form-control"><br>
        <label for="">В какой школе или предподоваль:</label>
        <select name="school_id" class="form-control"><br>
        <?php
        while($row = mysqli_fetch_assoc($res))
        {
            ?>
            <option value="<?=$row['id'];?>"><?=$row['nomi_maktab'];?></option>
            <?php
        }
        ?>
    </select><br>
        <label for="">доп. инфор.:</label>
        <input type="text" name="dop_info" class="form-control"><br>
        <input type="submit" name="save" value="Добавить резюме"
        class="btn btn-outline-info form-control">
    </form>
    <script>
        alert("Ваша резюме добавлено в базу!")
    </script>
    </div>
</body>
</html>


    
