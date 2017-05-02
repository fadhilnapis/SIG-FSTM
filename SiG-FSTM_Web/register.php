<!DOCTYPE html>
<html>
<?php 
include 'header.php';
?>
<body>
    <div class="container register">
        <h1>Register</h1>
        <div class=" card mdl-card mdl-shadow--2dp twelve columns">
            <form action="save.php" method="POST">
                <div class="row">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label three columns">
                        <input name="fullname" class="mdl-textfield__input" type="text" value=" " required>
                        <label class="mdl-textfield__label" >fullname</label>
                        <span class="mdl-textfield__error">Do not leave blank</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label three columns">
                        <input name="email" class="mdl-textfield__input" type="text" value=" " required>
                        <label class="mdl-textfield__label" >email</label>
                        <span class="mdl-textfield__error">Please enter your correct email</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label three columns">
                        <input name="ghusername" class="mdl-textfield__input" type="text" value=" " required>
                        <label class="mdl-textfield__label" >github username</label>
                        <span class="mdl-textfield__error">Do not leave blank</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label three columns">
                        <input name="phnumber" class="mdl-textfield__input" type="text" pattern="^\d{3}-\d{7}$" value=" " required>
                        <label class="mdl-textfield__label" >phone number</label>
                        <span class="mdl-textfield__error">please follow 01x-xxxxxxx</span>
                    </div>
                </div>
                <div class="row">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label six columns">
                        <input name="course" class="mdl-textfield__input" type="text" value=" " required>
                        <label class="mdl-textfield__label" >course name</label>
                        <span class="mdl-textfield__error">Do not leave blank</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label three columns">
                        <input name="passwd" class="mdl-textfield__input" type="text" required>
                        <label class="mdl-textfield__label" >create password</label>
                        <span class="mdl-textfield__error">Do not leave blank</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label three columns">
                        <input name="re-passwd" class="mdl-textfield__input" type="text" required>
                        <label class="mdl-textfield__label" >re-type password</label>
                        <span class="mdl-textfield__error">Do not leave blank</span>
                    </div>
                </div>
                <div class="row">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="submit">
                                    Submit <i class="material-icons">send</i>
                                </button>
                </div>
            </form>
        </div>
    </div>
    <script defer src="material.min.js"></script>
</body>