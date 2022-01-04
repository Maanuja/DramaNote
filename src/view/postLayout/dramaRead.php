<?php $titled = 'DramaNote | CurrentDrama'; ?>
<?php $css = '' ?>
<?php ob_start(); ?>
<div class="bg-light">
        <div class="container">
            
            <div class="card-header"><?php echo $post->getTitle(); ?></div>
            <div class="card-body">
                <h4 class="card-title">By <?php echo ' '.$author->getFirstname().' '.$author->getLastname(); ?></h4>
            </div>
            <div class="clearfix">
                <img src="assets/images/posts/<?php echo $post->getImage() ?>" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                <p class="card-text"><?php echo $post->getContent();?></p>
            </div>
        </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('src/view/main.php'); ?>
