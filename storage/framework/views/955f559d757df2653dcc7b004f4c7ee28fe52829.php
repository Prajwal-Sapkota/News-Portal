<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NantipurNews </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
         /* Adjust the image inside carousel */
        .main-carousel .position-relative {
            height: 500px; /* Set the desired height */
            overflow: hidden;
        }

        .main-carousel .position-relative img,
        .news-carousel .position-relative img,
        .news-carousel .position-relative {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image fills the container */
        }

        /* Adjust for the featured news carousel */
        .news-carousel .position-relative {
            height: 300px; /* Set the desired height */
            overflow: hidden;
        }

        .news-carousel .position-relative img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image fills the container */
        }
    </style>

    <script>
        // JavaScript to insert today's date
        document.addEventListener("DOMContentLoaded", function() {
            const dateElement = document.getElementById("current-date");
            const today = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            dateElement.textContent = today.toLocaleDateString('en-US', options);
        });
    </script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#" id="current-date"></a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary">Nantipur<span class="text-secondary font-weight-normal">News</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-right">
                <?php if(Auth::check()): ?>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
                            </li>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Nantipur<span class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?php echo e(route('index')); ?>" class="nav-item nav-link ">Home</a>
                    <a href="<?php echo e(route('users.index')); ?>" class="nav-item nav-link">User</a>
                    <a href="<?php echo e(route('banners.index')); ?>" class="nav-item nav-link">Banner</a>
                    <a href="<?php echo e(route('testimonials.index')); ?>" class="nav-item nav-link">Testimonial</a>
                    <a href="<?php echo e(route('galleries.index')); ?>" class="nav-item nav-link">Gallery</a>
                    <a href="<?php echo e(route('members.index')); ?>" class="nav-item nav-link">Member</a>
                    <a href="<?php echo e(route('news.index')); ?>" class="nav-item nav-link">News</a>
                    <a href="<?php echo e(route('news-categories.index')); ?>" class="nav-item nav-link">News Category</a>
                    <a href="<?php echo e(route('news-galleries.index')); ?>" class="nav-item nav-link">News Gallery</a>


                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <!-- <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div class="position-relative overflow-hidden" style="height: 500px;">


                        <img class="img-fluid h-100" src="<?php echo e(asset('storage/'.$banner->image)); ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><?php echo e($banner->title); ?></a>
                                <a class="text-white" href=""><?php echo e($banner->created_at->format('M-d,Y')); ?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href=""><?php echo e($banner->description); ?></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="<?php echo e(asset('storage/' . $newsItem->newscategory->image)); ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#"><?php echo e($newsItem->newscategory->title); ?></a>
                                <a class="text-white" href="#"><small><?php echo e(\Carbon\Carbon::parse($newsItem->published_date)->format('M d, Y')); ?></small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="#"><?php echo e(Str::limit($newsItem->title, 50)); ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
                
                    
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                        style="width: calc(100% - 170px); padding-right: 90px;">
                        <?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="#"><?php echo e($newsItem->title); ?></a></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Breaking News End -->


  <!-- Featured News Slider Start -->
  <div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            <?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="position-relative" style="height: 300px; " >
                <img class="img-fluid h-100" src="<?php echo e(asset('storage/' . $newsItem->newscategory->image)); ?>" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#"><?php echo e($newsItem->newscategory->title ?? 'Category'); ?></a>
                        <a class="text-white" href="#"><small><?php echo e(\Carbon\Carbon::parse($newsItem->published_date)->format('M d, Y')); ?></small></a>
                    </div>
                    <h6 class="m-0 text-white text-uppercase font-weight-semi-bold"><?php echo e(Str::limit($newsItem->title, 50)); ?></h6>
                    <p class="text-white mt-3 mb-0 description" style="display: none; overflow-y: auto; max-height: 200px;"><?php echo e($newsItem->description); ?></p>
                    <a href="#" class="text-primary font-weight-bold mt-2 toggle-description">Read More</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!-- Featured News Slider End -->

<!-- JavaScript to Toggle Description -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButtons = document.querySelectorAll('.toggle-description');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const description = this.previousElementSibling;
                description.style.display = description.style.display === 'none' ? 'block' : 'none';
                this.textContent = description.style.display === 'none' ? 'Read More' : 'Read Less';
            });
        });
    });
</script>
<!-- Featured News Slider End -->


 <script>
    $(document).ready(function() {
    // Smooth scroll to anchor links
    $('a.nav-link').on('click', function(event) {
        if (this.hash !== '') {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
});
 </script>   


    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5" id ="contact">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Contact</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Rudra Mati Marg, Anamnagar, Kathmandu</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>984-3577108</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>jaruwanepal@example.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">
        Distributed by <a href="#">Prajwal Sapkota</a>
    </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/index.blade.php ENDPATH**/ ?>