<?php 
// recupreation des elements du formulaire

      ini_set("SMTP","localhost");
   ini_set("smtp_port","25");


$email=$_POST['email'];
$message=$_POST['message'];

try{
  $mysqlClient = new PDO('mysql:host=localhost;dbname=sitelivre;charset=utf8', 'heriol', 'heriol', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}catch(Exception $exception){
	 die('Erreur : '.$exception->getMessage());

}

if (isset($email) && isset($message)) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$sqlQuery = 'INSERT INTO about(email, message) VALUES ( :email, :message)';

    // Préparation
     $insertContact = $mysqlClient->prepare($sqlQuery);

   // Exécution ! La recette est maintenant en base de données
    $insertContact->execute([
     'email' => $email,
      'message' => $message,
    
     ]);
      
      $_SESSION['emailMessage']=$email;

     
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: zeufackeriol9@gmail.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($email, $subject, $message);
 
     }
	else{
		  echo "hey";
	}
    
}

?>

<?php 

  ini_set("SMTP","localhost");
   ini_set("smtp_port","25");

     
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($email, $subject, $message);
 

?>
