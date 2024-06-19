

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Gallery Details</h1>
    <p>ID: <?php echo e($gallery->id); ?></p>
    <p>User: <?php echo e($gallery->user->name); ?></p>
    <p>Caption: <?php echo e($gallery->caption); ?></p>
    <p>Image: <img src="<?php echo e(asset('storage/' . $gallery->image)); ?>" alt="<?php echo e($gallery->caption); ?>"></p>
    <p>Status: <?php echo e($gallery->status ? 'Active' : 'Inactive'); ?></p>
    <a href="<?php echo e(route('galleries.index')); ?>" class="btn btn-primary">Back to List</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/galleries/show.blade.php ENDPATH**/ ?>