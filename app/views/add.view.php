<?php require_once('partials/head.php'); ?>

<div style="display: flex; height: 100vh; width: 100vw; justify-content: center; align-items: center;">
    <form method="POST" action="/task" style="display: flex; flex-direction: column; background-color: #e6e6e6; padding: 24px; border-radius: 5px;">
        <!-- <input type="hidden"value="<?= $task->id;?>" name="id"> -->
        <p style="margin: 0; font-weight: bold; font-size: 18px; margin-bottom: 2px; color: #39393a;">Title</p>
        <input type="text" name="title" placeholder="Title" id="input">
        <p style="margin: 0; font-weight: bold; font-size: 18px; margin-bottom: 2px; color: #39393a;">Description</p>
        <input type="text" name="description" placeholder="Description" id="input">
        <input type="submit" value="NEW POST" id="submit">
    </form>
</div>


<?php require_once('partials/footer.php'); ?>