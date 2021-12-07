<?php
include('config.php');
include('includes/header.php');
?>
    <div id="wrapper">
<main>
    <h1> <?php echo $headline;  ?> </h1>
    <table class="Jazz Greats">
    <?php foreach($people as $fullName => $image) : ?>
        <tr>
        <td><img src="images/jazz_greats/<?php echo substr($image, 0, 5); ?>.jpeg" alt="<?php echo $fullName; ?>"></td>
        <td><?php echo str_replace('_', ' ', $fullName); ?></td>
        <td><?php echo substr($image, 6); ?></td>
        </tr>

    <?php endforeach ; ?>   
    </table>
</main>
<aside>
    <h3>More info on our Jazz Greats</h3>
    <?php echo randImages2($jazz); ?>
    <p>When you hear music, once it's in the air you can never capture it again.</p>
</aside>
     
<?php 
include('includes/footer.php');
?>