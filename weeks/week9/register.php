<?php 
include('server.php');
include('includes/header-form.php');
?>

<div id="wrapper">
<h1>Register Today!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<label for="first_name">First Name</label> 
<input type="text" name="first_name" value="<?php 
   if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>"> 

<label for="last_name">Last Name</label> 
<input type="text" name="last_name" value="<?php 
   if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>">

<label for="username">User Name</label> 
<input type="text" name="username" value="<?php 
   if(isset($_POST['username'])) echo $_POST['username']; ?>">

<label for="email">Email</label> 
<input type="text" name="email" value="<?php 
   if(isset($_POST['email'])) echo $_POST['email']; ?>">  

<label for="password_1">Password</label> 
<input type="password" name="Password_1"> value="<?php 
   if(isset($_POST['password_1'])) echo $_POST['password_1']; ?>">  


<label for="password_2">Confirm your password</label> 
<input type="password" name="Password_2"> value="<?php 
   if(isset($_POST['password_1'])) echo $_POST['password_2']; ?>">  

<button type="submit" class="btn" name="reg_user">Register</button>

<button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">RESET</button>

<?php 
include('includes/errors.php');
?>
</fieldset>
</form>

<h3>Already a member?</h3>
<span class="block">
<a href="login.php">Please sign in!</a></span> 


</div>
</body>
</html>