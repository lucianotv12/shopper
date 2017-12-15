<?php
		//ENVIAR MAIL
/*		$reconocido = User::get_user_by_id($_PARAM["userId"]);
		$reconocedor = User::get_user_by_id($_user_id); //el que reconoce
		if($_PARAM["puntos"]):
			$puntos_reconocidodos= " con " . $_PARAM["puntos"] . "puntos"; 
		else:
			$puntos_reconocidodos= " ";
		endif;
*/			
error_reporting(-1);
		echo "HOLA ACA ENTRE xxx";
		require_once  'Mandrill.php'; //Not required with Composer
//		    echo "se tendria que enviar el mail 1";

		$mandrill = new Mandrill('GCk0Op8yFFLZAp7OcbiZ4g');
	

		    echo "se tendria que enviar el mail";
		// send transactional email
		    $message = array(
		        'subject' => 'Hello, how are you?',
		        'text' => 'This is a text message',
		        'from_email' => 'hola@myoriginalworld.es',
		        'to' => array(
		            array(
		                'email' => 'lucianotv12@gmail.com',
		                'name' => 'lucianotv12@gmail.com'
		            )
		        )
		    );
		    $result = $mandrill->messages->send($message);    

		    print_r($result);
?>