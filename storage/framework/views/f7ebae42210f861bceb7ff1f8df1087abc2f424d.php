

<?php $__env->startSection('title', 'Записи'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="entry-container">

    <?php if($orders == '[]'): ?>
        <p class="title title-entry">Записей нет</p>
    <?php else: ?>

    <p class="title title-entry">Записи</p>

    <div class="table-entries">

        <table>

            <tr>
                <th>Дата записи</th>
                <th>Время</th>
                <th>Услуга</th>
                <th>Цена</th>
                <th>Статус</th>
            </tr>

            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->graph['date']); ?></td>
                    <td><?php echo e($order->graph['time']); ?></td>
                    <td><?php echo e($order->service['name']); ?></td>
                    <td><?php echo e($order->service['price']); ?> руб.</td>
                    <?php if($order->status['name'] == "Оформлено"): ?>
                        <td style="color: rgb(144, 255, 144); font-weight: bold;"><?php echo e($order->status['name']); ?></td>
                        <?php else: ?>
                        <?php if($order->status['name'] == "Отменено"): ?>
                            <td style="color: rgb(255, 144, 144); font-weight: bold;"><?php echo e($order->status['name']); ?></td>
                        <?php else: ?>
                            <td style="color: rgb(144, 214, 255); font-weight: bold;"><?php echo e($order->status['name']); ?></td>
                        <?php endif; ?>
                    <?php endif; ?>

                    <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>" required>
                    
                    

                    <?php if($order->status['name'] == 'Оформлено'): ?>
                        <?php if(auth()->check() && auth()->user()->hasRole('master')): ?>
                            <td><button class="btn-cancel"><a href="<?php echo e(route('orderUpdateStatusMaster', $order->id)); ?>">Услуга выполнена &#10004;</button></a></td>
                            <td><button class="btn-cancel"><a href="<?php echo e(route('orderUpdateStatusMasterCancel', $order->id)); ?>">Отменить запись &#10006;</button></a></td>
                        <?php endif; ?>
                        <?php if(auth()->check() && auth()->user()->hasRole('user')): ?>
                            <td><button class="btn-cancel"><a href="<?php echo e(route('orderUpdateStatus', $order->id)); ?>">Отменить запись &#10006;</button></a></td>
                        <?php endif; ?>
                        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                            <td><button class="btn-cancel"><a href="<?php echo e(route('orderUpdateStatus', $order->id)); ?>">Отменить запись &#10006;</button></a></td>
                        <?php endif; ?>
                    <?php endif; ?>

                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/entries.blade.php ENDPATH**/ ?>