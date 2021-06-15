

<?php $__env->startSection('title', 'Запись'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="all">

</div>

<div class="form-order">
    <div class="form-order-content">
        <form action="<?php echo e(route('order.store')); ?>" method="POST">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>

            <div class="forms-order">
                <div class="form-order1">
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(empty(Auth::user()->name)): ?>
                        <label class="title-order">Ваши данные:</label>
                        <div class="info-order">
                            
                            <p>Необходимо <a href="/login">войти</a> <br> или <a href="/register">зарегестрироваться</a></p>
                        </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <label class="title-order">Ваши данные:</label>
                        <div class="info-order">
                            <p><?php echo e(Auth::user()->name); ?></p>
                            <p><?php echo e(Auth::user()->email); ?></p>
                            <select name="user_id" id="selectUser"  required>
                                <option value="<?php echo e(Auth::user()->id); ?>"><?php echo e(Auth::user()->id); ?></option>
                            </select>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-order2">
                    <label class="title-order">Выберите мастера:</label>
                    <div class="info-order">
                        <select name="master_id" id="master_id" required>
                            <option value="">-</option>
                            <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($master->id); ?>"><img src="/storage/images/masters/photos/<?php echo e($master->photo); ?>" alt=""><?php echo e($master->name); ?> <?php echo e($master->surname); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <?php if(auth()->guard()->guest()): ?>
                <?php if(empty(Auth::user()->name)): ?>
                        
                <?php endif; ?>
                <?php else: ?>
                <div class="btn-order-next">
                    <a href=""><button class="" id="btn-order-next">ДАЛЕЕ</button></a>
                </div>
            <?php endif; ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/order.blade.php ENDPATH**/ ?>