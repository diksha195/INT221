<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Booking
                                <a href="<?php echo e(url('admin/booking')); ?>" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            <?php if($errors->any()): ?>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="text-danger"><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            <?php if(Session::has('success')): ?>
                            <p class="text-success"><?php echo e(session('success')); ?></p>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <form method="post" enctype="multipart/form-data" action="<?php echo e(url('admin/booking')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Select Customer <span class="text-danger">*</span></th>
                                            <td>
                                                <select class="form-control" name="customer_id">
                                                    <option>--- Select Customer ---</option>
                                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->full_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>CheckIn Date <span class="text-danger">*</span></th>
                                            <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                                        </tr>
                                        <tr>
                                            <th>CheckOut Date <span class="text-danger">*</span></th>
                                            <td><input name="checkout_date" type="date" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Avaiable Rooms <span class="text-danger">*</span></th>
                                            <td>
                                                <select class="form-control room-list" name="room_id">

                                                </select>
                                                <p>Price: <span class="show-room-price"></span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total Adults <span class="text-danger">*</span></th>
                                            <td><input name="total_adults" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Total Children</th>
                                            <td><input name="total_children" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="roomprice" class="room-price" value="" />
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

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"<?php echo e(url('admin/booking')); ?>/available-rooms/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option data-price="'+row.roomtype.price+'" value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.title+'</option>';
                    });
                    $(".room-list").html(_html);

                    var _selectedPrice=$(".room-list").find('option:selected').attr('data-price');
                    $(".room-price").val(_selectedPrice);
                    $(".show-room-price").text(_selectedPrice);
                }
            });
        });

        $(document).on("change",".room-list",function(){
            var _selectedPrice=$(this).find('option:selected').attr('data-price');
            $(".room-price").val(_selectedPrice);
            $(".show-room-price").text(_selectedPrice);
        });

    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/booking/create.blade.php ENDPATH**/ ?>