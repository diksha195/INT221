
<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update <?php echo e($data->title); ?>

                                <a href="<?php echo e(url('admin/roomtype')); ?>" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('success')): ?>
                            <p class="text-success"><?php echo e(session('success')); ?></p>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <form enctype="multipart/form-data" method="post" action="<?php echo e(url('admin/roomtype/'.$data->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Title</th>
                                            <td><input value="<?php echo e($data->title); ?>" name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td><input value="<?php echo e($data->price); ?>" name="price" type="number" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td><textarea name="detail" class="form-control"><?php echo e($data->detail); ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Gallery Images</th>
                                            <td>
                                                <table class="table table-bordered mt-3">
                                                    <tr>
                                                        <input type="file" multiple name="imgs[]" /> 
                                                        <?php $__currentLoopData = $data->roomtypeimgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td class="imgcol<?php echo e($img->id); ?>">
                                                            <img width="150" src="<?php echo e(asset('storage/app/'.$img->img_src)); ?>" />
<p class="mt-2">
    <button type="button" onclick="return confirm('Are you sure you want to delete this image??')" class="btn btn-danger btn-sm delete-image" data-image-id="<?php echo e($img->id); ?>"><i class="fa fa-trash"></i></button>
</p>
                                                        </td>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tr>
                                                </table>
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

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").on('click',function(){
            var _img_id=$(this).attr('data-image-id');
            var _vm=$(this);
            $.ajax({
                url:"<?php echo e(url('admin/roomtypeimage/delete')); ?>/"+_img_id,
                dataType:'json',
                beforeSend:function(){
                    _vm.addClass('disabled');
                },
                success:function(res){
                    if(res.bool==true){
                        $(".imgcol"+_img_id).remove();
                    }
                    _vm.removeClass('disabled');
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/roomtype/edit.blade.php ENDPATH**/ ?>