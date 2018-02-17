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
			  <div class="">
			    <label for="email">Email address:</label>
			    <input type="email" class="validate" id="email" ng-model="data.email">
			  </div>
			  <div class="">
			    <label for="pwd">Password:</label>
			    <input type="password" class="validate" id="pwd" ng-model="data.password">
			  </div>
			  <div class="">
					<input type="checkbox" id="myCheckbox" class="filled-in" />
					<label for="myCheckbox">Remember Me</label>
			  </div>
				<br>
			  <div class="center-content">
			  	<button type="submit" class="btn amber lighten-2 black-text">Submit</button>
			  </div>
			</form>
		</div>
	</section>