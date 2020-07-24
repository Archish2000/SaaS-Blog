


<?php $__env->startSection('content'); ?>

<div class="card">
                <div class="card-header">My Profile</div>
                <?php echo $__env->make('partials\error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card-body">
                <form action="<?php echo e(route('users.update-profile')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo e($user->name); ?>">
                </div>
                <div class="form-group"> 
                <label for="about">About Me</label>
                <textarea name="about" id="about" cols="5" rows="5" class="form-control"><?php echo e($user->about); ?></textarea>
                </div>

                <button class="btn btn-success" type="submit">Update Profile</button>
                </form>

                </div>
            </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\all new\before relationship\cms image fix\cms\resources\views/users/edit.blade.php ENDPATH**/ ?>