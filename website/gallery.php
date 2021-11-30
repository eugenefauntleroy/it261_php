<?php
include('includes/config.php');
include('includes/header.php');
?>
    <div id="wrapper">
<main>
    <h1> <?php echo $mainHeadline;  ?> </h1>
    <table class="Jazz Greats">
    <?php foreach($people as $fullName => $image) : ?>
        <tr>
        <td><img src="images/jazz_greats<?php echo substr($image, 0, 5); ?>.jpeg" alt="<?php echo $fullName; ?>"></td>
        <td><?php echo str_replace('_', ' ', $fullName); ?></td>
        <td><?php echo substr($image, 6); ?></td>
        </tr>

    <?php endforeach ; ?>   
    </table>
</main>
<aside>
    <h3>More info on our Jazz Greats</h3>
    <?php echo randImages2($jazz); ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et tortor id ipsum tincidunt dignissim id ut nibh. Morbi quis augue pretium, auctor sem eget, egestas eros. Mauris justo mauris, accumsan egestas enim in, ullamcorper vestibulum neque. Curabitur porttitor ante turpis, id venenatis leo tristique et.</p>
</aside>
     
<?php 
include('includes/footer.php');
?>