

<?php $__env->startSection('title', 'Запись'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="all">

</div>

<div class="form-order">
    <div class="form-order-content">
        <form action="<?php echo e(route('orderNextNext.store')); ?>" method="POST">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="forms-order-1">
                <div class="form-order1">
                    <label class="title-order">Выберите услугу:</label>
                    <select name="service_id" id="master_id" required>
                        <option value="">-</option>
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <input type="hidden" name="master_id" value="<?php echo e($master_id); ?>" required>
                    <input type="hidden" name="graph_id" value="<?php echo e($graph_id); ?>" required>
                </div>
            </div>
            <div class="btn-order-next">
                <a href=""><button class="" id="btn-order-next">ЗАПИСАТЬСЯ</button></a>
                <p class="title-success"><?php echo e(session('success')); ?></p>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/orderNextNext.blade.php ENDPATH**/ ?>