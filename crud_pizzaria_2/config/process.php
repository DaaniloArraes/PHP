<?php
    session_start();
    
    include_once("connection.php");
    include_once("url.php");
    $data = $_POST;

    if(!empty($data)){

        if($data["type"] === "create"){
            $name = $data["name"];
            $phone = $data["phone"];
            $observation = $data["observation"];
            $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observation", $observation);
            try {
                $stmt->execute();
                $_SESSION["msg"] = "Pedido criado com sucesso!";
        
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            header("location:" .$BASE_URL. "../index.php");
        }

        else if($data["type"] === "edit"){
            
            $id = $data["id"];
            $name = $data["name"];
            $phone = $data["phone"];
            $observation = $data["observation"];

            $query = "UPDATE contacts SET name= :name, phone = :phone, observation = :observation WHERE id= :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observation", $observation);
            $stmt->bindParam(":id", $id);


            try {
                $stmt->execute();
                $_SESSION["msg"] = "Pedido atualizado com sucesso!";
        
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            header("location:" .$BASE_URL. "../index.php");
        }
        else if($data["type"] === "delete"){
            $id = $data["id"];
            $query = "DELETE FROM contacts WHERE id= :id";
            $stmt = $conn->prepare(query: $query);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Pedido removido com sucesso!";
        
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            header("location:" .$BASE_URL. "../index.php");
        }
        else if($data["type"] === "login"){
            $email = $data["email"];
            $senha = $data["senha"];

            if($email === "danilo.arfe@hotmail.com" && $senha == "123" ){
                $_SESSION["msg"] = "Seja Bem vindo!";
                header("location:" .$BASE_URL. "../index.php");
            }
            else{
                echo  "Email ou senha Invalido!";
            }
        }
    }
    else{
        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }

        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();
        }else{
            $contacts = [] ;
            $query  = "SELECT * FROM contacts";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $contacts = $stmt-> fetchAll();
        }
    }
    $conn = null;
?>