

<?php $__env->startSection('title', 'Добавление'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="allMain"></div>
<h2>Добавление портфолио</h2>

<a href="#" OnClick="history.back();" class="back">Назад</a>

<div class="form-master">
    <div class="form-content">
        <form action="<?php echo e(route('portfolio.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-blocks">

                <div class="form-block1">

                    <label for="photo">Фотография:</label><br><br>
                    <div class="box">
                    <img src="" alt="" id="showImage" class="img-add">
                    </div>
                    <input type="file" src="" alt="" id="photo" name="image" onchange="loadImage(this)" required><br>
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
                    <input type="hidden" name="master_id" value="<?php echo e($id); ?>" required>

                    <label for="description">Описание:</label><br>
                    <textarea type="text" id="description" name="description" required></textarea><br>

                    <label for="date">Дата:</label><br>
                    <input type="date" id="date" name="date" required><br>
                    
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
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/admin/addPortfolio.blade.php ENDPATH**/ ?>