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
  <link rel="stylesheet" href="<?php echo e(asset("css/home.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/header.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/price.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/mainInfo.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/contact.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/master.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("css/entry.css")); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  
  <?php echo $__env->yieldContent('css-files'); ?>
</head>
<body>
  <div class="wrapper">
    <a href="/order"><div class="bg-btn"></div><button class="main-btn-zapis">ОНЛАЙН <br> ЗАПИСЬ</button></a>
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="filter" id="filter"></div>
    <main class="main">
      <?php echo $__env->yieldContent('main-content'); ?>
    </main>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <script src="<?php echo e(asset("js/app.js")); ?>"></script>
  <script src="<?php echo e(asset("js/sidemenu.js")); ?>"></script>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script>
    function burgerMenu(selector) {
    let menu = $(selector);
    let button = menu.find('.burger-menu_button', '.burger-menu_lines');
    let links = menu.find('.burger-menu_link');
    let overlay = menu.find('.burger-menu_overlay');
    
    button.on('click', (e) => {
      e.preventDefault();
      toggleMenu();
    });
    
    links.on('click', () => toggleMenu());
    overlay.on('click', () => toggleMenu());
    
    function toggleMenu(){
      menu.toggleClass('burger-menu_active');
      
      if (menu.hasClass('burger-menu_active')) {
        $('body').css('overlow', 'hidden');
      } else {
        $('body').css('overlow', 'visible');
      }
    }
  }
  
  burgerMenu('.burger-menu');

  
  </script>
  <?php echo $__env->yieldContent('js-files'); ?>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/layouts/app.blade.php ENDPATH**/ ?>