<div id = "menu">
	<div id = "menu-header">
		<img src="<?php echo $base?>assets/images/logo.png"/>
	</div>
	<div id = "links">
		<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']):?>
			<a href="<?php echo $base?>index.php/userprofile"><?php echo "{$user['Last_Name']}, {$user['First_Name']}"?></a><br/>
		<?php else:?>
			<a href="<?php echo $base?>index.php/userprofile">User</a><br/>
		<?php endif;?>
		
		<a href="<?php echo $base?>index.php/adminprofile">Admin</a><br/>
	</div>
	<?php
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
		{
			echo form_open('main');
	 		echo form_submit('logout', 'Logout User')."<br/>";
	 		echo form_close();
	 	}
	 	if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'])
		{
			echo form_open('adminmain');
	 		echo form_submit('logout', 'Logout Admin')."<br/>";
	 		echo form_close();
	 	}
 	?>
</div>