<?php require_once('partials/head.php'); ?>

<h1>Blog</h1>

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
                        <p class="BlogTx"><?= $task->date; ?></p>
                        <?php endif; ?>
                </p>
               

        <input type="button" value="M" onclick="edditfunction(<?=$task->id ?>)"></input>
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