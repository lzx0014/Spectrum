<?php

session_start();

if (isset($_POST['submit']))
{
	include_once 'db-conn.php';

	// $_SESSION["askQuesTime"] = time();

	$username = $_SESSION["loginUser"];
	// $userId = $_SESSION["loginUserId"];
	$quesTitle = mysqli_real_escape_string($conn, $_POST['quesTitle']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	date_default_timezone_set("America/Chicago");
	$nowTime = date("Y-m-d h:i:sa");


	$sql = "SELECT * FROM spectrum_users WHERE userAccount='$username';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$userId = $row["userID"];
	}
	$sql = "INSERT INTO spectrum_topics (topicTitle, topicContent, userID, topicTime, topicNumberOfReplies, numberOfLikes, numberOfDislikes) VALUES ('$quesTitle', '$description', '$userId', '$nowTime', '0', '0', '0');";
	$success = mysqli_query($conn, $sql);
	if ($success)
	{
		header("Location: ../discussion/discussionIndex.php");
		exit();
	}
	else
	{

		echo ("Could not insert data : ".mysqli_error($conn). " ".mysqli_errno());

	}
}

else
{
	header("Location:../discussion/askQuestions.php");
	exit();
}
