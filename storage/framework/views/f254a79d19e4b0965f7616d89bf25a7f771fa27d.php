

<?php $__env->startSection('title', 'Добавление'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="allMain"></div>
<h2>Добавление мастера</h2>

<a href="/main/mastersAdmin" class="back">Назад</a>

<div class="form-master">
    <div class="form-content">
        <form action="<?php echo e(route('master.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-blocks">
                <div class="form-block1">
                    <label for="name">* Имя:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    
                    <label for="surname">* Фамилия:</label><br>
                    <input type="text" id="surname" name="surname" required><br>
                    
                    <label for="lastname">* Отчество:</label><br>
                    <input type="text" id="lastname" name="lastname" required><br>

                    <label for="age">* Полных лет:</label><br>
                    <input type="number" id="age" name="age" required><br>

                    <label for="birthday">* Дата рождения:</label><br>
                    <input type="date" id="birthday" name="birthday" required><br>

                    <label for="email">* Электронная почта:</label><br>
                    <input type="email" id="email" name="email" required><br>
                </div>

                <div class="form-block1">
                    <label for="address">* Адрес проживания:</label><br>
                    <input type="text" id="address" name="address" required><br>

                    <label for="phonenumber">* Номер телефона:</label><br>
                    <input type="text" id="phonenumber" name="phonenumber" required><br>

                    <label for="characteristic">Характеристика:</label><br>
                    <textarea name="characteristic" id="characteristic" cols="30" rows="10" required></textarea><br>

                    <label for="photo">Фотография:</label><br><br>
                    <div class="box">
                    <img src="" alt="" id="showImage" class="img-add">
                    </div>
                    <input type="file" src="" alt="" id="photo" name="photo" onchange="loadImage(this)" required>
                    <script>
                        function loadImage(e){
                            showImage.bidden = false;
                            showImage.src = URL.createObjectURL(e.files[0]);
                            showImage.onload = function(){
                                URL.revokeObjectURL(e.src);
                            }
                        }
                        tinymce.init({
                            selector: 'img',
                            plugins: 'advlist autolink lists charmap print preview hr',
                            toolbar_mode: 'floating',
                        })
                    </script>
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
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/addMaster.blade.php ENDPATH**/ ?>