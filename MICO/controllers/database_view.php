<?php //print $username; ?>
<?php //print $user_id; ?>
<?php //print $user_id; ?>
<?php //print $creature_name; ?>
<?php //print $creature_name; ?>
<?php //print $nickname; ?>
<?php //print $move_name; ?>

<?php

$array = array('test' => 'val', 'key' => 'value');
$data = extract($array);

foreach($array as $row)
{
	echo $data;
}

/**
if($data['username'] != null)
{
	print $username;
}
if($data['user_id'] != null)
{
	print $user_id;
}
if($data['creature_name'] != null)
{
	print $creature_name;
}
if($data['nickname'] != null)
{
	print $nickname;
}
if($data['username'] != null)
{
	print $username;
}
if($data['username'] != null)
{
	print $username;
}
**/
?>
