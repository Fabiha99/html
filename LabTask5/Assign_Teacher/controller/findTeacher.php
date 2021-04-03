<?php

require_once '../model_t.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
    	require_once '../SearchAllUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}