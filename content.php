<?php

if (isset($_GET['page']) && !empty($_GET['page']))
{
    $page  = $_GET['page'];
    if ($page == "addStudent")
    {
        require_once("students/create.php");
    }
    else if($page == "listStudent")
    {
        require_once("students/list.php");
    }

}
?>