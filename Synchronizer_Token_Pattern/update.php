<?php 
session_start();
require_once 'Token.php';

if(isset($_POST['name'], $_POST['hiddenToken'])){

    $address   = $_POST['name'];
    $valid = false;

    $hiddenToken   = $_POST['hiddenToken'];

    if(isset($_COOKIE['sessionID'])){
        $sessionID = $_COOKIE['sessionID'];
        $originalToken = Token::getTokenBySession($sessionID);
        if($hiddenToken == $originalToken){
            $valid = true;
        }
    }

}

?>

<?php
	include_once("header.php");
?>

	<div class="container">
		<div class="row">

			<?php 
                if($valid){
                    echo '<h2 style="color:green;">Token Matched! Submited Success! </h2>';
                }else {
                    echo '<h2 style="color:red;">Token Error! Submited Fail! </h2>';
                }
            ?>

		</div>
	</div>

</body>

</html>