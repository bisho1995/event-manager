<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url().'assets/css/'.$css?>>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'?>">
</head>
<body ng-app="app" class="">
<article class="container">