<div class="carousel-item <?php echo e($isActive ? 'active' : ''); ?>">
    <a href="<?php echo e($client['link']); ?>" target="_blank">

        <img src="<?php echo e(url($client['img'])); ?>" class="d-block carousel-image mx-auto" alt="<?php echo e($client['title']); ?>">
        <div class="carousel-caption d-none d-md-block text-gradient-shadow">
            <h5 class="card-title"><?php echo e($client['title']); ?></h5>
            <p class="card-text"><?php echo e($client['desc']); ?></p>
        </div>
    </a>

</div>
<?php /**PATH C:\Users\asus\mr-dev-portfoilo\resources\views/components/home/clients/client-item.blade.php ENDPATH**/ ?>