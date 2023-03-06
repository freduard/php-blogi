<?php require_once('partials/head.php'); ?>

<form method="POST" action="/task">
    <!-- <input type="hidden"value="<?= $task->id;?>" name="id"> -->
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="date" placeholder="date" >
    <input type="submit" value="Post">
</form>

<?php require_once('partials/footer.php'); ?>