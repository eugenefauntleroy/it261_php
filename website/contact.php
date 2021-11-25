<?php
include('config.php');
include('includes/contact_header.php');
?>

    <div id="wrapper"> 
    <div class="contact">
<main class="contact">   
<h1 class="contact"> <?php echo $headline; ?></h1>
<h2 class="contact">Please Fill Out Our Order Form:</h2>
<?php include('includes/form.php');
?>
</main> 
    
<aside class="contact">   
<?php echo spice_pics(); ?>
</aside>
</div> <!-- end contact -->
</div><!--end wrapper -->
<?php
include('includes/footer.php');
?>