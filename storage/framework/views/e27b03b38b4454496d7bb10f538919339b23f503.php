

<?php $__env->startSection('title', 'Запись'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="all">

</div>

<div class="form-order">
    <div class="form-order-content">
        <form action="<?php echo e(route('orderNext.store')); ?>" method="POST">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="forms-order-1">
                <div class="form-order1">
                    
                        <label class="title-order">Выберите услугу:</label>
                        <div class="info-order1">
                        <select name="type_service_id" id="master_id" required>
                            <option value="">-</option>
                            <?php $__currentLoopData = $type_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($type_service->id); ?>"><?php echo e($type_service->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="hidden" name="master_id" value="<?php echo e($master_id); ?>" required>
                    </div>   
                </div>
                <div class="form-order2">
                    
                        <label class="title-order">Выберите дату и время:</label>
                        <div class="info-order1">
                        <select name="graph_id" id="master_id" required>
                            <option value="">-</option>
                            <?php $__currentLoopData = $graphs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $graph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($graph->id); ?>"><?php echo e($graph->date); ?> <?php echo e($graph->time); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="btn-order-next">
                <a href=""><button class="" id="btn-order-next">ДАЛЕЕ</button></a>
            </div>
        </form>
    </div>
</div>

<?php 



?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/orderNext.blade.php ENDPATH**/ ?>