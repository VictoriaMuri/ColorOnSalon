

<?php $__env->startSection('title', 'О салоне'); ?>

<?php $__env->startSection('main-content'); ?>

<div class="mainInfo-content">

    <div class="about">
        <div class="about-content">

            <div class="about-img about-img1"><img src="images/salon/salon1.jpg" alt=""></div>
            <div class="about-text">
                <p class="title title-about">О НАС</p>
                <p class="about-text">
                    Почему красивые и успешные люди выбирают нас? Всё просто - мы экономим их время и деньги. <br><br>
                    Мы предлагаем высококачественные услуги уже более 6 лет. <br>
                    Наши мастера - профессионалы, которые постоянно повышают квалификацию и знают, что предложить для получения лучшего результата. Доверьтесь им, окунитесь в атмосферу расслабленности и гармонии.
                </p>
            </div>

        </div>
        <div class="about-content about-content1">

            <div class="about-text">
                <p class="about-text">
                    Мы уделяем особое внимание стерилизации инструмента и исползуем только самые качественные расходные материалы. <br><br>
                    Мы специализированная нейл-студия, и собрали самую лучшую палитру материалов и цветов из 300 цветов для маникюра и педикюра бизнес-уровня. <br><br>Это уютная студия, в которой можно расслабиться и подарить себе и только себе время, заботу, вкусный кофе, профессиональный маникюр и педикюр, и отличное настроение.
                </p>
            </div>
            <div class="about-img about-img2"><img src="images/salon/salon2.jpg" alt=""></div>

        </div>
    </div>

    <p class="title">ГАЛЕРЕЯ</p>
    <div id="slider">

        <input type="radio" name="slider" id="s1" checked>
        <input type="radio" name="slider" id="s2">
        <input type="radio" name="slider" id="s3">
        <input type="radio" name="slider" id="s4">
        <input type="radio" name="slider" id="s5">

        <label for="s1" id="slide1"><img src="images/slider/slide1.jpg" alt=""></label>
        <label for="s2" id="slide2"><img src="images/slider/slide2.jpg" alt=""></label>
        <label for="s3" id="slide3"><img src="images/slider/slide1.jpg" alt=""></label>
        <label for="s4" id="slide4"><img src="images/slider/slide2.jpg" alt=""></label>
        <label for="s5" id="slide5"><img src="images/slider/slide1.jpg" alt=""></label>

    </div>
    <div class="bg-galery"></div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/pages/mainInfo.blade.php ENDPATH**/ ?>