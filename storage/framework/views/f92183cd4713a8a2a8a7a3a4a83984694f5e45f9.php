

<?php $__env->startSection('title', 'Услуги'); ?>

<?php $__env->startSection('main-content'); ?>

<a href="/main/servicesAdmin/addService"><button class="btn btn-add">&#10010;</button></a>
<a href="/main" class="back">Назад</a>

<h2>Услуги</h2>

<table class="table">
	<thead>
		<tr>
            <th>Тип</th>
			<th>Название</th>
			<th>Цена</th>
            <th></th>
            <th></th>
		</tr>
	</thead>
	<tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td><?php echo e($service->type_service['name']); ?></td>
                <td><?php echo e($service->name); ?></td>
                <td><?php echo e($service->price); ?></td>
                <td><a href="<?php echo e(route('editService', $service->id)); ?>"><button class="btn btn-edit">Редактировать</button></a></td>
                <td><a href="<?php echo e(route('deleteService', $service->id)); ?>"><button class="btn btn-delete">Удалить</button></a></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/services.blade.php ENDPATH**/ ?>