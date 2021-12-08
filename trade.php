<?php

if( !empty( $_POST )){
$payload  = $_POST ; 
$payload  = json_encode( $payload ) ; 
$payload  = date("Y-m-d H:i:s") ." \t ". json_encode( $payload )."\r\n" ; 

file_put_contents( "log.log" , $payload,  FILE_APPEND );
}else{
	echo "EMPTY PAYLOAD" ; 
}
