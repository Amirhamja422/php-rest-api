<?php
include_once('config.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
$data = json_decode(file_get_contents("php://input"));


// $securityKey="123456789";
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	$allHeaders = getallheaders();

	// if ($allHeaders['Content-Type'] == 'application/json') {
		// if ($allHeaders['Authorization']==$securityKey) {
			// if(!empty($data->studen_name) && !empty($data->age) && !empty($data->city)){

				$create_ticket_sql = mysqli_query($conn, "INSERT INTO `students`(`studen_name`, `age`, `city`) VALUES ('".$data->studen_name."','".$data->age."','".$data->city."')");

				if($create_ticket_sql){
					echo json_encode(
						array('message' => 'Created successfully!!!')
					);
				}else{
					echo json_encode(
						array('message' => 'Not Created!')
					);
				}
			// }else{
			// 	echo json_encode(
			// 		array('message' => 'All field required')
			// 	);
			// }		
		// }else{
		// 		echo json_encode(
		// 			array('message' => 'Security Key Not Allowed')
		// 		);
		// 	}
		// }else{
		// 	echo json_encode(
		// 		array('message' => 'Content Type Not Allowed')
		// 	);
		// }
	// }else{
	// 	echo json_encode(
	// 		array('message' => '405 Method Not Allowed')
	// 	);
	// }
	?>