<header x-data = "{navbarOpen: false}" class="site-header sticky-top ">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white shadow-sm p-3 mb-5" id="navbarNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="<?php echo e(url('/img/logo.png')); ?>" alt="Mr Dev" width="50" height="50"
                    class="d-inline-block align-text-top">
            </a>
            <div class="text-center d-flex align-items-center justify-content-center">
                <a class="navbar-brand" href="/">
                    <span class="navbar-brand mb-0 h3">Mr. Dev</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal0b6df9fda0554294107fed056a24dc5a2c0465ae = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout\NavebarItem::class, ['href' => $item['href']]); ?>
<?php $component->withName('layout.navebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e($item['label']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b6df9fda0554294107fed056a24dc5a2c0465ae)): ?>
<?php $component = $__componentOriginal0b6df9fda0554294107fed056a24dc5a2c0465ae; ?>
<?php unset($__componentOriginal0b6df9fda0554294107fed056a24dc5a2c0465ae); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\Users\asus\mr-dev-portfoilo\resources\views/layout/navebar.blade.php ENDPATH**/ ?>