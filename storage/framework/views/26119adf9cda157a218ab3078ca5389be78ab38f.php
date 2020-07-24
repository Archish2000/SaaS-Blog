

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-end mb-2">
<a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success">Add Category</a> 
</div>

<div class="card card-default">
<div class="card-header">
Categories
</div>
<div class="card-body">
<?php if($categories->count() > 0): ?>
 <table class="table">
    <thead>
    <th>Name</th>
    <th>Post Count</th>
    <tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td>
    <?php echo e($category->name); ?>

    </td>
    <td>
   <?php echo e($category->posts->count()); ?>

   </td>
    <td>
    <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn bttn-info btn-small">
    Edit
    </a>

    <button class="btn btn-danger btn-sm" onclick="handleDelete(<?php echo e($category->id); ?>)">Delete</button>

    </td></tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </thead>
    </table>

    <div class="modal" id="deleteModal" tabindex="-1" aria_labelledby="deleteModalLabel" role="dialog">
  <div class="modal-dialog" role="document">
    <form action=""method='POST' id="deleteCategoryForm">
   <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
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
<h3 class="text-center">No Categories yet</h3>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
function handleDelete(id)
{
    var form = document.getElementById('deleteCategoryForm')
    form.action = '/categories/' + id
    
    $('#deleteModal').modal('show')
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\all new\before relationship\cms image fix\cms\resources\views/categories/index.blade.php ENDPATH**/ ?>