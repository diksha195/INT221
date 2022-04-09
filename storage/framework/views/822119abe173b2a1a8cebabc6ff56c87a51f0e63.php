<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Department
                                <a href="<?php echo e(url('admin/department')); ?>" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('success')): ?>
                            <p class="text-success"><?php echo e(session('success')); ?></p>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <form method="post" action="<?php echo e(url('admin/department')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Title</th>
                                            <td><input name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td>
                                                <textarea name="detail" class="form-control"></textarea>
                                            </td>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/department/create.blade.php ENDPATH**/ ?>