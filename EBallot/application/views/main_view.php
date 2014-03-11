	<body>
		<?php include("templates/menu.php"); ?>
		<div id = "contents">
			<div id = "login">

				<?php
					$user_data = array(
			              'name'        => 'username',
			              'id'          => 'username',
			              'value'       => '',
			              'maxlength'   => '100',
			              'size'        => '15',
			            );

					$pass_data = array(
			              'name'        => 'password',
			              'id'          => 'password',
			              'value'       => '',
			              'maxlength'   => '100',
			              'size'        => '15',
			            );

					echo form_open('main/login');
				?>

				<table>
					<?php
					echo "<tr><td>User No:</td><td>".form_input($user_data)."</td></tr>";
					echo "<tr><td>Password:</td><td>".form_password($pass_data)."</td></tr>";
					?>
				</table>
				
				<?php
				echo form_submit('login', 'Log In as User');
				echo form_close();
				?>
			</div>
		</div>
	</body>

</html>