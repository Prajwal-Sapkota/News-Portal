

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Galleries</h1>
    <a href="<?php echo e(route('galleries.create')); ?>" class="btn btn-primary mb-3">Create Gallery</a>
    <div class="row">
        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="height: 200px; overflow: hidden;">
                    <img src="<?php echo e(asset('storage/' . $gallery->image)); ?>" class="card-img-top" alt="<?php echo e($gallery->caption); ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($gallery->caption); ?></h5>
                    <p class="card-text">Status: <?php echo e($gallery->status ? 'Active' : 'Inactive'); ?></p>
                    <a href="<?php echo e(route('galleries.show', $gallery->id)); ?>" class="btn btn-primary">View</a>
                    <a href="<?php echo e(route('galleries.edit', $gallery->id)); ?>" class="btn btn-secondary">Edit</a>
                    <form action="<?php echo e(route('galleries.destroy', $gallery->id)); ?>" method="POST" style="display: inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gallery?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/galleries/index.blade.php ENDPATH**/ ?>