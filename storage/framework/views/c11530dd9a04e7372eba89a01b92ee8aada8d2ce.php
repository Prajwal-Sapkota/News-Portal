

<?php $__env->startSection('content'); ?>
<div class="container">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <h1 class="mt-5">Edit Banner</h1>
    <form action="<?php echo e(route('banners.update', $banner->id)); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($banner->title); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"><?php echo e($banner->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <?php if($banner->image): ?>
                <div class="mt-2">
                    <img src="<?php echo e(asset('storage/'.$banner->image)); ?>" height="100">
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" <?php echo e($banner->status ? 'checked' : ''); ?>>
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/banners/edit.blade.php ENDPATH**/ ?>