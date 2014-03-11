	<body>
		<?php include("templates/menu.php"); ?>
		<div id = "contents">
			<div id = "login">
				<?php
				if(isset($error))
					echo $error."</br>";
				
				$pass_data = array(
		              'name'        => 'password',
		              'id'          => 'password',
		              'value'       => '',
		              'maxlength'   => '100',
		              'size'        => '15',
		            );
				echo form_open('adminmain/login');
				?>

				<table>
					<?php echo "<tr><td>Password:</td><td>".form_password($pass_data)."</td></tr>";?>
				</table>
				<?php 
					echo form_submit('login', 'Log In as Admin');
					echo form_close();
				?>
			</div>
		</div>
	</body>

</html>