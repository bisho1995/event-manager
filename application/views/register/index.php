<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<section ng-controller="register">
    <div ng-if="data.display.success">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{data.success}}
        </div>
    </div>
    <div ng-if="data.display.error">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{data.error}}
        </div>
    </div>
    <div class="form-holder">
        <h1>Register a new team</h1>
        <br>
        <form ng-submit="submitForm()" method="post">
        <div class="form-group">
            <label>Full name</label>
            <input type="text" autofocus ng-model="data.full_name" required class="form-control" id="full_name">
        </div>
        <div class="form-group">
            <label>Email ID:</label>
            <input type="email" required ng-model="data.email"  class="form-control" id="email">
        </div>
        <div class="form-group">
            <label>Team Name:</label>
            <input type="text" required ng-model="data.team_name"  class="form-control" id="team_name">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" required ng-model="data.password"  class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" required ng-model="data.confirm_password"  class="form-control" id="conf_pwd">
        </div>
        <div class="container-fluid text-center">
            <button type="submit" required  class="btn  btn-outline-primary btn-block"><b>Register</b></button>
        </div>
        </form>
    </div>
    
</section>