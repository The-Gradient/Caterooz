<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/app.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script   src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"</script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"</script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html> 