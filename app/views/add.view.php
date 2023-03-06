<?php require_once('partials/head.php'); ?>

<div style="display: flex; height: 100vh; width: 100vw; justify-content: center; align-items: center;">
    <form method="POST" action="/task" style="display: flex; flex-direction: column; gap: 24px;">
        <!-- <input type="hidden"value="<?= $task->id;?>" name="id"> -->
        <input type="text" name="title" placeholder="Title" style="background-color: rgb(54, 54, 54); padding: 5px; font-size: 18px;">
        <input type="text" name="description" placeholder="Description" style="background-color: rgb(54, 54, 54); padding: 5px; font-size: 18px;">
        <input type="text" name="date" placeholder="date" style="background-color: rgb(54, 54, 54); padding: 5px; font-size: 18px;">
        <input type="submit" value="Post" style="background-color: rgb(54, 54, 54); padding: 5px; font-size: 18px;">
    </form>
</div>


<?php require_once('partials/footer.php'); ?>