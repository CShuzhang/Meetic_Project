<?php
class upload{

	public function image(){
		if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
		//	$ext = $_FILES['image']['name'];
		//	$file_ext = strstr($ext, ".");

			if (file_exists("../Profil_image/".$_SESSION['email'])) {
				$tmp = $_FILES['image']['tmp_name'];
				move_uploaded_file($tmp, "../Profil_image/".$_SESSION['email']."/img.jpg");
			}
			else{
				mkdir("../Profil_image/".$_SESSION['email'], 0777);
				$tmp = $_FILES['image']['tmp_name'];
				move_uploaded_file($tmp, "../Profil_image/".$_SESSION['email']."/img.jpg");
			}
		}
	} 
}

$upload = new upload();
$upload -> image();

?>