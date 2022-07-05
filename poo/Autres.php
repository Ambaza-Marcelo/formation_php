<?php
	require('classes/Autoloader.php');
	Autoloader::register();
	
 
?>

<form action="#" method="post">
	<?php
		$form = new Form($_POST);
		echo $form->input("username");
		 echo $form->input("passwowrd");
		 echo $form->submit();

	
	?>

</form>
 <?php
 	echo Form::chiffre(15);
 ?>
