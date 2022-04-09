<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rooms
                                <a href="<?php echo e(url('admin/rooms/create')); ?>" class="float-right btn btn-success btn-sm">Add New</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('success')): ?>
                            <p class="text-success"><?php echo e(session('success')); ?></p>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>RoomType</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>RoomType</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if($data): ?>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($d->id); ?></td>
                                                <td><?php echo e($d->room_type->title ?? '2'); ?></td>
                                                <td><?php echo e($d->title); ?></td>
                                                <td>
                                                    <a href="<?php echo e(url('admin/rooms/'.$d->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                    <a href="<?php echo e(url('admin/rooms/'.$d->id).'/edit'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="<?php echo e(url('admin/rooms/'.$d->id).'/delete'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php $__env->startSection('scripts'); ?>
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/room/index.blade.php ENDPATH**/ ?>