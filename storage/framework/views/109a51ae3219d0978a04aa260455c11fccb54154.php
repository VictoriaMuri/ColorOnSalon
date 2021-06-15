

<?php $__env->startSection('title', 'График'); ?>

<?php $__env->startSection('main-content'); ?>

<a href="<?php echo e(route('addGraph', $master->id)); ?>"><button class="btn btn-add">&#10010;</button></a>
<a href="/main/mastersAdmin" class="back">Назад</a>

<h2>График</h2>
<h2>Мастер: <?php echo e($master->name); ?> <?php echo e($master->surname); ?></h2> <br>
<div class="box img-add img-center"><img src="/storage/images/masters/photos/<?php echo e($master->photo); ?>" alt=""></div>

<table class="table">
	<thead>
		<tr>
            <th>Дата</th>
			<th>Время</th>
			<th>Статус</th>
            <th></th>
		</tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $graphs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $graph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td><?php echo e($graph->date); ?></td>
                <td><?php echo e($graph->time); ?></td>
                <?php if($graph->status == 'Свободно'): ?>
                    <td style="color:green;"><?php echo e($graph->status); ?></td>
                    <?php else: ?>
                    <td style="color:red;"><?php echo e($graph->status); ?></td>
                <?php endif; ?>
                <td><a href="<?php echo e(route('deleteGraph', $graph->id)); ?>"><button class="btn btn-delete">Удалить</button></a></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/graphs.blade.php ENDPATH**/ ?>