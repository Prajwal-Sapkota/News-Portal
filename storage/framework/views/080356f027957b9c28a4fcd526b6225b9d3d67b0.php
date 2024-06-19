

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Create News</h1>
    <form action="<?php echo e(route('news.store')); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="news_category_id">Category:</label>
            <select class="form-control" id="news_category_id" name="news_category_id" required>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="published_date">Published Date:</label>
            <input type="date" class="form-control" id="published_date" name="published_date" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(asset('storage/'.$gallery->image)); ?>" height='50'/>
            <input type="checkbox"  id="image" name="image[]" value="<?php echo e($gallery->id); ?>"> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status">
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/news/create.blade.php ENDPATH**/ ?>