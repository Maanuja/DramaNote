<?php $titled = 'DramaNote | SUCESS'; ?>
<?php $css = '' ?>
<?php 
    if (isset($_GET['resquest']) && $_GET['resquest'] == 'created')
    {
        $sqlres ='<div class="correct">Le post a été créé!</div>';
    } if (isset($_GET['resquest']) && $_GET['resquest'] == 'deleted')
    {
        $sqlres ='<div class="correct">The post got deleted, you can now only see it in your profile!</div>';
    }
    if (isset($_GET['resquest']) && $_GET['resquest'] == 'updated')
    {
        $sqlres ='<div class="correct">Le post a été updated!</div>';
    }
    if (isset($_GET['resquest']) && $_GET['resquest'] == 'mdpchanged')
    {
        $sqlres ='<div class="correct">Your password has been changed !</div>';
    }
    if (isset($_GET['resquest']) && $_GET['resquest'] == 'deletedsee')
    {
        $sqlres ='<div class="correct">The post has been deleted by you! If you want it back create another one plz :(</div>';
    }
?>
<?php ob_start(); ?>
            <main class="px-3">
                <p class="lead">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-5 shadow">
                        <h1>
                            MSG:
                            <?= $sqlres ?>
                        </h1>
                        </div>
                    </div>
                </p>
            </main>
<?php $content = ob_get_clean(); ?>
<?php require('src/view/main.php'); ?>