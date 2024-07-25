<?php $__env->startSection('admin_content'); ?>

        <div class="card-header"><?php echo e(__('Dashboard panel')); ?></div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-4">

                        <?php if(session('status')): ?>

                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                    </div>
                </div>

                        <?php echo e(__('You are logged in!')); ?>

                    <a href="<?php echo e(url('/admin/create')); ?>" class="btn btn-dark">add new Article</a>
            </div>

            <div class="row">
                <div class="col-md-12 mb-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>created at</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($article->id); ?></td>
                                <td><?php echo e($article->title); ?></td>
                                <td><?php echo e($article->created_at); ?></td>
                                <td><a class="btn btn-danger" href="<?php echo e(url('admin/edit/'.$article->id)); ?>">Edit</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                    <?php echo e($articles->links()); ?>


                </div>

            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\articles\resources\views/home.blade.php ENDPATH**/ ?>