<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="form-holder" ng-controller="login">
		<div>
			<h1>Login</h1>
		</div>
		<br>	
		<div>
			<form ng-submit="submitForm()" method="post">
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email" ng-model="data.email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" ng-model="data.password">
			  </div>
			  <div class="form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox"> Remember me
			    </label>
			  </div>
			  <div class="text-center">
			  	<button type="submit" class="btn btn-outline-primary">Submit</button>
			  </div>
			</form>
		</div>
	</section>