

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-end mb-2">
<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">Add Posts</a> 
</div>

<div class="card card-default">
<div class="card-header">Posts</div>
<div class="card-body">
<table class="table">
<thead>
<th>Image</th>
<th>Title</th>
<th></th>
<th></th>
</thead>

<tbody>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td>
<img src="{‌{asset('storage/'.$post->image)}}" class="img-thumbnail" width="100" height="50">

</td>
<td>
<?php echo e($post->title); ?>

</td>
<td>
<a href="" class="btn btn-info btn-sm">Edit</a>
</td>
<td>
<a href="" class="btn btn-danger btn-sm">Trash</a>
</td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>


</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\cms\resources\views/posts/index.blade.php ENDPATH**/ ?>