<?php

if(isset( $GLOBALS["HTTP_RAW_POST_DATA"]) && isset($_GET["name"])) {
		
	    $filename=$_GET["name"].time().".png";
		$fp=fopen($filename,'wb');
		$jpg=$GLOBALS["HTTP_RAW_POST_DATA"]; 
		if(fwrite($fp,($jpg))){
			fclose( $fp );
		    echo 'msg=success&imUrl='.urlencode($filename);
		   }
		else{
		   echo 'msg=failed';
		}
	
}  

else {echo 'msg=failed';}

?>