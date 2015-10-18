<?php
// this redirecter is used when you have depoloyed the program unto a webserver.To use it just simply change the form action value
// in the start.html and/or start_upload.html file(s).
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
		header('Location: http://http://people.dsv.su.se/~alna0203/QuizFinal/instance1/MainQuiz.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	} else if ($selected_radio == 'leader') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: http://http://people.dsv.su.se/~alna0203/QuizFinal/instance2/leaderboard.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	
	}else if ($selected_radio == 'badges') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: http://http://people.dsv.su.se/~alna0203/QuizFinal/instance3/MainQuiz.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	
	}else if ($selected_radio == 'levels') {
		if($_FILES["xmlfile"]["name"] != null){
			move_uploaded_file($_FILES["xmlfile"]["tmp_name"], "MyQuestions/" . $_FILES["xmlfile"]["name"]);
		}
		header('Location: http://http://people.dsv.su.se/~alna0203/QuizFinal/instance4/MainQuiz.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	}else if ($selected_radio == 'fullquiz') {
		header('Location: http://http://people.dsv.su.se/~alna0203/QuizFinal/full/leaderboard.php?fullname='.urlencode($fullname).'&foldername='.$foldername);
	}else{
		echo " Ett fel har uppstått, se till att samtliga fält har blivit fyllda";
		echo "<br>";
		echo "Du skickas tillbaka om 3 sekunder";
		header("Refresh: 3; start.html");
	}
	
?>