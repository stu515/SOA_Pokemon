	<body>
		<?php include("templates/menu.php"); ?>
		<?php $electionList = $election_model->getElection(); ?>
		<div id = "contents">
			<div id = "title">
				My Elections
			</div>
			<div id = "list">
				<table>
					<?php 
					foreach($electionList as $election):
						echo "<tr>";
						echo "<td>{$election['Election_Name']}</td><td>";
						if($election['Is_Open'])
						{
							echo form_open('resultspage/setElection', '', array('election_id' => $election['Election_Id']));	
							echo form_submit(array('name' => 'setElection', 'value' => 'View Live Result','class' =>'receipt'));
							echo form_close();
						}
						else
						{
							echo form_open('electionpage/setElection', '', array('election_id' => $election['Election_Id']));	
							echo form_submit('setElection', 'Edit');
							echo form_close();
						}
						echo "</td></tr>";
					endforeach;
					?>
				</table>
			</div>

			<div id = "title">
				Create New Election
			</div>

			<?php
			echo form_open('adminprofile/createElection');
			$name_data = array(
	              'name'        => 'electionName',
	              'id'          => 'electionName',
	              'value'       => '',
	              'maxlength'   => '100',
	              'rows'		=> '5',
	              'size'        => '25',
	            );
			echo "<table><tr><td>Election Name:</td>";
			echo "<td>".form_input($name_data)."</td></tr></table>";
			echo form_submit('createElection', 'Create Election');
			echo form_close();

			?>
		</div>
	</body>

</html>