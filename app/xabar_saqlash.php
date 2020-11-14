


<?php
	include 'connect.php';
	if (empty($_POST['submit'])) {
		
			$email = $_POST['email'];

			$xabar = $_POST['xabar'];
	
	// echo($email."<br>".$xabar);
	// exit();

	$insert = $connect->prepare("INSERT INTO `foydalanuvchi_xabari` (`email`, `xabar`, `time`) VALUES (?, ?, NOW());");

    $insert->execute([
     	$email,
     	$xabar
     ]);
     if ($insert) {
      	header('Location:../contact.php');
 		echo("<b style=\"font-style:monospace;\">Xabaringiz yetkazildi!!!</b>");

     }
     else{
     	var_export($connect->errorInfo());
     }
}
else{
	header('Location:../contact.php');
}
?>