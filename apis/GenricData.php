<?php 
	include("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){		
		if($_POST["layout"] === "1001"){
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$password = md5($_POST["password"]);
			$gender = $_POST["gender"];
			$status = 0;

		$query = "INSERT INTO rsm_user(fname, lname, email, password, status, gender) VALUES ('".$fname."' ,'".$lname."' ,'".$email."' ,'". $password."' ,'". $status."' ,'". $gender."')";
		$res = query($query);
			if($res){
				$query = "INSERT INTO rsm_login(userName, Password, value) VALUES ('".$email."' ,'".$password."', 3)";
				$res = query($query);
					if($res){
						echo json_encode(array('Status' => "1" ));
					}else{
						echo json_encode(array('Status' => mysqli_error($conn)));
					}
			}else{
				echo json_encode(array('Status' => mysqli_error($conn)));
			}
		}

		if($_POST["layout"] === "1002"){
			$email = $_POST["email"];
			$password = md5($_POST["password"]);
			
			$query = "select * from rsm_login where userName = '".$email."' and Password = '".$password."'";
			$res = query($query);
			if(mysqli_num_rows($res) !== 0 ){
				$row = $res->fetch_assoc();
				$_SESSION["user"] = $row["userName"];
				echo json_encode(array('Status' => "1" ));				
			}else{
				echo json_encode(array('Status' => "Invalid UserName and Password"));
			}
		}

	}

?>