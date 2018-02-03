<?php
$baseURL = 'http://mockups:8888/imdb/';
$requestURI = @$_SERVER['REQUEST_URI'];
$splitString = explode('/', $requestURI);
@$page = $splitString[2];
define('BASEURL', $baseURL);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
  		<meta charset="utf-8"/>
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<title>Movie DB</title>
      
      	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all"/>
      	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,300,700|Open+Sans:300italic,400,300" media="all"/>
      	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all"/>
      	
   		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/banner-bootsrap.css"/>
   		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap-datetimepicker.min.css"/>
  	 	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/default.css"/>
   		
   </head>
   
   <body>