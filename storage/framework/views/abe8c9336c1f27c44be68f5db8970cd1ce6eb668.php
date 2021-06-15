

<?php $__env->startSection('title', 'Мастера'); ?>

<?php $__env->startSection('main-content'); ?>

<a href="<?php echo e(route('addPortfolio', $id)); ?>"><button class="btn btn-add">&#10010;</button></a>
<a href="/main/mastersAdmin" class="back">Назад</a>

<h2>Портфолио</h2>

<table class="table">
	<thead>
		<tr>
            <th>Фото</th>
			<th>Мастер</th>
			<th>Описание</th>
			<th>Дата</th>
            <th></th>
		</tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td><div class="box"><img src="/storage/images/masters/portfolios/<?php echo e($portfolio->image); ?>" alt=""></div></td>
                <td><?php echo e($portfolio->master['name']); ?> <?php echo e($portfolio->master['surname']); ?></td>
                <td><?php echo e($portfolio->description); ?></td>
                <td><?php echo e($portfolio->date); ?></td>
                <td><a href="<?php echo e(route('deletePortfolio', $portfolio->id)); ?>"><button class="btn btn-delete">Удалить</button></a></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/portfolio.blade.php ENDPATH**/ ?>