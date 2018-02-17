<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<section ng-controller="register">
    <div class="card light-green lighten-1 notification-holder"  
    ng-if="data.display.success">
        <div class="">
        <i class="material-icons small right"  ng-click="data.display.success=false">clear</i>
            {{data.success}}
        </div>
    </div>
    <div class="card red lighten-3 notification-holder"
     ng-if="data.display.error">
        <div class="">
            <i class="material-icons small right " ng-click="data.display.error=false">clear</i>
            {{data.error}}
        </div>
    </div>
    <div class="form-holder">
        <h1>Register Team</h1>
        <br>
        <form ng-submit="submitForm()" method="post">
        <div class="form-group">
            <label>Full name</label>
            <input type="text" autofocus ng-model="data.full_name" required class="validate" id="full_name">
        </div>
        <div class="form-group">
            <label>Email ID:</label>
            <input type="email" required ng-model="data.email"  class="validate" id="email">
        </div>
        <div class="form-group">
            <label>Team Name:</label>
            <input type="text" required ng-model="data.team_name"  class="validate" id="team_name">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" required ng-model="data.password"  class="validate" id="pwd">
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" required ng-model="data.confirm_password"  class="validate" id="conf_pwd">
        </div>
        <div class="">
            <button type="submit" required  class="btn amber lighten-2 black-text"><b>Register</b></button>
        </div>
        </form>
    </div>
    
</section>