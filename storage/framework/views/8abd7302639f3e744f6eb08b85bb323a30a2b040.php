

<?php $__env->startSection('title', 'Администратор'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="allMain"></div>
<div class="padding"></div>
<div class="admin-main-container">
    <div class="admin-main-content">
        <div class="admin-btn1"><a href="/main/mastersAdmin"><button><img src="../../images/admin/050-working.png" alt=""><p> Мастера</p></button></a></div>
        
        <div class="admin-btn1"><a href="/main/servicesAdmin"><button><img src="../../images/admin/027-manicure.png" alt=""><p> Услуги</p></button></a></div>
        
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/main.blade.php ENDPATH**/ ?>