<?php 

	try{
		$db = new PDO("sqlite:".__DIR__."/database.sqlite");
		 // echo 'Database Connected Successfully';
	}catch(PDOException $e){
		echo 'Something Wrong '.$e->getMessage();
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$skill = $_POST["lol"];
		$prpare = $db->query("SELECT * from ajax WHERE name LIKE '%$skill%' ");
		//$prpare->execute();
		echo '<div class="skill"><ul>';
		if($prpare){
			while ( $data = $prpare->fetch(PDO::FETCH_ASSOC)){
				echo '<li>'.$data['name'].'</li>';
			}
		}else{
			echo '<li> No Data found '.$skill.' </li>';
		}
		echo '</ul></div>';
	}
?>