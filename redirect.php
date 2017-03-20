<?php 
	session_start();
	require_once 'lib/phpmailer/PHPMailerAutoload.php';
	$userErrors = [];
    $serverErrors = [];

	//Double checking posted info
	if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
	    $fields=[
	        'name'=>$_POST['name'],
	        'email'=>$_POST['email'],
	        'message'=>$_POST['message']
	    ];
	    
	    foreach($fields as $field=>$data){
	        if(empty($data)){
	            $userErrors[] = $field;
	        }
	    }
	} else {
		$userErrors[] = 'set';
	}

	// Recaptcha
    function post_captcha($user_response) {
        $rcfields_string = '';
        $rcfields = array(
            'secret' => '6LcQfRcUAAAAAIDCv1RxAB68EucLCcAcafPB8GfG',
            'response' => $user_response
        );
        foreach($rcfields as $key=>$value)
        $rcfields_string .= $key . '=' . $value . '&';
        $rcfields_string = rtrim($rcfields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($rcfields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $rcfields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        $userErrors[] = "recaptcha";
    }

	$_SESSION['fields'] = $fields;
	$_SESSION['userErrors'] = $userErrors;
    $_SESSION['serverErrors'] = $serverErrors;

    $m=new PHPMailer;
    $m->isSMTP();
    $m->SMTPAuth=true;

    //Email sent from:
    $m->Host='smtp.gmail.com';
    $m->Username='send.to.sundancetransport@gmail.com';
    $m->Password='password2870';
    $m->SMTPSecure='ssl';
    $m->Port=465;

	if(empty($userErrors) && empty($serverErrors)){
        $m->isHTML();
        $m->Subject ="You've recieved a contact form!";
        $m->Body='From: '.$fields['name'].' ('.$fields['email'].')<p>'.$fields['message'].'</p>';
        $m->FromName=$fields['name'];
        $m->AddAddress('send.to.sundancetransport@gmail.com','Sundance Transport');
        if ($m->send()) {
            header('Location: _thanks.php');
            die();
        } else{
            print_r('fail');
            $serverErrors[]="fail-mail";
        }
    }
    if(empty($serverErrors)){
        header('Location: index.php#contact');
        die();
    } 
    if(!empty($serverErrors)){
        $m->isHTML();
        $m->Subject = "There's an error on sundancetransportinc.com";
        $m->Body='You know what to do.';
        $m->FromName='Sundance Transport';
        $m->AddAddress('amiller5233@gmail.com','Adam Miller');
        if ($m->send()) {
            $serverErrors[]="auto";
        } else {
            $serverErrors[]="manual";
        }
        $_SESSION['serverErrors'] = $serverErrors;
    	header('Location: _error.php');
    } else {
        header('Location: _error.php');
    }
?>
