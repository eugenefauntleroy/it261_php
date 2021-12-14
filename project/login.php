<?php
include('server.php');
//include('includes/header-form.php');
?>
<div id="wrapper">
<h1>Login!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <label for="username">Username</label>
    <input type="text" name="username" value="<?php 
        if(isset($_POST['username'])) echo $_POST['username']; ?>">

    <label>Password: </label>
    <input type="password" name="password">

    <button type="submit" class="btn" name="login_user">Login</button>
    <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">RESET</button>
    
    <?php //include('includes/errors.php'); ?>


</fieldset>
</form>

<p class="center">Haven't Registered? <a href="register.php">Register Here!</a></p>

</div>
</body>
</html>