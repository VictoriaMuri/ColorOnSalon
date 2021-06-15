

<?php $__env->startSection('title', 'Главная'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="header-price"><p class="title title-price1">Прайс-лист</p></div>


<div class="container-price">
    <div class="table-service-price">

        <div class="one-service">
            <ul class="ul-price">
            <?php $__currentLoopData = $manicures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manicure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                <li>
                    <span  class="name-service"><?=$manicure->name?></span >
                    <span  class="price"><?=$manicure->price?> руб.</span >
                </li>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="title-price"><h1><span>Маникюр</span></h1></div><br>  
        </div>

        <div class="one-service">
        
            <ul class="ul-price">
            <?php $__currentLoopData = $pedicures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedicure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                <li>
                    <span  class="name-service"><?=$pedicure->name?></span >
                    <span  class="price"><?=$pedicure->price?> руб.</span >
                </li>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="title-price"><h1><span>Педикюр</span></h1></div><br>   
        </div>
    
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/price.blade.php ENDPATH**/ ?>