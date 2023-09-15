<?php require_once('partials/head.php'); ?>

<div class="BlogSec">
        <?php foreach ( $tasks as $task ): ?>
            <div class="BlogP">
                <p>
                    <?php if ( $task->title ): ?>
                        <h1 class=blogT><?= $task->title; ?></h1>
                        <?php endif; ?>
                        <p>Description:</p>
                    <?php if ( $task->description ): ?>
                        <p class="BlogTx"><?= $task->description; ?></p>
                        <?php endif; ?>
                        <p>Date:</p>
                    <?php if  ($task->date ): ?>
                        <p class="BlogTx"><?= date('d.m.Y H:i:s', strtotime($task->date)); ?></p>
                        <?php endif; ?>
                </p>
                <p><?= $task->id;?></p>

        <!-- <form action="POST" action="/edit">
            <input type="button" value="M" onclick="edditfunction(<?=$task->id ?>)"></input>
        </form> -->
        <form id="edditform<?=$task->id ?>" method="POST" action="/edit">
            <input type="hidden" style="background-color: black;" value="<?= $task->id;?>" name="id">
            <input type="hidden" style="background-color: black;" value="<?= $task->title;?>" name="title">
            <input type="hidden" style="background-color: black;" value="<?= $task->description;?>" name="description">
            <input type="hidden" style="background-color: black;" value="<?= $task->date;?>" name="date">

            <input type="submit"value="M">
        </form>
        <form method="POST" action="/delete">
            <input type="hidden"value="<?= $task->id;?>" name="id">
            <input type="submit" value="delete" >
        </form>

            </div>    
        <?php endforeach; ?>
    </div>

<script>
    function edditfunction(id){
    var blogi = document.getElementById('edditform'+id);
    if (blogi.style.display === "none") {
        blogi.style.display = "block";
        } 
        else {
            blogi.style.display = "none";
        }


        var blogi2 = document.getElementById('info'+id);
        if (blogi2.style.display === "none") {
        blogi2.style.display = "block";
        } 
        else {
            blogi2.style.display = "none";
        }
    }

</script>

<?php require_once('partials/footer.php'); ?>