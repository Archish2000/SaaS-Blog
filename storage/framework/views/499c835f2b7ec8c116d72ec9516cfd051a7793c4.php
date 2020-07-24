

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-end mb-2">
<a href="<?php echo e(route('tags.create')); ?>" class="btn btn-success">Add tag</a> 
</div>

<div class="card card-default">
<div class="card-header">
tags
</div>
<div class="card-body">
<?php if($tags->count() > 0): ?>
 <table class="table">
    <thead>
    <th>Name</th>
    <th>Post Count</th>
    <tbody>
    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td>
    <?php echo e($tag->name); ?>

    </td>
    <td>
   <?php echo e($tag->posts->count()); ?>

   </td>
    <td>
    <a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn bttn-info btn-small">
    Edit
    </a>

    <button class="btn btn-danger btn-sm" onclick="handleDelete(<?php echo e($tag->id); ?>)">Delete</button>

    </td></tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </thead>
    </table>

    <div class="modal" id="deleteModal" tabindex="-1" aria_labelledby="deleteModalLabel" role="dialog">
  <div class="modal-dialog" role="document">
    <form action=""method='POST' id="deletetagForm">
   <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class='text-center text-bold'>Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, go back</button>
        <button type="submit" class="btn btn-primary btn-danger">Yes delete</button>
      </div>
    </div>
    
    </form>
  </div>
</div>

<?php else: ?>
<h3 class="text-center">No tags yet</h3>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
function handleDelete(id)
{
    var form = document.getElementById('deletetagForm')
    form.action = '/tags/' + id
    
    $('#deleteModal').modal('show')
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\all new\before relationship\cms image fix\cms\resources\views/tags/index.blade.php ENDPATH**/ ?>