    <?php
    @session_start();
    define("DEBUG", 0);
    define("USE_SANDBOX", 1);
    define("LOG_FILE", "./ipnsandbox.log");
    $raw_post_data = file_get_contents('php://input');
    $raw_post_array = explode('&', $raw_post_data);
    $myPost = array();
    foreach ($raw_post_array as $keyval) {
    	$keyval = explode ('=', $keyval);
    	if (count($keyval) == 2)
    		$myPost[$keyval[0]] = urldecode($keyval[1]);
    }
    $req = 'cmd=_notify-validate';
    if(function_exists('get_magic_quotes_gpc')) {
    	$get_magic_quotes_exists = true;
    }
    /* Sample PHP PayPal IPN Listener - http://www.richosoft2.co.uk - Steve Riches - info@richosoft2.co.uk */
    foreach ($myPost as $key => $value) {
    	if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
    		$value = urlencode(stripslashes($value));
    	} else {
    		$value = urlencode($value);
    	}
    	$req .= "&$key=$value";
    }
    if(USE_SANDBOX == true) {
    	$paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
    } else {
    	$paypal_url = "https://www.paypal.com/cgi-bin/webscr";
    }
    $ch = curl_init($paypal_url);
    if ($ch == FALSE) {
    	return FALSE;
    }
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
    if(DEBUG == true) {
    	curl_setopt($ch, CURLOPT_HEADER, 1);
    	curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
    }
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    $res = curl_exec($ch);
    if (curl_errno($ch) != 0) // cURL error
    	{
    	if(DEBUG == true) {	
    		error_log(date('[Y-m-d H:i e] '). "Can't connect to PayPal to validate IPN message: " . curl_error($ch) . PHP_EOL, 3, LOG_FILE);
    	}
    	curl_close($ch);
    	exit;
    } else {
    		if(DEBUG == true) {
    			error_log(date('[Y-m-d H:i e] '). "HTTP request of validation request:". curl_getinfo($ch, CURLINFO_HEADER_OUT) ." for IPN payload: $req" . PHP_EOL, 3, LOG_FILE);
    			error_log(date('[Y-m-d H:i e] '). "HTTP response of validation request: $res" . PHP_EOL, 3, LOG_FILE);
    		}
    		curl_close($ch);
    }
    $tokens = explode("\r\n\r\n", trim($res));
    $res = trim(end($tokens));
    	if (strcmp ($res, "VERIFIED") == 0) {
    	$item_name = $_POST['item_name'];
    	$item_number = $_POST['item_number'];
    	$payment_status = $_POST['payment_status'];
    	$firstname = $_POST['first_name'];
    	$payment_amount = $_POST['mc_gross'];
    	$payment_currency = $_POST['mc_currency'];
    	$txn_id = $_POST['txn_id'];
    	$payer_email = $_POST['payer_email'];
    	$txn_type = $_POST['txn_type'];
    /* 	ADD YOUR DATA PROCESSING FUNCTIONS HERE
    	TO Access your database and update it and activate any membership access or process orders etc.
    	and to send emails etc
    */
    	
    	if(DEBUG == true) {
    		error_log(date('[Y-m-d H:i e] '). "Verified IPN: $req ". PHP_EOL, 3, LOG_FILE);
    	}
    } else if (strcmp ($res, "INVALID") == 0) {
    	if(DEBUG == true) {
    		error_log(date('[Y-m-d H:i e] '). "Invalid IPN: $req" . PHP_EOL, 3, LOG_FILE);
    	}
    }
    ?>