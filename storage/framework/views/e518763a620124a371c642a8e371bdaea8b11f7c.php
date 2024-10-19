<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.home.home','data' => []]); ?>
<?php $component->withName('home.home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginala044ab85b31db6dca8ebcb4b071cf6ac3b116024 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\Clients\OurClients::class, []); ?>
<?php $component->withName('home.clients.our-clients'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala044ab85b31db6dca8ebcb4b071cf6ac3b116024)): ?>
<?php $component = $__componentOriginala044ab85b31db6dca8ebcb4b071cf6ac3b116024; ?>
<?php unset($__componentOriginala044ab85b31db6dca8ebcb4b071cf6ac3b116024); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.home.about-us','data' => []]); ?>
<?php $component->withName('home.about-us'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc6c6dbbc920967c492eb5637d2c6c409b44a2cd5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\Plans::class, []); ?>
<?php $component->withName('home.plans'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6c6dbbc920967c492eb5637d2c6c409b44a2cd5)): ?>
<?php $component = $__componentOriginalc6c6dbbc920967c492eb5637d2c6c409b44a2cd5; ?>
<?php unset($__componentOriginalc6c6dbbc920967c492eb5637d2c6c409b44a2cd5); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal290cc37277256b47dbfb17b371335ba47ff29923 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\ContactUs::class, []); ?>
<?php $component->withName('home.contact-us'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal290cc37277256b47dbfb17b371335ba47ff29923)): ?>
<?php $component = $__componentOriginal290cc37277256b47dbfb17b371335ba47ff29923; ?>
<?php unset($__componentOriginal290cc37277256b47dbfb17b371335ba47ff29923); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\asus\mr-dev-portfoilo\resources\views/welcome.blade.php ENDPATH**/ ?>