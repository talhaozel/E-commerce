<?php  


try{


$db=new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8",'root','12345678');

}

catch (PDOException $e){


	echo $e->getMessage();
}





?>