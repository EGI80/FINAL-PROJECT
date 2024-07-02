<!-- About -->
<section class="about" id="about">
    <div class="container">
        <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="about-box text-center">
            <h1 class="fw-bold mb-4" data-aos="fade-up" data-aos-duration="1000">
                Tentang Kami
            </h1>
            <p class="lh-lg mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <?php echo e($about->judul); ?>

            </p>
            <img src="<?php echo e(asset('storage/about/' . $about->image)); ?>" alt="About Image" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" />
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<!-- About --><?php /**PATH D:\ProjectEgi\indahcargoconcat\resources\views/layouts/about.blade.php ENDPATH**/ ?>