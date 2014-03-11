	<body>
		<?php include("templates/menu.php");
			$election = $election_model->getElection($session_model->getElection());
			$candidates = $election_model->getCandidates($session_model->getElection());

			foreach($candidates as $candidate):
				$voteCount[$candidate['Candidacy_Id']] = $election_model->getResultsForCandidate($candidate['Candidacy_Id'])['Count'];
			endforeach;
		 ?>
		<div id = "contents">
			<div id = "title">
				<?php echo "{$election['Election_Name']}";?>
			</div>
			<div id = "list">
				<table>
					<?php 
						echo validation_errors();
						echo "<tr class=\"header\"><td>Candidate</td><td>Votes</td></tr>";
			 			foreach ($candidates as $candidate):
			 				echo "<tr><td>{$candidate['Last_Name']}, {$candidate['First_Name']}</td><td>".($voteCount[$candidate['Candidacy_Id']])."</td></tr>";
			 			endforeach;
			 		?>
			 	</table>
		 	</div>
	 	</div>
	</body>

</html>