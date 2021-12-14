<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>
">
<span class="error">
    <?php echo $first_name_Err; ?>
</span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>
" >
<span class="error">
    <?php echo $last_name_Err; ?>
</span>

<label for="email">Email</label>
<input type="email" minlength="1" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
<span class="error">
    <?php echo $email_Err; ?>
</span>

<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
" min="10" max="10">
<span class="error">
    <?php echo $phone_Err; ?>
</span>


<label for="country">Select Your spice Country</label>
<select name="country">
<option value="" NULL
<?php if(isset($_POST['country']) && $_POST['country'] == NULL) echo 'selected="unselected"';?>
>Select One</option>
<option value="fr"
<?php if(isset($_POST['country']) && $_POST['country'] == 'in') echo 'selected="selected"';?>
>India</option>
<option value="ger"
<?php if(isset($_POST['country']) && $_POST['country'] == 'th') echo 'selected="selected"';?>
>Thailand</option>
<option value="swiss"
<?php if(isset($_POST['country']) && $_POST['country'] == 'mr') echo 'selected="selected"';?>
>Morocco</option>
<option value="us"
<?php if(isset($_POST['country']) && $_POST['country'] == 'mx') echo 'selected="selected"';?>
>Mexico</option>
<option value="spain"
<?php if(isset($_POST['country']) && $_POST['country'] == 'ml') echo 'selected="selected"';?>
>Malaysia</option>
</select>
<span class="error">
    <?php echo $country_Err; ?>
</span>


<label for="comments">Do you have a spice suggestion for us?<br>Let us know in the comments!</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
<span class="error">
    <?php echo $comments_Err; ?>
</span>


<label for="policy">Do you agree to our shipping policy?</label>
<ul>
<li><input type="radio" name="policy" value="agree"
<?php if(isset($_POST['policy']) && $_POST['policy'] == 'agree') echo 'checked="checked"' ;?>
>OK!<li>
</ul>
<span class="error">
    <?php echo $policy_Err; ?>
</span>

<div class="send">
<input type="submit" value="Send it">
<p><a href="">Reset</a></p>
</div>

</fieldset>
</form>