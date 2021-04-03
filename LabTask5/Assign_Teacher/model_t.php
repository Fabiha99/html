<?php 

require_once 'db_connect.php';


function showAllTeachers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `teacher` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showTeacher($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `teacher` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE Username LIKE '%$username%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addTeacher($data){
	$conn = db_conn();
    $selectQuery = "INSERT into teacher(Name, Gender,Email, Username, Password,Course,Section,image)
VALUES (:name,:gender,:email, :username, :password, :course, :section,:image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':gender' => $data['gender'],
            ':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
            ':course' => $data['course'],
            ':section' => $data['section'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateTeacher($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE teacher set Name = ?, Gender = ?,Email = ?, Username = ?,Password = ? ,Course = ?,Section = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'],$data['gender'] ,$data['email'],$data['username'],$data['password'],$data['course'],$data['section'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteTeacher($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `teacher` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}