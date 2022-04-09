<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Bookings
                                <a href="<?php echo e(url('admin/booking/create')); ?>" class="float-right btn btn-success btn-sm">Add New</a>
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
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <th>Room Type</th>
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <th>Room Type</th>
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($booking->id); ?></td>
                                            <td><?php echo e($booking->customer->full_name ?? 'D'); ?></td>
                                            <td><?php echo e($booking->room->title); ?></td>
                                            <td><?php echo e($booking->room->Roomtype->title ?? '3'); ?></td>
                                            <td><?php echo e($booking->checkin_date); ?></td>
                                            <td><?php echo e($booking->checkout_date); ?></td>
                                            <td><?php echo e($booking->ref); ?></td>
                                            <td><a href="<?php echo e(url('admin/booking/'.$booking->id.'/delete')); ?>" class="text-danger" onclick="return confirm('Are you sure you want to delete this data?')"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php $__env->startSection('scripts'); ?>
<!-- Custom styles for this page -->
<link href="<?php echo e(asset('public')); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="<?php echo e(asset('public')); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('public')); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(asset('public')); ?>/js/demo/datatables-demo.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/booking/index.blade.php ENDPATH**/ ?>