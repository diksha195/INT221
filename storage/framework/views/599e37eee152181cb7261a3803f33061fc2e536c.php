<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo e($data->full_name); ?> Detail
                                <a href="<?php echo e(url('admin/staff')); ?>" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                                    <tr>
                                        <th>Full Name</th>
                                        <td><?php echo e($data->full_name); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Department</th>
                                        <td><?php echo e($data->department->title); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td><img width="80" src="<?php echo e(asset('storage/app/'.$data->photo)); ?>" /></td>
                                    </tr>
                                    <tr>
                                        <th>Bio</th>
                                        <td><?php echo e($data->bio); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Salary Type</th>
                                        <td><?php echo e($data->salary_type); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Salary Amount</th>
                                        <td><?php echo e($data->salary_amt); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/staff/show.blade.php ENDPATH**/ ?>