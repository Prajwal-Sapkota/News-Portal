

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Users</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="<?php echo e(route('users.create')); ?>">Create</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->phone); ?></td>
                                <td><img src="<?php echo e(asset('storage/'.$user->image)); ?>" height="50"></td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="<?php echo e(route('users.show', $user->id)); ?>">Show</a>&nbsp;
                                        <form method="POST" action="<?php echo e(route('users.destroy', $user->id)); ?>" onsubmit="return confirm('Are you sure?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/users/index.blade.php ENDPATH**/ ?>