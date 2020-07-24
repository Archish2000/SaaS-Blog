<!--<?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><?php echo app('translator')->get('pagination.previous'); ?></span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></a>
                </li>
            <?php endif; ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><?php echo app('translator')->get('pagination.next'); ?></a>
                </li>
            <?php else: ?>
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><?php echo app('translator')->get('pagination.next'); ?></span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
-->

<?php if($paginator->hasPages()): ?>

<nav class="flexbox mt-30">

       <?php if($paginator->onFirstPage()): ?>
       <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Previous</a>
       <?php else: ?>
       <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="btn btn-white "><i class="ti-arrow-left fs-9 mr-4"></i> Previous</a>

          <?php endif; ?>

          <?php if($paginator->hasMorePages()): ?>
          <a class="btn btn-white" href="<?php echo e($paginator->nextPageUrl()); ?>">Next <i class="ti-arrow-right fs-9 ml-4"></i></a>
          <?php else: ?>
          <a class="btn btn-white disabled">Next <i class="ti-arrow-right fs-9 ml-4"></i></a>

          <?php endif; ?>

              </nav>
              <?php endif; ?>


              <?php /**PATH C:\laragon\www\all new\before relationship\cms image fix\cms\resources\views/vendor/pagination/simple-bootstrap-4.blade.php ENDPATH**/ ?>