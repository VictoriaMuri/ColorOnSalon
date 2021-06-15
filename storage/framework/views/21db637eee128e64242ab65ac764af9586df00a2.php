

<?php $__env->startSection('title', 'Добавление'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="allMain"></div>
<h2>Добавление услуги</h2>

<a href="/main/servicesAdmin" class="back">Назад</a>

<div class="form-master">
    <div class="form-content">
        <form action="<?php echo e(route('service.store')); ?>" method="post">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-blocks">
                <div class="form-block1">

                    <label for="type_service_id">Тип:</label><br>
                    <select name="type_service_id" id="type_service_id" required>
                        <option value="">-</option>
                        <?php $__currentLoopData = $type_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type_service->id); ?>"><?php echo e($type_service->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                    <label for="name">Название:</label><br>
                    <input type="text" id="name" name="name" required><br>

                    <label for="price">Цена:</label><br>
                    <input type="number" id="price" name="price" required><br>

                </div>
            </div>

            <button class="btn-form-add">ДОБАВИТЬ</button>
            <?php if(session('success')): ?> 
                <p class="title-success">><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/addService.blade.php ENDPATH**/ ?>