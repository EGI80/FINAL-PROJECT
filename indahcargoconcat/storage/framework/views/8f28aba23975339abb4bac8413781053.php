<!-- Hero -->
<section class="hero overflow-hidden">

    <div class="container">
        <?php $__currentLoopData = $heros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="hero-box d-flex align-items-center justify-content-between flex-md-row flex-column gap-md-0 gap-5">
            <div class="box animate__animated animate__fadeInLeft animate__delay-1s">
                <h1 class="fw-bold mb-3">
                    <?php echo e($hero->judul); ?><br />
                    <span class="text-danger"> <?php echo e($hero->subjudul); ?></span> <br />
                </h1>
            </div>
            <div class="box animate__animated animate__fadeInRight animate__delay-1s">
                <img src="<?php echo e(asset('storage/hero/' . $hero->image)); ?>" alt="Hero Image" />
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<!-- Hero --><?php /**PATH D:\ProjectEgi\indahcargoconcat\resources\views/layouts/hero.blade.php ENDPATH**/ ?>