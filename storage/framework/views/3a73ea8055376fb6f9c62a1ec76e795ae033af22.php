<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Staff
                                <a href="<?php echo e(url('admin/rooms')); ?>" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('success')): ?>
                            <p class="text-success"><?php echo e(session('success')); ?></p>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <form enctype="multipart/form-data" method="post" action="<?php echo e(url('admin/staff/'.$data->id)); ?>">
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Full Name</th>
                                            <td><input value="<?php echo e($data->full_name); ?>" name="full_name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Select Department</th>
                                            <td>
                                                <select name="department_id" class="form-control">
                                                    <option value="0">--- Select ---</option>
                                                    <?php $__currentLoopData = $departs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if($data->id==$dp->id): ?> selected <?php endif; ?> value="<?php echo e($dp->id); ?>"><?php echo e($dp->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td>
                                                <input name="photo" type="file" />
                                                <input type="hidden" value="<?php echo e($data->photo); ?>" name="prev_photo" />
                                                <img width="80" src="<?php echo e(asset('storage/app/'.$data->photo)); ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bio</th>
                                            <td><textarea class="form-control" name="bio"><?php echo e($data->bio); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Salary Type</th>
                                            <td>
                                                <input <?php if($data->salary_type=='daily'): ?> checked <?php endif; ?> type="radio" name="salary_type" value="daily"> Daily
                                                <input <?php if($data->salary_type=='monthly'): ?> checked <?php endif; ?> type="radio" name="salary_type" value="monthly"> Monthly
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Salary Amount</th>
                                            <td><input value="<?php echo e($data->salary_amt); ?>" name="salary_amt" class="form-control" type="number" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary" />
                                            </td> 
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/staff/edit.blade.php ENDPATH**/ ?>