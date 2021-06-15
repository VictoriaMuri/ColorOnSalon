

<?php $__env->startSection('title', 'Мастер'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="master-container">

    <style>
        .rating-mini span {
        font-size: 42px;
    }
    </style>

    <div class="info-master">
        <div class="photo-master">
            <p class="name-master">
                <?php echo e($master->name); ?> <?php echo e($master->surname); ?>

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
                
            </p> 
            <div class="box1"><img src="/storage/images/masters/photos/<?php echo e($master->photo); ?>" alt=""></div>
        </div>
        <div class="text-master">
            <div class="main-info-master">
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
                
            </div>
            <div class="characteristic">
                <p class="text-info-master"><?php echo e($master->characteristic); ?></p>
            </div>
        </div>
    </div>

    <div class="master-portfolio">
        <?php if($portfolios == '[]'): ?>
            
            <p class="title title-portfolio">ГАЛЕРЕЯ РАБОТ ПОКА ОТСУТСТВУЕТ</p>
        <?php else: ?>

        <p class="title title-portfolio">ГАЛЕРЕЯ РАБОТ</p>
            <div class="images-portfolio">
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img id="myImg" alt="<?php echo e($portfolio->description); ?>" src="/storage/images/masters/portfolios/<?php echo e($portfolio->image); ?>" alt="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        <?php endif; ?>
    </div>

    <div class="comments">

        <p class="title title-comments">Отзывы</p>

        <div class="form-comment">
            <form action="<?php echo e(route('rating.store')); ?>" method="post">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>

                <?php if(auth()->guard()->guest()): ?>
                    <?php if(empty(Auth::user()->name)): ?>
                        <p class="text-comment">Чтобы оставить отзыв необходимо <a href="/login">войти</a> <br> или <a href="/register">зарегестрироваться</a></p>
                    <?php endif; ?>
                    <?php else: ?>
                        <p class="text-comment">Вы: <?php echo e(Auth::user()->name); ?></p>
                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>" required>
                        <input type="hidden" name="master_id" value="<?php echo e($master->id); ?>" required>
                    </select>
                <?php endif; ?>

                <div class="rating-area">
                    <input type="radio" id="star-5" name="rating" value="5" required>
                    <label for="star-5" title="Оценка «5»"></label>	
                    <input type="radio" id="star-4" name="rating" value="4" required>
                    <label for="star-4" title="Оценка «4»"></label>    
                    <input type="radio" id="star-3" name="rating" value="3" required>
                    <label for="star-3" title="Оценка «3»"></label>  
                    <input type="radio" id="star-2" name="rating" value="2" required>
                    <label for="star-2" title="Оценка «2»"></label>    
                    <input type="radio" id="star-1" name="rating" value="1" required>
                    <label for="star-1" title="Оценка «1»"></label>
                </div>

                <textarea name="comment" id="comment" cols="70" rows="10" required></textarea>
            
                
                <a href=""><button class="btn-price btn-comment">Оставить отзыв</button></a>
            </form>
        </div>

        <?php if($ratings == '[]'): ?>

            <div class="comment">
                <p class="text-comment">Отзывов нет</p>
            </div>
        
        <?php else: ?>

            <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                <div class="comment">
                    <p class="author-comment"><?php echo e($rating->user['name']); ?> (<?php echo e($rating->date); ?>) </p>
                    <div class="rating-mini">
                        <?php if($rating->rating == 0): ?>
                            <span ></span>	
                            <span></span>    
                            <span></span>  
                            <span></span>    
                            <span></span>
                            <?php elseif($rating->rating == 1): ?>
                                <span class="active"></span>	
                                <span></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            <?php elseif($rating->rating == 2): ?>{
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span></span>  
                                <span></span>    
                                <span></span>
                            }
                            <?php elseif($rating->rating == 3): ?>{
                                <span class="active"></span>	
                                <span class="active"></span>    
                                <span class="active"></span>  
                                <span></span>    
                                <span></span>
                            }
                            <?php elseif($rating->rating == 4): ?>{
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
                    <p>Оценка <?php echo e($rating->rating); ?> из 5</p>
                    <p><?php echo e($rating->comment); ?></p>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>

    </div>

    

</div>

<script>
    // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/master.blade.php ENDPATH**/ ?>