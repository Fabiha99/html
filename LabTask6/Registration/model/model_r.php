<?php 


require_once 'db_connect2.php';


function showAllRegistration(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `register` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showRegistration($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `register` where Uname = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$uname]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function addRegistration($data){
    $conn = db_conn();
    $selectQuery = "INSERT into register (Name,Email, Uname,Gender,Pass)
VALUES (:name,:email,:uname,:gender, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':uname' => $data['uname'],
            ':gender' => $data['gender'],
            ':pass' => $data['pass']
        
            ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>