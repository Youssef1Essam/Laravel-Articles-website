
<?php if(session()->has('errors')): ?>
<div class="card alert alert-danger">
    <div class="card-body">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>

<?php if(session()->has('message')): ?>
<div class="card alert alert-success">
    <div class="card-body">
    <?php echo e(session('message')); ?>

</div>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\articles\resources\views/includes/messages.blade.php ENDPATH**/ ?>