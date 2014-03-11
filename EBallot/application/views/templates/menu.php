<div id = "menu">
	<div id = "menu-contents">
		<div id = "menu-header">
			<img src="<?php echo $session_model->getBaseUrl()?>assets/images/logo.png"/>
		</div>
		<div id = "links">
			<a href="<?php echo $session_model->getBaseUrl()?>index.php/adminprofile"><div class = "link">Admin</div></a>
			
				<?php if($session_model->isUserLoggedIn()):
					$user = $user_model->getUser($session_model->getLoggedInUserId());?>
					<a href="<?php echo $session_model->getBaseUrl()?>index.php/userprofile"><div class = "link"><?php echo "{$user['Last_Name']}, {$user['First_Name']}"?></div></a>
				<?php else:?>
					<a href="<?php echo $session_model->getBaseUrl()?>index.php/userprofile"><div class = "link">User</div></a>
				<?php endif;?>
			
		</div>
		<div id = "logouts">
			<?php
				echo "<div class = \"logout-button\">";
					if($session_model->isUserLoggedIn())
					{
						echo form_open('main/logout');
				 		echo form_submit('logout', 'Logout User');
				 		echo form_close();
				 	}
				 	else
				 	{
				 		echo form_open('');
				 		echo form_submit(array('name'=>'logout', 'value'=>'Logout User', 'class'=>'disabled'));
				 		echo form_close();
				 	}
			 	echo "</div>";
			 	echo "<div class = \"logout-button\">";
				 	if($session_model->isAdminLoggedIn())
					{
						echo form_open('adminmain/logout');
				 		echo form_submit('logout', 'Logout Admin');
				 		echo form_close();
				 	}
				 	else
				 	{
				 		echo form_open('');
				 		echo form_submit(array('name'=>'logout', 'value'=>'Logout Admin', 'class'=>'disabled'));
				 		echo form_close();
				 	}
			 	echo "</div>";
		 	?>
		 </div>
	 </div>
</div>