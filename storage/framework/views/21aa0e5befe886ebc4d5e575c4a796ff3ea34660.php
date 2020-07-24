

<?php $__env->startSection('content'); ?>
<div class="card card-default">
<div class="card-header">

<?php echo e(isset($post)?'Edit post':'Create post'); ?>


</div>

<div class="card-body">
<form action="<?php echo e(isset($post) ? route('posts.update',$post->id): route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>

<?php if(isset($post)): ?>
 <?php echo method_field('PUT'); ?>
<?php endif; ?>

<div class="form-group"> 
<label for="title">Title</label>
<input type="text" class="form-control" name="title" id='title' value="<?php echo e(isset($post)? $post->title:''); ?>">
</div>

<div class="form-group"> 
<label for="description">Description</label>
<textarea name="description" id="description" cols="5" rows="5" class="form-control"><?php echo e(isset($post)? $post->description:''); ?></textarea>
</div>

<div class="form-group"> 
<label for="content">Content</label>
<input id="content" type="hidden" name="content" value="<?php echo e(isset($post)? $post->content:''); ?>">
  <trix-editor input="content"></trix-editor>
</div>

<div class="form-group"> 
<label for="published_at">Published At</label>
<input type="text" class="form-control" name="published_at" id='published_at' value="<?php echo e(isset($post)? $post->published_at:''); ?>">
</div>

<?php if(isset($post)): ?>
 <div class="form-group"> 
  <img src="<?php echo e(asset($post->image)); ?>" alt="" style="width: 100%">
 </div>
<?php endif; ?>
<div class="form-group"> 
<label for="image">Image</label>
<input type="file" class="form-control" name="image" id='image'>
</div>

<div class="form-group">
<button type='submit' class="btn btn-success">
    <?php echo e(isset($post)?'Update Post':'Create Post'); ?>

</button>
</div>

</form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
flatpickr('#published_at',{
    enableTime: true
})
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\cms image fix\cms\resources\views/posts/create.blade.php ENDPATH**/ ?>