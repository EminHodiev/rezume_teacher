
<?php
if (isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
    require_once('../../config/db.php');
    $query = "delete from rezume where id = $id;";

    mysqli_query($con, $query);
    
}
header("Location: ../index.php?page=listStudent");

?>