

<?php $__env->startSection('title', 'Добавление'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="allMain"></div>
<h2>Добавление графика</h2>

<a href="<?php echo e(route('graphsAdmin', $master->id)); ?>" class="back">Назад</a>

<div class="form-master">
    <div class="form-content">
        <form action="<?php echo e(route('graph.store')); ?>" method="post">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-blocks">
                <div class="form-block1">
                    <label for="date">Дата:</label><br>
                    <input type="date" id="date" name="date" required><br>

                    <label for="time">Время:</label><br>
                    <input type="time" id="time" name="time" required><br>
                </div>

                <div class="form-block1">
                    <label for="master_id">Мастер:</label>
                    
                    <p><?php echo e($master->name); ?> <?php echo e($master->surname); ?></p><br>
                    <input type="hidden" name="master_id" value="<?php echo e($master->id); ?>" required>
                    <div class="box img-add"><img src="/storage/images/masters/photos/<?php echo e($master->photo); ?>" alt=""></div>
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
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/addGraph.blade.php ENDPATH**/ ?>