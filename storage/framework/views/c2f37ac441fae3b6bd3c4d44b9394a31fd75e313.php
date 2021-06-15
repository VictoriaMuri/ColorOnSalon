<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta name="theme-color" content="#fff" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $__env->yieldContent('title'); ?> - ColorON</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap">
  <link rel="stylesheet" href="<?php echo e(asset("css/auth.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/order.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/admin/main.css")); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <?php echo $__env->yieldContent('css-files'); ?>
</head>
<body>
  <div class="wrapper">
    <main class="main">
      <?php echo $__env->yieldContent('main-content'); ?>
    </main>
  </div>
  <script src="<?php echo e(asset("js/app.js")); ?>"></script>
  <?php echo $__env->yieldContent('js-files'); ?>
</body>
</html><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/layouts/auth.blade.php ENDPATH**/ ?>