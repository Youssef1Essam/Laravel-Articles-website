<?php $__env->startSection('admin_content'); ?>

    <div class="card-header"><?php echo e(__('Dashboard panel')); ?></div>

    <div class="card-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo e(url('/admin/store')); ?>" method="post">

            <?php echo e(csrf_field()); ?>

            <div class="form-group mb-2">
                <input class="form-control" type="text" name="title" placeholder="title here">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" id="myTextarea" style="width: 100%" placeholder="type here"></textarea>
            </div>
            <div class="form-group">
                <input class="form-control mt-2" type="file" name="thumbnail" accept="/image/*"/>
            </div>
            <div class="form-group">
                <input class="btn btn-dark my-3" type="submit" value="Share"/>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/admin/create.blade.php ENDPATH**/ ?>