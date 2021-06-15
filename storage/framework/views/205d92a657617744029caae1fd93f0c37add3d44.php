

<?php $__env->startSection('title', 'Редактирование'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="allMain"></div>
<h2>Редактирование</h2>

<a href="/main/mastersAdmin" class="back">Назад</a>

<div class="form-master">
    <div class="form-content">
        <form action="<?php echo e(route('master.edit', $master->id)); ?>" method="GET">
            <?php echo method_field('GET'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-blocks">
                <div class="form-block1">
                    <input type="hidden" name="id" value="<?php echo e($master->id); ?>" required>

                    <label for="name">* Имя:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo e($master->name); ?>" required><br>
                    
                    <label for="surname">* Фамилия:</label><br>
                    <input type="text" id="surname" name="surname" value="<?php echo e($master->surname); ?>" required><br>
                    
                    <label for="lastname">* Отчество:</label><br>
                    <input type="text" id="lastname" name="lastname" value="<?php echo e($master->lastname); ?>" required><br>

                    <label for="age">* Полных лет:</label><br>
                    <input type="number" id="age" name="age" value="<?php echo e($master->age); ?>" required><br>

                    <label for="birthday">* Дата рождения:</label><br>
                    <input type="date" id="birthday" name="birthday" value="<?php echo e($master->birthday); ?>" required><br>
                </div>

                <div class="form-block1">
                    <label for="address">* Адрес проживания:</label><br>
                    <input type="text" id="address" name="address" value="<?php echo e($master->address); ?>" required><br>

                    <label for="phonenumber">* Номер телефона:</label><br>
                    <input type="text" id="phonenumber" name="phonenumber" value="<?php echo e($master->phonenumber); ?>" required><br>

                    <label for="characteristic">Характеристика:</label><br>
                    <textarea name="characteristic" id="characteristic" cols="30" rows="40" value="" required><?php echo e($master->characteristic); ?></textarea>
                
                    <label for="photo">Фотография:</label>
                    
                    <script>
                        // function loadImage(e){
                        //     showImage.bidden = false;
                        //     showImage.src = URL.createObjectURL(e.files[0]);
                        //     showImage.onload = function(){
                        //         URL.revokeObjectURL(e.src);
                        //     }
                        // }
                        // tinymce.init({
                        //     selector: 'img',
                        //     plugins: 'advlist autolink lists charmap print preview hr',
                        //     toolbar_mode: 'floating',
                        // })
                    </script>
                </div>
            </div>

            <button class="btn-form-add">СОХРАНИТЬ</button>
            <?php if(session('success')): ?> 
                <p class="title-success">><?php echo e(session('success')); ?></p>
            <?php endif; ?>
            
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/editMaster.blade.php ENDPATH**/ ?>