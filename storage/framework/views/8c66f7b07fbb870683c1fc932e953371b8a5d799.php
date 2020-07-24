

<?php $__env->startSection('title'); ?>
Category<?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1><?php echo e($category->name); ?></h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header><!-- /.header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">

           
                 <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6">
                  <div class="card border hover-shadow-6 mb-6 d-block">
                    <a href="<?php echo e(route('blog.show', $post->id)); ?>"><img class="card-img-top"  src="<?php echo e(asset('/storage/'.$post->image)); ?>" alt="Card image cap"></a>
                    <div class="p-6 text-center">
                      <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">
                          <?php echo e($post->category->name); ?>

                        </a></p>
                      <h5 class="mb-0"><a class="text-dark" href="<?php echo e(route('blog.show', $post->id)); ?>">
                           <?php echo e($post->title); ?>

                    </a></h5>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center">
                No results found for the query <strong><?php echo e(request()->query('search')); ?></strong>
                </p>
              <?php endif; ?>

              </div>


              <!--<nav class="flexbox mt-30">
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
              </nav>-->
            <?php echo e($posts->appends(['search'=>request()->query('search') ])->links()); ?>

            </div>



            <div class="col-md-4 col-xl-3">
              <div class="sidebar px-4 py-md-0">

                <h6 class="sidebar-title">Search</h6>
                <form class="input-group" action="<?php echo e(route('welcome')); ?>" method="GET">
                  <input type="text" class="form-control" name="search" placeholder="Search" value="<?php echo e(request()->query('search')); ?>">
                  <div class="input-group-addon">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                  </div>
                </form>

                <hr>

                <h6 class="sidebar-title">Categories</h6>
                <div class="row link-color-default fs-14 lh-24">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-6"><a href="<?php echo e(route('blog.category',$category->id)); ?>">
                      <?php echo e($category->name); ?>

                    </a></div>
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <hr>

                

                <hr>

                <h6 class="sidebar-title">Tags</h6>
                <div class="gap-multiline-items-1">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a class="badge badge-secondary" href="<?php echo e(route('blog.tag',$tag->id)); ?>"><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </div>

                <hr>

                <h6 class="sidebar-title">About</h6>
                <p class="small-3">This project belongs to Archish Chatterjee of KIIT University and it is devloped completely on Laravel environment version 6.0</p>


              </div>
            </div>

          </div>
        </div>
      </div>
    </main>

    
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\all new\before relationship\cms image fix\cms\resources\views/blog/category.blade.php ENDPATH**/ ?>