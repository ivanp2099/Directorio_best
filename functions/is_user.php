<?php
global $db, $config;

$logged = (isset($_COOKIE['logged']) ? $_COOKIE['logged'] : null);
$logged = base64_decode($logged);
$logged = explode(',',$logged);
$array = array('UID'=>'','UEmail'=>'','UPass'=>'');

foreach($logged AS $data){
	@list($prefix,$value) = explode("||||",$data);
	$array[$prefix] = $value;
}

/*SQl Query*/
$CaUID = $array['UID'];
$CaUEM = $array['UEmail'];
$CaUPA = $array['UPass'];

	$query = 'SELECT * FROM `'.$config['dbname'].'`.`user` WHERE id IN ("'.$CaUID.'") AND username IN ("'.$CaUEM.'") AND password IN ("'.$CaUPA.'")';
	$sql = $db->query($query);
	$user = $sql->fetch(PDO::FETCH_ASSOC);
    if(!empty($user['id'])){ $user['logged'] = true; }else{ $user['logged'] = false; }

?>