
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
    <?php echo $__env->yieldContent('title'); ?>
    </title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/page.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
    <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">
            <img class="logo-dark" src="<?php echo e(asset('img/logo-dark.png')); ?>" alt="logo">
            <img class="logo-light" src="<?php echo e(asset('img/logo-light.png')); ?>" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">
            <li class="nav-item">
              <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link" href="#">SaaS <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/saas-1.html">SaaS 1</a>
                    <a class="nav-link" href="../demo/saas-2.html">SaaS 2</a>
                    <a class="nav-link" href="../demo/saas-3.html">SaaS 3</a>
                    <a class="nav-link" href="../demo/saas-4.html">SaaS 4</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Software <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/software-1.html">Software 1</a>
                    <a class="nav-link" href="../demo/software-2.html">Software 2</a>
                    <a class="nav-link" href="../demo/software-3.html">Software 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Marketing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/marketing-1.html">Marketing 1</a>
                    <a class="nav-link" href="../demo/marketing-2.html">Marketing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Listing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/listing-1.html">Listing 1</a>
                    <a class="nav-link" href="../demo/listing-2.html">Listing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../demo/finance-1.html">Finance</a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Pages <span class="arrow"></span></a>
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="../page/how-it-works.html">How it works</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../page/pricing.html">Pricing</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/portfolio.html">Potfolio listing</a>
                    <a class="nav-link" href="../page/portfolio-single.html">Potfolio single</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Careers <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/career.html">Careers listing</a>
                    <a class="nav-link" href="../page/career-single.html">Careers single</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Service <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/service-1.html">Service 1</a>
                    <a class="nav-link" href="../page/service-2.html">Service 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">About <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/about-1.html">About 1</a>
                    <a class="nav-link" href="../page/about-2.html">About 2</a>
                    <a class="nav-link" href="../page/about-3.html">About 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Contact <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/contact-1.html">Contact 1</a>
                    <a class="nav-link" href="../page/contact-2.html">Contact 2</a>
                    <a class="nav-link" href="../page/contact-3.html">Contact 3</a>
                  </nav>
                </li>

                <li class="nav-divider"></li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Extra <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/demo.html">Request demo</a>
                    <a class="nav-link" href="../page/coming-soon.html">Coming soon</a>
                    <a class="nav-link" href="../page/terms.html">Terms</a>
                    <a class="nav-link" href="../page/error-404.html">Error 404</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">User <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/user-login.html">Login</a>
                    <a class="nav-link" href="../page/user-register.html">Register</a>
                    <a class="nav-link" href="../page/user-recover.html">Recover</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Docs <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../docs/index.html">Support center</a>
                    <a class="nav-link" href="../docs/articles.html">Articles</a>
                    <a class="nav-link" href="../docs/faq.html">FAQ</a>
                  </nav>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#">Blog <span class="arrow"></span></a>
              <nav class="nav">
                <a class="nav-link" href="../blog/classic.html">Classic</a>
                <a class="nav-link" href="../blog/grid.html">Grid</a>
                <a class="nav-link" href="../blog/list.html">List</a>
                <a class="nav-link active" href="../blog/sidebar.html">Sidebar</a>
                <div class="nav-divider"></div>
                <a class="nav-link" href="../blog/post-1.html">Post 1</a>
                <a class="nav-link" href="../blog/post-2.html">Post 2</a>
              </nav>
            </li>

            

                  
            

          </ul>
        </section>

        <a class="btn btn-xs btn-round btn-success" href="<?php echo e(route('login')); ?>">Login</a>

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <?php echo $__env->yieldContent('header'); ?>
    <!--<header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1>Latest Blog Posts</h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header><!-- /.header --> 


    <!-- Main Content -->
    <?php echo $__env->yieldContent('content'); ?>
    


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="/"><img src="<?php echo e(asset('img/logo-dark.png')); ?>" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

        
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/page.min.png')); ?>"></script>
    <script src="<?php echo e(asset('js/script.png')); ?>"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ef98c315f20b104"></script> 
    
  </body>
</html>
<?php /**PATH C:\laragon\www\all new\before relationship\cms image fix\cms\resources\views/layouts/blog.blade.php ENDPATH**/ ?>