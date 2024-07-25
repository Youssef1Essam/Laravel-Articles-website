<?php $__env->startSection('body'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $article->title; ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h5> <?php echo $article->body; ?></h5>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/article.blade.php ENDPATH**/ ?>