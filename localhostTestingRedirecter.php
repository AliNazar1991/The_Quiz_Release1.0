<?php
//This page is the redirecter to the instance files if you ARE WORKING ON LOCALHOST. Just change the form action value in the start.html
// to "localhostTestingRedirecter.php" to be able to test the program on localhost!!!!!!!
$foldername = $_POST['foldername'];
$fullname = $_POST['firstname'];


$points = 'unchecked';
$achiev = 'unchecked';
$badges = 'unchecked';
$levels = 'unchecked';


$selected_radio = $_POST['btn'];

	if ($selected_radio == 'points') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: instance1/MainQuiz.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	} else if ($selected_radio == 'leader') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: instance2/leaderboard.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	
	}else if ($selected_radio == 'badges') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: instance3/MainQuiz.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	
	}else if ($selected_radio == 'levels') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: instance4/MainQuiz.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	}else if ($selected_radio == 'fullquiz') {
		header('Location: full/leaderboard.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	}else{
		echo " Ett fel har uppstått, se till att samtliga fält har blivit fyllda";
		echo "<br>";
		echo "Du skickas tillbaka om 3 sekunder";
		header("Refresh: 3; start.html");
	}
	
?>