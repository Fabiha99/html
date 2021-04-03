<?php  
require_once '../model_t.php';


if (isset($_POST['updateTeacher'])) {
	$data['name'] = $_POST['name'];
	$data['gender'] = $_POST['gender'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	//$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['course'] = $_POST['course'];
	$data['section'] = $_POST['section'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateTeacher($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showTeacher.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>