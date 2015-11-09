<?php
$input=getInput();
$text=$input['text'];
if($text=="")
{
	echo"CON Text field was empty!".PHP_EOL."Please enter something...anything";
}
else
{
	echo"END Text field wasn't empty!";
}
function getInput()
{
	$input=array();
	$input['text']=$_REQUEST['text'];
	return $input;
}
?>