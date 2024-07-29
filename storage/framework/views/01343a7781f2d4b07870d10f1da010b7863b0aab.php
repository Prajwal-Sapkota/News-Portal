

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>News Galleries</h1>
    <?php $__currentLoopData = $newsItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($newsItem->title); ?></h5>
                <p class="card-text"><strong>User:</strong> <?php echo e($newsItem->user->name); ?></p>
                <!-- Display images associated with the news gallery -->
                <div class="row">
                    <?php $__currentLoopData = $newsItem->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 mb-3">
                            <img src="<?php echo e(asset('storage/'.$gallery->image)); ?>" class="img-fluid" alt="Gallery Image">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/news_galleries/index.blade.php ENDPATH**/ ?>