<?php
session_start();

function checkLogin()
{


        try 
        {
            $pdo = new PDO('mysql:host=localhost;dbname=php_login', 'root', '');

        }
        catch (PDOException $e) 
        {
            echo 'Error: ' . $e->getMessage();
            exit();
        }

    try {
       
        $statement = $pdo->prepare('SELECT * FROM loginTable WHERE username=? AND  password=?');

        

        $statement->execute(array($_POST['username'], $_POST['password']));

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
                
    } 
    catch (PDOException $e) {
         echo $e->getMessage();
    }

}

$result=checkLogin();

if($result)
{
    $_SESSION['login']=true;
    $_SESSION['loginuser']=$result['username'];
    print "<script>window.location='home.php'</script>";


}
else {
    print "<script>window.location='index.php?err=1'</script>";
}
            


?>

