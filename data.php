<?php
//header('Content-Type: image/jpeg;');

$data = 'some long string of hex';


// tried echoing it directly..
//echo file_get_contents('assets/img/patronn.jpg');

echo file_get_contents('assets/img/patronn.jpg');





 function img2hex($image) {  
 	$hex = '';

   if ($fp = fopen($image, 'r')) {  
       $data = fread($fp, filesize($image));  
       fclose($fp);  

       for($i=0;$i<strlen($data);$i++) { 
           $a = ord($data[$i]); 
           $hex .= ($a <= 15) ? "0".dechex($a) : dechex($a); 
       } 
    } else  
       $hex = "File error";  
    return $hex;  
 } 

?>