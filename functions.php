<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		global $orderby;
		$mysqli = new mysqli("mysql-170481.srv.hoster.ru", "srv170481_admin", "12345", "srv170481_eseng");
		$mysqli->query('SET NAMES "utf8"');
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

	// index

	function getReviewsById () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `reviews` ORDER BY `id_review`");

		closeDB();

		return resultToArray ($result);
	}

	// posts

	function getHeadsbyId () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `post_head` ORDER BY `id_ph` DESC");

		closeDB();

		return resultToArray ($result);
	}

	function getMainsbyId () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `post_main` ORDER BY `id_pm`");

		closeDB();

		return resultToArray ($result);
	}

	// others

	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>
