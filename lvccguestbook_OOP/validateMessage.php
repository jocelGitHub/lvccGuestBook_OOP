
<?php
	require_once("config.php");		

		$name = $_POST['fname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$approved = 'N';

	$message = array(
      'name' => $name,
      'message' => $message,
      'email' => $email,
      'is_approved' => $approved
      );

	$config = new Message($message);
	$_message = $config->getMessage();
	$_name = $config->getName();
	$_email = $config->getEmail();
	$_is_approved = $config->isApproved();

	MessageDAO::create_message($_name, $_message, $_email, $_is_approved);
	header("location:view_all.php");
?>