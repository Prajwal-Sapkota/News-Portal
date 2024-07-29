

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>News Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($news->title); ?></h5>
            <p class="card-text"><strong>Category:</strong> <?php echo e($news->newscategory->title ?? 'N/A'); ?></p>
            <p class="card-text"><strong>Description:</strong> <?php echo e($news->description); ?></p>
            <p class="card-text"><strong>Published Date:</strong> <?php echo e($news->published_date); ?></p>
            <p class="mt-3"><strong>Images:</strong></p>
            <div class="row">
                <?php $__currentLoopData = $news->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 mb-3">
                        <img src="<?php echo e(asset('storage/' . $gallery->image)); ?>" class="img-fluid" alt="Gallery Image">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <p class="mt-3"><strong>Status:</strong> <?php echo e($news->status ? 'Active' : 'Inactive'); ?></p>
            <a href="<?php echo e(route('news.index')); ?>" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/news/show.blade.php ENDPATH**/ ?>