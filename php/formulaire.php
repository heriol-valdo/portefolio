<?php 
// recupreation des elements du formulaire

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

try{
  $mysqlClient = new PDO('mysql:host=localhost;dbname=sitelivre;charset=utf8', 'heriol', 'heriol', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}catch(Exception $exception){
	 die('Erreur : '.$exception->getMessage());

}

if (isset($name) &&  isset($email) && isset($message)) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$sqlQuery = 'INSERT INTO contact(name, email, message) VALUES (:name, :email, :message)';

    // Préparation
     $insertContact = $mysqlClient->prepare($sqlQuery);

   // Exécution ! La recette est maintenant en base de données
    $insertContact->execute([
    'name' => $name,
     'email' => $email,
      'message' => $message,
    
     ]);
      
      $_SESSION['emailMessage']=$email;




    
	}
	else{
		  echo "hey";
	}
    
}

?>

<?php 

if(isset($_SESSION['emailMessage'])){
include_once('index.php'); 
}else{
 echo "yo";
}
?>

