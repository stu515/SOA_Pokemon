	<body>
		<?php include("templates/menu.php");
			$election = $election_model->getElection($session_model->getElection());
			$candidates = $election_model->getCandidates($session_model->getElection());
			$not_candidates = $election_model->getNotCandidates($session_model->getElection());
		?>
		<div id = "contents">
			<div id = "title">
				<?php echo "{$election['Election_Name']}";
					echo form_open('electionpage/openElection');
					echo form_submit('openElection', 'Open Election')."<br/>";
					echo form_close();
				?>
			</div>
			<?php echo validation_errors();?>
			
			<div id = "title2">
				Candidates
			</div>

			<div id = "list">
				<table>
					<?php
			 			foreach ($candidates as $candidate):
			 				echo form_open('electionpage/removeCandidate', '', array('removeUser' => $candidate['User_Id']));
			 				echo "<tr><td>{$candidate['Last_Name']}, {$candidate['First_Name']}</td><td>";
			 				echo form_submit(array('name' => 'removeCandidate', 'value' => 'Remove', 'class' => 'receipt'))."</td></tr>";
			 				echo form_close();
			 			endforeach;
			 		?>
			 	</table>
			</div>

			<?php
				foreach ($not_candidates as $choice):
		 				$list_data["{$choice['User_Id']}"] = "{$choice['Last_Name']}, {$choice['First_Name']}";
		 		endforeach;
		 		if(isset($list_data)): ?>
				<div id = "title2">
					Add New Candidate
				</div>
				<div id = "box">
			 		<?php
			 			echo form_open('electionpage/addCandidate');
			 			$platform_data = array(
				              'name'        => 'platform',
				              'id'          => 'platform',
				              'value'       => '',
				              'maxlength'   => '100',
				              'rows'		=> '5',
				              'size'        => '10',
				            );
			 			echo form_dropdown('userCandidate', $list_data, '', 'class="drop"')."<br/>";
			 			echo "<div id=\"title3\">Platform:</div>";
			 			echo form_textarea($platform_data)."</br>";
			 			echo form_submit('addCandidate', 'Add New Candidate');
			 			echo form_close();
			 		?>
			 	</div>
		 	<?php endif;?>
	 	</div>
	</body>

</html>