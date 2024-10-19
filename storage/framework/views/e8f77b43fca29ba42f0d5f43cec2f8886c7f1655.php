<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="antialiased" data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="70" tabindex="0">
    <?php if (isset($component)) { $__componentOriginal8e33fc7be8e1697bdbb2199ec5a59819735a0b53 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout\Navebar::class, []); ?>
<?php $component->withName('layout.navebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e33fc7be8e1697bdbb2199ec5a59819735a0b53)): ?>
<?php $component = $__componentOriginal8e33fc7be8e1697bdbb2199ec5a59819735a0b53; ?>
<?php unset($__componentOriginal8e33fc7be8e1697bdbb2199ec5a59819735a0b53); ?>
<?php endif; ?>
    <?php echo e($slot); ?>

    <?php if (isset($component)) { $__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layout\Footer::class, []); ?>
<?php $component->withName('layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa)): ?>
<?php $component = $__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa; ?>
<?php unset($__componentOriginal8d1df6f099156bed20d9c14a96b2b4c60c5786aa); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH C:\Users\asus\mr-dev-portfoilo\resources\views/layout/app.blade.php ENDPATH**/ ?>