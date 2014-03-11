	<body>
		<?php include("templates/menu.php");
			$election = $election_model->getElection($session_model->getElection());
			$candidates = $election_model->getCandidates($session_model->getElection());
		?>
		<div id = "contents">
			<div id = "title">
				<?php echo "{$election['Election_Name']}"?>
			</div>
			<?php 
				echo validation_errors();
	 			echo form_open('votepage/submitVote');
	 		?>
	 		<div id = "list">
		 		<table>
		 		<?php
		 			foreach ($candidates as $candidate):
		 				echo "<tr><td class=\"radio\">".form_radio('candidates', $candidate['Candidacy_Id'], false)."</td>";
		 				echo "<td>{$candidate['Last_Name']}, {$candidate['First_Name']}</td></tr>";
		 				if($candidate['Platform'])
		 					echo "<tr><td class=\"radio\"></td><td class=\"platform\">{$candidate['Platform']}</td></tr>";
		 			endforeach;
		 		?>
		 		</table>
		 	</div>
		 	<?php
		 		echo form_submit('submitVote', 'Submit Vote');
		 		echo form_close();
		 	?>
	 	</div>
	</body>

</html>