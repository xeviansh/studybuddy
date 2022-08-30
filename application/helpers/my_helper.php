<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function status(){
    return array(
        "1" => "<span class='badge badge-success'>Active</span>",
        "2" => "<span class='badge badge-danger'>Deactive</span>",
        "3" => "<span class='badge badge-warning'>Block</span>",
        "0" => "<span class='badge badge-info'>Deleted</span>"
    );
}


function get_array_value($func, $val){
    $getFunction = $func;
    return $getFunction[$val];
}

function random_code($length) {

    $characters = array(

        "A","B","C","D","E","F","G","H","J","K","L","M",

        "N","P","Q","R","S","T","U","V","W","X","Y","Z",

        "1","2","3","4","5","6","7","8","9");

    if ($length < 0 || $length > count($characters)) return null;

    shuffle($characters);

    return implode("", array_slice($characters, 0, $length));

}


function pr($data){
    
    echo "<pre>";
    print_r($data);
    exit;
}

function questionType(){
    
    return array(
        "1" => "Multiple Choice",
        // "2" => "Multiple Response",
        // "3" => "True False"
    );
}

function get_file_extension($file_name) {
    return substr(strrchr($file_name,'.'),1);
}

function upload_image($folder_path,$file_name, $file_tempname,$image_id)
{

	$extension= end(explode(".", $file_name));
	$file_name= $image_id.".".$extension;

	$path=$folder_path.'/'.$file_name;
	if(file_exists($path))
	{
		unlink($path);		
	}
	$moved=move_uploaded_file($file_tempname,$path);
	if($moved)
	{
		return $file_name;	
	}

}

function testType(){
    return array(
        "1" => 'Exam',
        "2" => 'Practice',
        "3" => 'Quiz'
    );
}


