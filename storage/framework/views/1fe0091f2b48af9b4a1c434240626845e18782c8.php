

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Edit News Category</h1>
    <form action="<?php echo e(route('news-categories.update', $newsCategory->id)); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($newsCategory->title); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"><?php echo e($newsCategory->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <?php if($newsCategory->image): ?>
                <img src="<?php echo e(asset('storage/'.$newsCategory->image)); ?>" height="100" class="mt-2">
            <?php endif; ?>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" <?php echo e($newsCategory->status ? 'checked' : ''); ?>>
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/news_categories/edit.blade.php ENDPATH**/ ?>