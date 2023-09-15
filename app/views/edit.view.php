<?php
$id=$_POST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];
?>

<?php require_once('partials/head.php'); ?>


<div style="display: flex; height: 100vh; width: 100vw; justify-content: center; align-items: center;">
    <form method="POST" action="/sedit" style="display: flex; flex-direction: column; background-color: #e6e6e6; padding: 24px; border-radius: 5px;">
        <input type="hidden" value="<?= $id;?>" name="id">
        <p style="margin: 0; font-weight: bold; font-size: 18px; margin-bottom: 2px; color: #39393a;">Title</p>
        <input type="text" name="title" placeholder="Title" value="<?= $title ?>" id="input">
        <p style="margin: 0; font-weight: bold; font-size: 18px; margin-bottom: 2px; color: #39393a;">Description</p>
        <input type="text" name="description" placeholder="Description"  value="<?= $description ?>" id="input">
        <p style="margin: 0; font-weight: bold; font-size: 18px; margin-bottom: 2px; color: #39393a;">Date</p>
        <input type="text" name="date" placeholder="date"  value="<?= $date ?>" id="input">
        <input type="submit" value="EDIT POST" id="submit">
    </form>
</div>


<?php require_once('partials/footer.php'); ?>