

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Edit Member</h1>
    <form action="<?php echo e(route('members.update', $member->id)); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($member->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="eid_no">EID No:</label>
            <input type="text" class="form-control" id="eid_no" name="eid_no" value="<?php echo e($member->eid_no); ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($member->phone); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($member->email); ?>">
        </div>
        <div class="form-group">
            <label for="join_date">Join Date:</label>
            <input type="date" class="form-control" id="join_date" name="join_date" value="<?php echo e($member->join_date); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"><?php echo e($member->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <?php if($member->image): ?>
                <img src="<?php echo e(asset('storage/'.$member->image)); ?>" height="100" class="mt-2">
            <?php endif; ?>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status" <?php echo e($member->status ? 'checked' : ''); ?>>
            <label class="form-check-label" for="status">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/members/edit.blade.php ENDPATH**/ ?>