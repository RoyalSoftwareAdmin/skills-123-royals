<?php 
	include("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){		
		if($_POST["layout"] === "logout"){
			session_start(); //Start the current session
			session_destroy(); //Destroy it! So we are logged out now
			header("location: ../login.php");
		}

		if($_POST["layout"] == "1001"){
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$mobile = $_POST["mobile"];
			$password = md5($_POST["password"]);
			$gender = $_POST["gender"];
			$status = 1;			
				
		$query = "INSERT INTO rsm_user(fname, lname, email, password, status, gender, value, ActiveKey) VALUES ('".$fname."' ,'".$lname."' ,'".$email."' ,'". $password."' ,'". $status."' ,'". $gender."', 128 ,'Royals')";
			$res = query($query);
			if($res){				
				$query = "INSERT INTO rsm_profile(userName) VALUES ('".$email."')";
				$res = query($query);
				if($res){
					$query = "INSERT INTO rsm_login(userName, Password, value) VALUES ('".$email."' ,'".$password."', 2)";
					$res = query($query);
					if($res){
						echo json_encode(array('Status' => "1" ));
					}else{
						echo json_encode(array('Status' => mysqli_error($conn)));
					}
				}else{
					echo json_encode(array('Status' => mysqli_error($conn)));
				}
				
			}else{
				echo json_encode(array('Status' => mysqli_error($conn)));
			}
		}

	}

?>