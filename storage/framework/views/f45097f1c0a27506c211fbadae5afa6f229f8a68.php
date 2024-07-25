<?php $__env->startSection('body'); ?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Articles</h1>
            <p class="lead text-body-secondary">Welcome to the Articles world.</p>
        </div>
    </div>
</section>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card shadow-sm">
                            <img width="100%" class="bd-placeholder-img card-img-top" src="<?php echo e(url('uploads/'.$article->thumbnail)); ?>">
                        <div class="card-body">
                            <a href="<?php echo e(url('article/'. $article->id)); ?>" style="text-decoration: none;">
                            <h5 class="card-title"><?php echo e($article->title); ?></h5>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-body-secondary"><strong style="color: black"><?php echo e($article->created_at->diffForHumans()); ?></strong></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/welcome.blade.php ENDPATH**/ ?>