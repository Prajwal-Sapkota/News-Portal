

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mt-5">Create User</h1>
    <form action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/users/create.blade.php ENDPATH**/ ?>