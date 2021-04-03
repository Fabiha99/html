<?php 

require_once '../model_t.php';

if (deleteTeacher($_GET['id'])) {
    header('Location: ../showAllTeachers.php');
}

 ?>