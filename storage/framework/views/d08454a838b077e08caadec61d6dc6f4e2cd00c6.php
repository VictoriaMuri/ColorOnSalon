<?php $__env->startSection('title', 'Главная'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="main-block">
    <div class="bg-block">
        <img src="images/home/bg-block.jpg" alt="">
        <p class="text-main-block">Маникюрный салон</p>
        <p class="text-main-block brush">ColorON</p>
        
    </div>
    <div class="bg-block1">
        <div class="bg-block-text">
            <p class="text-main-block">Маникюрный салон</p>
            <p class="text-main-block brush">ColorON</p>
        </div>
    </div>
</div>

<div class="services-container">

    <div class="title">Наши услуги</div>

    <div class="services">
        <div class="service">
            <img src="images/home/service2.png" alt="">
            <div class="titleservice">Маникюр</div>
            <div class="textimg">
                Руки – визитная карточка женщин и девушек. <br>
                Каждая стремится быть в курсе новинок и своевременно ухаживать <br>
                не только за кожей и ногтями, <br> 
                но и примерять новинки дизайнов, <br>
                подбирая их под стиль одежды, настроение и случай.
            </div>
            <a href="/price" class="btn-price btn-price1">Все цены</a>
        </div>
        <div class="service">
            <img src="images/home/service1.png" alt="">
            <div class="titleservice">Педикюр</div>
            <div class="textimg">
                Мастера не только способны вернуть <br> 
                легкость походке и сделать ножки красивыми. <br> 
                Чтобы ноги чувствовали себя комфортно и выглядели привлекательно, <br> 
                необходимо регулярно <br> 
                за ними ухаживать. 
            </div>
            <a href="/price" class="btn-price btn-price1">Все цены</a>
        </div>
    </div>

</div>

<div class="quotes-container">

    <section id="slider_bl">
        
        <div class="wrapper">
          <input checked type=radio name="slider" id="slide1" />
          <input type=radio name="slider" id="slide2" />
          <input type=radio name="slider" id="slide3" />
          <input type=radio name="slider" id="slide4" />
          <div class="slider-wrapper">
            <div class=inner>
                <article>
                    <div class="info-quote">
                        <p>
                            Без красивых ногтей не бывает ухоженных рук. <br>
                            Красивые руки <br>
                            признак настоящей леди. <br>
                            <div class="author">
                                @ Эмануэль Беар
                            </div>
                        </p>
                    </div>
                </article>
                <article>
                    <div class="info-quote">
                        <p>
                            Все в ваших руках. <br>
                            Поэтому ногти на них должны <br>
                            быть в полном порядке!
                            <div class="author">
                                @ Коко Шанель
                            </div>
                        </p>
                    </div>
                </article>
                <article>
                    <div class="info-quote">
                        <p>
                            Девушка без красивого маникюра, <br>
                            как ночь без звезд
                            <div class="author">
                                @ Атэми Тейлор
                            </div>
                        </p>
                    </div>
                </article>
                <article>
                    <div class="info-quote">
                        <p>
                            Вы не одеты идеально, <br>
                            пока на кончиках ваших пальцев нет <br>
                            хорошего маникюра.
                            <div class="author">
                                @ Дженифер Лопез
                            </div>
                        </p>
                    </div>
                </article>
            </div>
          </div>
          <div class="slider-prev-next-control">
            <label for=slide1></label>
            <label for=slide2></label>
            <label for=slide3></label>
            <label for=slide4></label>
          </div>
        </div>
    </section>
</div>

<div class="title">Наши лучшие мастера</div>    
    <section id="threeMasters">
        <?php for($i=0; $i<=2; $i++): ?>
            <?php if($i == 0 || $i == 2): ?>
            
            <a href="">
            <div class="oneMaster" style="margin-top: 120px;">
                <div class="imgMaster box"><img src="/storage/images/masters/photos/<?php echo e($masters[$i]->photo); ?>" alt=""></div>
                
                <div class="infoMaster">

                    <?php 
                        $kol = 0; $sum = 0;
                        foreach ($ratings as $rating) {
                            if($rating['master_id'] == $masters[$i]->id){
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

                    <p><?= $masters[$i]->name; ?> <?= $masters[$i]->surname; ?></p>
                    <a href="<?php echo e(route('oneMaster', $masters[$i]->id)); ?>" class="ahref">Подробнее...</a>
                </div>
            </div>
            </a>
            <?php else: ?>
            <a href="">
            <div class="oneMaster">
                <div class="imgMaster box"><img src="/storage/images/masters/photos/<?php echo e($masters[$i]->photo); ?>" alt=""></div>
                
                <div class="infoMaster">

                    <?php 
                        $kol = 0; $sum = 0;
                        foreach ($ratings as $rating) {
                            if($rating['master_id'] == $masters[$i]->id){
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
                
                    <p><?= $masters[$i]->name; ?></p>


                    <a href="<?php echo e(route('oneMaster', $masters[$i]->id)); ?>" class="ahref">Подробнее...</a>
                </div>
            </div>
            </a>
            <?php endif; ?>
        <?php endfor; ?>
        <a href="/masters" class="btn-price btn-price1">Все мастера</a>
    </section>

    <section id="sale">
        <div class="textSale">
            <h1>приведи подругу</h1>
            <p class="textSale1">и получи скидку 10%</p>
            <p class="textStar">* подробности об акции узнавайте у администратора <br> нашего салона</p>
        </div>
        <img src="images/home/sale.png" alt="">

    </section>




    
<script>

const slideDelay = 3000;

const dynamicSlider = document.getElementById("slider");

var curSlide = 0;
window.setInterval(()=>{
  curSlide++;
  if (curSlide === dynamicSlider.childElementCount) {
    curSlide = 0;
  }

  // Actual slide
  dynamicSlider.firstElementChild.style.setProperty("margin-left", "-" + curSlide + "00%");
}, slideDelay);


    var slideIndex = 0;
    showSlides();
        
    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000);
    }

    function Sim(sldrId) {

let id = document.getElementById(sldrId);
if(id) {
    this.sldrRoot = id
}
else {
    this.sldrRoot = document.querySelector('.sim-slider')
};

// Carousel objects
this.sldrList = this.sldrRoot.querySelector('.sim-slider-list');
this.sldrElements = this.sldrList.querySelectorAll('.sim-slider-element');
this.sldrElemFirst = this.sldrList.querySelector('.sim-slider-element');
this.leftArrow = this.sldrRoot.querySelector('div.sim-slider-arrow-left');
this.rightArrow = this.sldrRoot.querySelector('div.sim-slider-arrow-right');
this.indicatorDots = this.sldrRoot.querySelector('div.sim-slider-dots');

// Initialization
this.options = Sim.defaults;
Sim.initialize(this)
};

Sim.defaults = {

// Default options for the carousel
loop: true,     // Бесконечное зацикливание слайдера
auto: true,     // Автоматическое пролистывание
interval: 5000, // Интервал между пролистыванием элементов (мс)
arrows: true,   // Пролистывание стрелками
dots: true      // Индикаторные точки
};


$(function() {

// slider type
$t = "slide"; // opitions are fade and slide

  //variables
$f = 1000,  // fade in/out speed
$s = 1000,  // slide transition speed (for sliding carousel)
$d = 5000;  // duration per slide

$n = $('.slide').length; //number of slides
$w = $('.slide').width(); // slide width
  $c = $('.container').width(); // container width
   $ss = $n * $w; // slideshow width

  
  function timer() {
    $('.timer').animate({"width":$w}, $d);
    $('.timer').animate({"width":0}, 0);
}


// fading function
function fadeInOut() {
  timer();
    $i = 0;    
    var setCSS = {
        'position' : 'absolute',
        'top' : '0',
        'left' : '0'
    }        
    
    $('.slide').css(setCSS);
    
    //show first item
    $('.slide').eq($i).show();
    

    setInterval(function() {
      timer();
        $('.slide').eq($i).fadeOut($f);
        if ($i == $n - 1) {
            $i = 0;
        } else {
            $i++;
        }
        $('.slide').eq($i).fadeIn($f, function() {
            $('.timer').css({'width' : '0'});
        });

    }, $d);
    
}

function slide() {
  timer();
    var setSlideCSS = {
        'float' : 'left',
        'display' : 'inline-block',
          'width' : $c
    }
    var setSlideShowCSS = {
        'width' : $ss // set width of slideshow container
    }
    $('.slide').css(setSlideCSS);
    $('.slideshow').css(setSlideShowCSS); 
    
    
    setInterval(function() {
        timer();
        $('.slideshow').animate({"left": -$w}, $s, function(){
            // to create infinite loop
            $('.slideshow').css('left',0).append( $('.slide:first'));
        });
    }, $d);
    
}

if ($t == "fade") {
    fadeInOut();
    
} if ($t == "slide") {
    slide();
    
} else {
  
}
});

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/home.blade.php ENDPATH**/ ?>