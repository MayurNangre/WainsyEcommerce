<?php

//sensSMS function for OTP
if (!function_exists('order_create')) {
	function order_create($data)
	{
		/*  
		exit(); 
		$rand = rand(000000,999999);
		*/
		// dd($data);
		$requestdata = 'format=json&data={
		  "pickup_location": {
			"name": "' . $data['pickup_name'] . '"
		  },
		  "shipments": [{
			"order": "' . $data['order_id'] . '",
			"phone": "' . $data['phone'] . '",
			"name": "' . $data['name'] . '",
			"add": "' . $data['add'] . '",
			"pin": "' . $data['pin'] . '",
			"payment_mode": "' . $data['payment_mode'] . '",
			"products_desc": "' . $data['products_desc'] . '",
			"cod_amount": "' . $data['cod_amount'] . '",
			"country": "' . $data['country'] . '",
			"order_date": "' . $data['order_date'] . '",
			"total_amount": "' . $data['total_amount'] . '",
			"seller_add": "' . $data['seller_add'] . '",
			"seller_name": "' . $data['seller_name'] . '",
			"seller_inv": "' . $data['seller_inv'] . '",
			"quantity": "' . $data['quantity'] . '",
			"state":"' . $data['state'] . '",
			"city": "' . $data['city'] . '"
		  }]
		}';

		$url = "https://staging-express.delhivery.com/api/cmu/create.json";	// Test URL
		// $url = "https://track.delhivery.com/api/cmu/create.json";		// Live URL

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $requestdata);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Token 5e03d0590c829a95875ea8c045f815ef3b0b78db', 'Content-Type:application/json'));	// Test Token
		// curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Token 6a6edd9d0ca5c803e81cdd70dabff8c121c1cc67','Content-Type:application/json'));		// Live Token
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		//dd($result);
		return $result;
	}
}
if (!function_exists('create_warehouse')) {
	function create_warehouse($data)
	{
		// dd(json_decode($data));
		$data = json_decode($data);
		$requestdata = '{
			"name":"' . $data[1]->value . '",
			"email":"' . $data[2]->value . '",
			"phone":"' . $data[5]->value . '",
			"address":"' . $data[4]->value . '",
			"city":"' . $data[9]->value . '",
			"country":"India",
			"pin":"' . $data[8]->value . '",
			"return_address":"' . $data[4]->value . '",
			"return_pin":"' . $data[8]->value . '",
			"return_city":"' . $data[9]->value . '",
			"return_state":"' . $data[10]->value . '",
			"return_country":"India"
		}';
		// dd($requestdata);
		$url = "https://staging-express.delhivery.com/api/backend/clientwarehouse/create/"; //test Url
		//$url="https://track.delhivery.com/api/backend/clientwarehouse/create/"; //Live Url
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $requestdata);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Token 5e03d0590c829a95875ea8c045f815ef3b0b78db', 'Content-Type:application/json', 'Accept:application/json')); //test Token
		// curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Token 6a6edd9d0ca5c803e81cdd70dabff8c121c1cc67','Content-Type:application/json','Accept:aplication/json'));		// Live Token
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		// dd($ch);
		curl_close($ch);
		// dd($result);
		return $result;
	}
}
if(!function_exists('pickup_request')){
	function pickup_request($data){
			$requestdata='{
					"pickup_location": "'.$data['location'].'",
					"pickup_time": "'.$data['time'].'",
					"pickup_date": "'.$data['date'].'",
					"expected_package_count": '.$data['count'].'
			}';
			$url = "https://staging-express.delhivery.com/fm/request/new/"; //test Url
			//$url="https://track.delhivery.com/​fm/request/new/"; //Live Url
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $requestdata);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Token 5e03d0590c829a95875ea8c045f815ef3b0b78db', 'Content-Type:application/json')); //test Token
			// curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Token 6a6edd9d0ca5c803e81cdd70dabff8c121c1cc67','Content-Type:application/json'));		// Live Token
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
			// dd($result);
			return $result;
	}
}

/* if (!function_exists('order_create')) {
    function order_create($data)
    {

	$url = "https://staging-express.delhivery.com/api/cmu/create.json";
    $ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $requestdata);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Authorization: Token 5e03d0590c829a95875ea8c045f815ef3b0b78db','Content-Type:application/json'));
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$result = curl_exec($ch);
	curl_close($ch);
	 $d = json_decode($result);
	echo "<pre>";
	print_r($d);
	echo "<pre>";
	
    }
} */

function track_order_api($waybill)
{
	//$auth_token = "5e03d0590c829a95875ea8c045f815ef3b0b78db";		// Test Token
	$auth_token = "6a6edd9d0ca5c803e81cdd70dabff8c121c1cc67";		// Live Token

	$ch = curl_init();

	//$url = "https://staging-express.delhivery.com/api/v1/packages/json/";		// Test URL
	$url = "https://track.delhivery.com/api/v1/packages/";		// Live URL

	$dataArray = ['waybill' => $waybill, 'token' => $auth_token];

	$data = http_build_query($dataArray);

	$getUrl = $url . "?" . $data;

	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_URL, $getUrl);
	//curl_setopt($ch, CURLOPT_TIMEOUT, 80);

	$response = curl_exec($ch);
	if (curl_error($ch)) {
		//echo 'Request Error:' . curl_error($ch);
		return false;
	} else {
		//echo $response;
		return $response;
	}

	curl_close($ch);
}

function check_pincode_avail($pincode)
{
	//$auth_token = "5e03d0590c829a95875ea8c045f815ef3b0b78db";		// Test Token
	$auth_token = "6a6edd9d0ca5c803e81cdd70dabff8c121c1cc67";		// Live Token
	//$pincode = "400064";

	$ch = curl_init();

	//$url = "https://staging-express.delhivery.com/c/api/pin-codes/json/";		// test URL
	$url = "https://track.delhivery.com/c/api/pin-codes/json/";		// Live URL

	$dataArray = ['filter_codes' => $pincode, 'token' => $auth_token];

	$data = http_build_query($dataArray);

	$getUrl = $url . "?" . $data;

	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_URL, $getUrl);
	//curl_setopt($ch, CURLOPT_TIMEOUT, 80);

	$response = curl_exec($ch);
	if (curl_error($ch)) {
		//echo 'Request Error:' . curl_error($ch);
		return false;
	} else {
		//echo $response;
		return $response;
	}

	curl_close($ch);
}
