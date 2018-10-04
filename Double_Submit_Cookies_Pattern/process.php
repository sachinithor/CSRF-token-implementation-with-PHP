<?php

if(isset($_POST['username'], $_POST['password'])){

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == 'sachini' && $password == 'sliit'){

		$sessionIdentifier = base64_encode(openssl_random_pseudo_bytes(32));
		setcookie("sessionID", $sessionIdentifier);

        $csrfToken = base64_encode(openssl_random_pseudo_bytes(32));
		setcookie("tokenID", $csrfToken);

        header('Location:form.php');

    } else {
        header('Location:index.php');
    }
}

