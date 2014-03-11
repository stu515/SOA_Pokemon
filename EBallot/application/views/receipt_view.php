	<body>
		<?php include("templates/menu.php");
			$election = $election_model->getElection($session_model->getElection());
			$voted_candidate = $user_model->getVoted($session_model->getLoggedInUserId(), $session_model->getElection());
		?>
		<div id = "contents">
			<div id = "title">
				<?php echo "{$election['Election_Name']}"?>
			</div>
			<?php
			echo "You voted for:<br/>";
			echo "<div id=\"name\">{$voted_candidate['Last_Name']}, {$voted_candidate['First_Name']}</div>";
			?>
		</div>
	</body>
	
</html>