
<?php $__env->startSection('content'); ?>
<html>
	<body>
		<!-- Slider Section Start -->
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	  	<?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <div class="carousel-item <?php if($index==0): ?> active <?php endif; ?>">
	      <img src="<?php echo e(asset('storage/app/'.$banner->banner_src)); ?>" class="d-block w-100" alt="<?php echo e($banner->alt_text); ?>">
	    </div>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- Slider Section End -->

	<!-- Service Section Start -->
	<div class="container my-4">
		<h1 class="text-center border-bottom" id="services">Services</h1>
		<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row my-4">
			<div class="col-md-3">
				<a href="<?php echo e(url('service/'.$service->id)); ?>"><img class="img-thumbnail" style="width:100%;" src="<?php echo e(asset('storage/app/'.$service->photo)); ?>" /></a>
			</div>
			<div class="col-md-8">
				<h3><?php echo e($service->title); ?></h3>
				<p><?php echo e($service->small_desc); ?></p>
				<p>
					<a href="<?php echo e(url('service/'.$service->id)); ?>" class="btn btn-primary">Read More</a>
				</p>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<!-- Service Section End -->
	<!-- Gallery Section Start -->
	<div class="container my-4">
		<h1 class="text-center border-bottom" id="gallery">Gallery</h1>
		<div class="row my-4">
			<?php $__currentLoopData = $roomTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3">
				<div class="card">
					<h5 class="card-header"><?php echo e($rtype->title); ?></h5>
					<div class="card-body">
						<?php $__currentLoopData = $rtype->roomtypeimgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<a href="<?php echo e(asset('storage/app/'.$img->img_src)); ?>" data-lightbox="rgallery<?php echo e($rtype->id); ?>">
                        		<?php if($index > 0): ?>
                        		<img class="img-fluid hide" src="<?php echo e(asset('storage/app/'.$img->img_src)); ?>" />
                        		<?php else: ?>
                        		<img class="img-fluid" src="<?php echo e(asset('storage/app/'.$img->img_src)); ?>" />
                        		<?php endif; ?>
                        	</a>
                        </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
	<!-- Gallery Section End -->

	<!-- Slider Section Start -->
	<h1 class="text-center mt-5" id="gallery">Testimonials</h1>
	<div id="testimonials" class="carousel slide p-5 bg-secondary text-white border mb-5" data-bs-ride="carousel">
	  <div class="carousel-inner">
	  	<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <div class="carousel-item <?php if($index==0): ?> active <?php endif; ?>">
	      	<figure class="text-center">
			  <blockquote class="blockquote">
			    <p><?php echo e($testi->testi_cont); ?></p>
			  </blockquote>
			  <figcaption class="blockquote-footer text-white">
			    <?php echo e($testi->customer->full_name); ?>

			  </figcaption>
			</figure>
	    </div>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- Slider Section End -->

<!-- LightBox css -->
<link rel="stylesheet" type="text/css" href="vendor/lightbox2-2.11.3/dist/css/lightbox.min.css" />
<!-- LightBox Js -->
<script type="text/javascript" src="vendor/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
<style type="text/css">
	.hide{
		display: none;
	}
</style>
<?php $__env->stopSection(); ?>
	</body>
</html>
<?php echo $__env->make('frontlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\int221\resources\views/home.blade.php ENDPATH**/ ?>