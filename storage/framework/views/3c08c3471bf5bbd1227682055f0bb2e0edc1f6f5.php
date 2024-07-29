

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>News Categories</h1>
        <a href="<?php echo e(route('news-categories.create')); ?>" class="btn btn-primary mb-2">Create New Category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $newsCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->title); ?></td>
                    <td><?php echo e($category->description); ?></td>
                    <td>
                        <?php if($category->image): ?>
                            <img src="<?php echo e(asset('storage/' . $category->image)); ?>" alt="<?php echo e($category->title); ?>" style="max-width: 100px;">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($category->status ? 'Active' : 'Inactive'); ?></td>
                    <td>
                        <a href="<?php echo e(route('news-categories.show', $category->id)); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo e(route('news-categories.edit', $category->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('news-categories.destroy', $category->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/news_categories/index.blade.php ENDPATH**/ ?>