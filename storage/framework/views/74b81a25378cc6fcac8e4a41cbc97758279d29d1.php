

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Banners</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="<?php echo e(route('banners.create')); ?>">Create</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($banner->title); ?></td>
                                <td><?php echo e($banner->description); ?></td>
                                <td>
                                    <?php if($banner->image): ?>
                                        <img src="<?php echo e(asset('storage/' . $banner->image)); ?>" height="50" alt="<?php echo e($banner->title); ?>">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($banner->status ? 'Active' : 'Inactive'); ?></td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="<?php echo e(route('banners.edit', $banner->id)); ?>">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="<?php echo e(route('banners.show', $banner->id)); ?>">Show</a>&nbsp;
                                        <form method="POST" action="<?php echo e(route('banners.destroy', $banner->id)); ?>" onsubmit="return confirm('Are you sure?')">
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/banners/index.blade.php ENDPATH**/ ?>