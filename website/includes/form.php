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



<label for="preference">Whic type of spice do you like?</label>
<ul>
<li><input type="radio" name="preference" value="mint"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'mint') echo 'checked="checked"' ;?>
>Mint</li>
<li><input type="radio" name="preference" value="pepper"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'pepper') echo 'checked="checked"' ;?>
>Pepper</li>
<li><input type="radio" name="preference" value="chili"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'chili') echo 'checked="checked"' ;?>
>Chili</li>
<li><input type="radio" name="preference" value="all"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'all') echo 'checked="checked"' ;?>
>I like all spice</li>
</ul>
<span class="error">
    <?php echo $preference_Err; ?>
</span>



<label for="spice">Select Your Spices</label>
<ul>
<li><input type="checkbox" name="spice[]" value="Cayenne"
<?php if(isset($_POST['spice']) && in_array('cayenne', $spice)) echo 'checked="checked"' ;?>
>Cayenne</li>
<li><input type="checkbox" name="spice[]" value="Peppercorn"
<?php if(isset($_POST['spice']) && in_array('peppercorn', $spice)) echo 'checked="checked"' ;?>
>Peppercorn</li>
<li><input type="checkbox" name="spice[]" value="Clove"
<?php if(isset($_POST['spice']) && in_array('clove', $spice)) echo 'checked="checked"' ;?>
>Clove</li>
<li><input type="checkbox" name="spice[]" value="Cardamon"
<?php if(isset($_POST['spice']) && in_array('Cardamon', $spice)) echo 'checked="checked"' ;?>
>Cardamon</li>
<li><input type="checkbox" name="spice[]" value="Safron"
<?php if(isset($_POST['spice']) && in_array('Safron', $spice)) echo 'checked="checked"' ;?>
>Safron</li>
<li><input type="checkbox" name="spice[]" value="Lemongrass"
<?php if(isset($_POST['spice']) && in_array('lomongrass', $spice)) echo 'checked="checked"' ;?>
>Lemongrass</li>
<li><input type="checkbox" name="spice[]" value="Cinnamon"
<?php if(isset($_POST['spice']) && in_array('cinnamon', $spice)) echo 'checked="checked"' ;?>
>Cinnamon</li>
</ul>
<span class="error">
    <?php echo $spice_Err; ?>
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