<!-- resources/views/testimonials/index.blade.php -->


<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Testimonials</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="<?php echo e(route('testimonials.create')); ?>">Create Testimonial</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Position</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th width="250">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($testimonial->name); ?></td>
                                <td><?php echo e($testimonial->company_name); ?></td>
                                <td><?php echo e($testimonial->position); ?></td>
                                <td><?php echo e($testimonial->message); ?></td>
                                <td><?php echo e($testimonial->status ? 'Active' : 'Inactive'); ?></td>
                                <td><?php echo e($testimonial->user->name); ?></td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="<?php echo e(route('testimonials.edit', $testimonial->id)); ?>">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="<?php echo e(route('testimonials.show', $testimonial->id)); ?>">Show</a>&nbsp;
                                        <form method="POST" action="<?php echo e(route('testimonials.destroy', $testimonial->id)); ?>" onsubmit="return confirm('Are you sure?')">
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/testimonials/index.blade.php ENDPATH**/ ?>