<!DOCTYPE html>
   
            <?php
            include ("header.php");
            ?>


    <div id="mainContent">

<!--        <div id="sideBar">

            <a href="register.php">Don't have an account?</a>
            <form action="login.php" method="post">
                <input class="loginInput" name="userName" class="mainSearch" placeholder="email or username">
                <input class="loginInput" type="password" name="password" class="mainSearch" placeholder="password">
                <input class="loginInput" type="submit" value="Login"><span class="alignRight"><a href="register.php">Forgot username or password?</a></span>
            </form>

            <a href="forgotPassword.php">Forgot password?</a>
            <span class="alignRight"><a href="register.php">Register</a></span>

        </div><!-- end of sidebar -->



        <div id="contennt" class="stiiched">

                <div class="success_box">All of the fields were successfully validated!</div>
    <div class="error_box"></div>

            <form name="register-form"action="registerNewUser.php" method="post">
                <input class="loginInput" name="userName" class="mainSearch" placeholder="Enter your prefered user name">
                <input class="loginInput" name="email" class="mainSearch" placeholder="Enter your email address">
                <input class="loginInput" type="password" name="password" class="mainSearch" placeholder="Enter your password">
                <input class="loginInput" type="password" name="password_confirm" class="mainSearch" placeholder="Reenter your password">
                <input class="loginInput" type="submit" name="submit" value="Register">
            </form>
        </div><!-- end of content -->


        <div class="clearfix"></div>

    </div>

        <?php

            include ("footer.php");
        
        ?>

		</div>
		<!-- End site content -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/validate.min.js"></script>
<script>var validator = new FormValidator('register-form', [{
    name: 'req',
    display: 'required',    
    rules: 'required'
}, {
    name: 'userName',
    rules: 'required|alpha_numeric|required|min_length[6]'
}, {
    name: 'password',
    rules: 'required|min_length[6]'
}, {
    name: 'password_confirm',
    display: 'password confirmation',
    rules: 'required|matches[password]'
}, {
    name: 'email',
    rules: 'valid_email'
}, {
    name: 'minlength',
    display: 'min length',
    rules: 'min_length[8]'
}], function(errors, evt) {var SELECTOR_ERRORS = $('.error_box'),
        SELECTOR_SUCCESS = $('.success_box');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
        
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(200);
    } else {
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(200);
        return true;


        

    }
    
    if (evt && evt.preventDefault) {
        evt.preventDefault();
    } else if (event) {
        event.returnValue = true;
    }

         

});



</script>
        
    </body>
</html>