

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>News</h1>
        <a class="btn btn-primary" href="<?php echo e(route('news.create')); ?>">Create News</a>
    </div>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Category</th>
                <th>Published Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($newsItem->title); ?></td>
                    <td><?php echo e($newsItem->newsCategory->title ?? 'N/A'); ?></td>
                    <td><?php echo e($newsItem->published_date); ?></td>
                    <td><?php echo e($newsItem->status ? 'Active' : 'Inactive'); ?></td>
                    <td class="d-flex">
                        <a class="btn btn-secondary mr-2" href="<?php echo e(route('news.show', $newsItem->id)); ?>">Show</a>
                        <a class="btn btn-primary mr-2" href="<?php echo e(route('news.edit', $newsItem->id)); ?>">Edit</a>
                        <form method="POST" action="<?php echo e(route('news.destroy', $newsItem->id)); ?>" onsubmit="return confirm('Are you sure?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/news/index.blade.php ENDPATH**/ ?>