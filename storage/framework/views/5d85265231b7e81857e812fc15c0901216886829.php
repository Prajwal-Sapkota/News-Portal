

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Create Gallery</h1>
    <form action="<?php echo e(route('galleries.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="caption">Caption:</label>
            <input type="text" class="form-control" id="caption" name="caption" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="checkbox" id="status" name="status" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/galleries/create.blade.php ENDPATH**/ ?>