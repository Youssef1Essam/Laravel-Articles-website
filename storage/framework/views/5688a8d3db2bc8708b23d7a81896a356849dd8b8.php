<?php $__env->startSection('admin_content'); ?>

    <div class="card-header"><?php echo e(__('Edit Articles')); ?></div>

    <div class="card-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo e(url('/admin/update/'.$article->id)); ?>" method="post">

            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="PUT"/>
            <div class="form-group mb-2">
                <input class="form-control" type="text" name="title" placeholder="title here" value="<?php echo e($article->title); ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" id="myTextarea" style="width: 100%" placeholder="type here"><?php echo e($article->body); ?></textarea>
            </div>
            <div class="form-group">
                <input class="form-control mt-2" type="file" name="thumbnail" accept="/image/*"/>
            </div>
            <div class="form-group">
                <input class="btn btn-dark my-3" type="submit" value="Edit"/>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/admin/edit.blade.php ENDPATH**/ ?>