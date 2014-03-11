	<body>
		<?php include("templates/menu.php");
		$electionList = $election_model->getOpenElections();

		foreach($electionList as $election):
			$voted[$election['Election_Id']] = $user_model->hasVoted($session_model->getLoggedInUserId(), $election['Election_Id']);
		endforeach;


		 ?>
		<div id = "contents">
			<div id = "title">
				My Elections
			</div>

			<div id = "list">
				<table>
					<?php
						foreach($electionList as $election):
							echo "<tr>";
							echo form_open('votepage/setElection', '', array('election_id' => $election['Election_Id']));
							echo "<td>{$election['Election_Name']}</td><td class = \"button\">";
							if($voted[$election['Election_Id']])
							{
								echo form_submit(array('name' => 'setElection', 'value' => 'View Receipt','class' =>'receipt'));
							}
							else
							{
								echo form_submit('setElection', 'Vote');
							}
							echo form_close();
							echo "</td></tr>";
						endforeach;
					?>
				</table>
			</div>
		</div>
	</body>

</html>