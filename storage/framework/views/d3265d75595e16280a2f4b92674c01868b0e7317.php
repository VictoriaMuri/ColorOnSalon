

<?php $__env->startSection('title', 'Мастера'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="masters-container">

    <div class="masters-header">
        <div class="masters-header-block">
            <img src="images/masters/team.png" alt="">
        </div>
    </div>

    <p class="title title-masters">Наши мастера</p>

    <section id="threeMasters">
        <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <a href="">
            <div class="oneMaster">
                <div class="imgMaster box"><img src="/storage/images/masters/photos/<?php echo e($master->photo); ?>" alt=""></div>
                
                <div class="infoMaster">

                    
                    <?php 
                        $kol = 0; $sum = 0;
                        foreach ($ratings as $rating) {
                            if($rating['master_id'] == $master->id){
                                $kol++;
                                $sum+=$rating['rating'];
                            }
                        }
                        if ($sum == 0) {
                            $srRating = 0;
                        }
                        else {
                            $srRating = $sum/$kol;
                        }
                        
                    ?>
                    

                    <div class="rating-mini">
                        <?php if($srRating == 0): ?>
                            <span ></span>	
                            <span></span>    
                            <span></span>  
                            <span></span>    
                            <span></span>
                            <?php elseif($srRating == 1): ?>
                                <span class="active"></span>	
                                <span></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            <?php elseif($srRating == 2): ?>{
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            }
                            <?php elseif($srRating == 3): ?>{
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span></span>    
                                <span></span>
                            }
                            <?php elseif($srRating == 4): ?>{
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span class="active"></span>    
                                <span></span>
                            }
                            <?php else: ?>
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span class="active"></span>    
                                <span class="active"></span>
                        <?php endif; ?>
                        
                    </div>
                
                    <p><?= $master->name; ?> <?= $master->surname; ?></p>

                    <a href="<?php echo e(route('oneMaster', $master->id)); ?>" class="btn-price btn-price1 btn-more-master">Подробнее...</a>
                </div>
            </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/masters.blade.php ENDPATH**/ ?>