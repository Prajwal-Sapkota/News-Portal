

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Members</h5>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <h5 class="card-title">
                                <a class="btn btn-primary" href="<?php echo e(route('members.create')); ?>">Create</a>
                            </h5>
                        </div>
                    </div>
                    
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>EID No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Join Date</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($member->name); ?></td>
                                <td><?php echo e($member->eid_no); ?></td>
                                <td><?php echo e($member-> phone); ?></td>
                                <td><?php echo e($member-> email); ?></td>
                                <td><?php echo e($member-> join_date); ?></td>
                                <td><?php echo e($member-> description); ?></td>
                                <td>
                                    <?php if($member->image): ?>
                                        <img src="<?php echo e(asset('storage/'.$member->image)); ?>" height="50">
                                    <?php else: ?>
                                        No Image
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div style="display: flex;">
                                        <a class="btn btn-primary" href="<?php echo e(route('members.edit', $member->id)); ?>">Edit</a>&nbsp;
                                        <a class="btn btn-secondary" href="<?php echo e(route('members.show', $member->id)); ?>">Show</a>&nbsp;
                                        <form method="POST" action="<?php echo e(route('members.destroy', $member->id)); ?>" onsubmit="return confirm('Are you sure?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajen\OneDrive\Documents\Intern\news_portal\resources\views/members/index.blade.php ENDPATH**/ ?>