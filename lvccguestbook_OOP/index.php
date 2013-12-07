<?php
require_once("config.php");
$lists = MessageDAO::view_approved();

?>
<html>
<head>
	<title>Messages</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<script type="text/javascript" src = "validate.js"></script>
</head>
	

<div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <h1><a href="index.php" class="brand text-success">Laverdad Guests</a></h1>
          </div>
        </div>
        <div class = "container well" style = "background:skyblue">
			
				
				<div class = "container">
					<div class="span6 offset3 well" style = "margin-top:50px">
						<table class = "table table-striped">
							<caption><h3 style = "background:green; color:white">Messages</h3></caption>
							<?php foreach ($lists as $list):?>
							<tr>
								<td><?php echo $list['name'];?><br><small class="text-success"><?php echo $list['date_posted'];?></small></td>
								<td><?php echo $list['message'];?></td>
							</tr>
							<?php endforeach;?>	
						</table>
					</div>
				</div>
				<br><br><br>
				<div class = "container">				
					<div class="span8 offset2 well">
						<center>
							<div class = "row"><h3 style = "background:green; color:white; margin-left:20px">POST NEW MESSAGE</h3></div>
							<form action = "validateMessage.php" method = 'POST'>
							<div class = "row">
								<div class = 'container'>
									<div class = 'span6'>
										<p style = 'margin-left:130px'>Name&nbsp&nbsp<input type = "text" name = "fname" id = "fname" onblur = 'check_name()' ></p>
									</div>
									<div class = 'span2'>
										<span id = 'err_name'></span>
									</div>
								</div>
							</div>
							<div class = "row">
								<div class = 'container'>
									<div class = 'span6'>
										<p style = 'margin-left:130px'>Email&nbsp&nbsp<input type = "text" name = "email" id = "email" onblur = 'check_email()' ></p>
									</div>
									<div class = 'span2'>
										<span id = 'err_email'></span>
									</div>
								</div>
							</div>
							<div class = "row">
								<div class = 'container'>
									<div class = 'span6'>
										<p style = 'margin-left:110px'>Message&nbsp&nbsp <textarea type = "text" name = "message" id = "message" onblur = 'check_message()' ></textarea></p>
									</div>
									<div class = 'span2'>
										<span id = 'err_message'></span>
									</div>
								</div>
							</div>
							<div class = "row">
								<input type = 'submit' onclick = 'return validate()' name = "send" value = "POST MESSAGE" class = "btn btn-primary">
							</div>
							</form>
							<form action = "view_all.php">
							<input type = "submit" value = "VIEW LIST" class = "btn btn-default">
							</form>
						</center>
					</div>
				</div>
				
			
		</div>
	</div>
</html>