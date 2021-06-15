

<?php $__env->startSection('title', 'Мастера'); ?>

<?php $__env->startSection('main-content'); ?>

<a href="/main/mastersAdmin/addMaster"><button class="btn btn-add">&#10010;</button></a>
<a href="/main" class="back">Назад</a>

<h2>Мастера</h2>

<table class="table">
	<thead>
		<tr>
            <th>Фото</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Отчество</th>
			<th>Полных лет</th>
			<th>Стаж (год)</th>
			<th>Дата рождения</th>
			<th>Адрес</th>
            <th>Номер телефоне</th>
            <th>Характеристика</th>
            <th></th>
            <th></th>
		</tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td><div class="box"><img src="/storage/images/masters/photos/<?php echo e($master->photo); ?>" alt=""></div></td>
                <td><?php echo e($master->name); ?></td>
                <td><?php echo e($master->surname); ?></td>
                <td><?php echo e($master->lastname); ?></td>
                <td><?php echo e($master->age); ?></td>
                <td><?php echo e($master->experience); ?></td>
                <td><?php echo e($master->birthday); ?></td>
                <td><?php echo e($master->address); ?></td>
                <td><?php echo e($master->phonenumber); ?></td>
                <td><?php echo e($master->characteristic); ?></td>
                <td>
                    <a href="<?php echo e(route('editMaster', $master->id)); ?>"><button class="btn btn-edit">Редактировать &#9998;</button></a><br>
                    <a href="<?php echo e(route('graphsAdmin', $master->id)); ?>"><button class="btn btn-edit">График</button></a><br>
                    <a href="<?php echo e(route('showPortfolio', $master->id)); ?>"><button class="btn btn-edit">Портфолио</button></a>
                </td>
                <td><a href="<?php echo e(route('deleteMaster', $master->id)); ?>"><button class="btn btn-delete">Удалить</button></a></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/masters.blade.php ENDPATH**/ ?>