<?php
	session_start();
	// kết nối db
	include 'db/config.php';
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
	mysqli_set_charset($connection, 'utf8');

	// lấy dữ liệu search
	$links[] =  $_POST['links'];
	$content[] =  $_POST['content'];
	$title[] =  $_POST['title'];
	$image[] =  $_POST['image'];

	// hàm cắt domain
	function domain($domainb)
	{
		$bits = explode('/', $domainb);

		if ($bits[0]=='https:' || $bits[0]=='http:')
		{
			$domainb= $bits[2];
		} else {
			$domainb= $bits[0];
		}
			unset($bits);
			$bits = explode('.', $domainb);
			$idz=count($bits);
			$idz-=3;
		if (strlen($bits[($idz+2)])==2) {
			$url=$bits[$idz].'.'.$bits[($idz+1)].'.'.$bits[($idz+2)];
		} else if (strlen($bits[($idz+2)])==0) {
			$url=$bits[($idz)].'.'.$bits[($idz+1)];
		} else {
			$url=$bits[($idz+1)].'.'.$bits[($idz+2)];
		}
		return $url;
	}

	// lưu key search
	$key = $_SESSION["keySearch"];

	// thêm vào db
	function option1($links,$content,$title,$image, $connect)
	{
	 	$key = $_SESSION["keySearch"];
        for ($i = 1; $i < count($links) ; $i++){  
        	$title[$i] = strip_tags($title[$i]); // loại bỏ các tag html trong chuỗi
        	$content[$i] = strip_tags($content[$i]);
        	$links[$i] = domain($links[$i]);
            $sql = "INSERT INTO information(keyword, url, title, content, image) VALUES ('$key', '$links[$i]', '$title[$i]' , '$content[$i]', '$image[$i]' )";
            mysqli_query($connect, $sql);
        }

	 }

	 // gọi hàm option để lưu
	 option1($_POST['links'],$_POST['content'],$_POST['title'],$_POST['image'], $connection);