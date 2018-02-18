<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url().'assets/css/'.$css?>>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'?>">
</head>
<body ng-app="app" class="">
  <nav class="red darken-1">
    <div class="nav-wrapper">
      <a href="<?php echo base_url();?>" class="brand-logo">Event Scheduler</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url().'register';?>">Register</a></li>
        <li><a href="<?php echo base_url().'login';?>">Login</a></li>
        <li><a href="<?php echo base_url().'about';?>">About</a></li>
        <li><a href="<?php echo base_url().'contact';?>">Contact</a></li>
      </ul>
      <ul class="side-nav red darken-1 " id="mobile-demo">
        <li><a class="white-text" href="#"><h5>Event Scheduler</h5></a></li>
        <li><a class="white-text" href="<?php echo base_url();?>">Home</a></li>
        <li><a class="white-text" href="<?php echo base_url().'register';?>">Register</a></li>
        <li><a class="white-text" href="<?php echo base_url().'login';?>">Login</a></li>
        <li><a class="white-text" href="<?php echo base_url().'about';?>">About</a></li>
        <li><a class="white-text" href="<?php echo base_url().'contact';?>">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="preloader-container" style="position:fixed;top:0px;left:0px;width:100%;height:120vh;background:black;z-index:20000;">
  <div class="preloader-wrapper big active" style="position:relative;left:45%;top:35%;">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  </div>
<article class="container">
