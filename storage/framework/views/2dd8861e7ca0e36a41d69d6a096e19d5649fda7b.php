

<?php $__env->startSection('content'); ?>
<div class="card card-default">
<div class="card-header">Create Post</div>

<div class="card-body">
<form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>

<div class="form-group"> 
<label for="title">Title</label>
<input type="text" class="form-control" name="title" id='title'>
</div>

<div class="form-group"> 
<label for="description">Description</label>
<textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
</div>

<div class="form-group"> 
<label for="content">Content</label>
<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
</div>

<div class="form-group"> 
<label for="published_at">Published At</label>
<input type="text" class="form-control" name="published_at" id='published_at'>
</div>

<div class="form-group"> 
<label for="image">Image</label>
<input type="file" class="form-control" name="image" id='image'>
</div>

<div class="form-group">
<button type='submit' class="btn btn-success">
Create Post
</button>
</div>

</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\cms\resources\views/posts/create.blade.php ENDPATH**/ ?>