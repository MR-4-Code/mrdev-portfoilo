<div class="row md-2 g-3 bg-light" id="ourClients">
    <div class="col-md-8 mx-auto my-5">
        <h1 class="display-5 fw-bold text-center">Our Clients</h1>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">

            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal4672eead7a8f5cf2ebeaf899fc3025d847fc5024 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\Clients\ClientItem::class, ['client' => $client,'isActive' => $index === 0]); ?>
<?php $component->withName('home.clients.client-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4672eead7a8f5cf2ebeaf899fc3025d847fc5024)): ?>
<?php $component = $__componentOriginal4672eead7a8f5cf2ebeaf899fc3025d847fc5024; ?>
<?php unset($__componentOriginal4672eead7a8f5cf2ebeaf899fc3025d847fc5024); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php /**PATH C:\Users\asus\mr-dev-portfoilo\resources\views/components/home/clients/our-clients.blade.php ENDPATH**/ ?>