<header class="header">
  <div class="header-container">

    <a href="/" class="logo">ColorON</a>
    
    <div class="burger-menu">
      <a href="" class="burger-menu_button">
        <spun class="burger-menu_lines"></spun>
      </a>
      <nav class="burger-menu_nav">
        <a href="/mainInfo" class="burger-menu_link">Основная информация</a>
        <a href="/contact" class="burger-menu_link">Контакты</a>
        <a href="/price" class="burger-menu_link">Цены</a>
        <a href="/masters" class="burger-menu_link">Мастера</a>
        <?php if(auth()->guard()->guest()): ?>
          <a class="burger-menu_link" href="/login">Войти</a>
          <a class="burger-menu_link" href="/reg">Зарегестрироваться</a>
          <?php else: ?>
          <a class="burger-menu_link" id="btnProfile"><label class="side-button-1" for="side-checkbox">Профиль</label></a>
          <input type="checkbox" id="side-checkbox1" />
          <div class="side-panel">
            <label class="side-button-2" for="side-checkbox1" id="sidebtn">+</label>
            <div class="side-title">ColorON</div>
            <ul class="menu">
              <p><?php echo e(Auth::user()->name); ?></p>
              <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
              <a href="/main"><li>Панель администратора</li></a>
              <?php endif; ?>
              <?php if(auth()->check() && auth()->user()->hasRole('master')): ?>
              <a href="/entriesMaster"><li>Записи клиентов</li></a>
              <?php endif; ?>
              <a href="/entries"><li>Мои записи</li></a>
              <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="submit" value="Выйти">
              </form>
            </ul>
          </div>
            
        <?php endif; ?>
      </nav>
      <div class="burger-menu_overlay"></div>
    </div>

    <nav class="nav-menu">
      <ul class="topmenu">
        <div class="part-header">
          <li class="li-h"><a href="#">О нас<i class="fa fa-angle-down"></i></a>
            <ul class="submenu">
              <li><a href="/mainInfo">Основная информация</a></li>
              <li><a href="/contact">Контакты</a></li>
            </ul>
          </li>
        </div>
        
        <div class="part-header"><li><a href="/price">Цены</a></li></div>
        <div class="part-header"><li><a href="/masters">Мастера</a></li></div>

        <?php if(auth()->guard()->guest()): ?>
          <div class="part-header"><li><a href="/login">Войти</a></li></div>
          <div class="part-header"><li><a href="/reg">Зарегестрироваться</a></li></div>
          <?php else: ?>
          <div class="part-header"><label class="side-button-1" for="side-checkbox"><li><a id="btnProfile">Профиль</a></li></label></div>
          </ul></nav></div>
          <input type="checkbox" id="side-checkbox" />
          <div class="side-panel">
            <label class="side-button-2" for="side-checkbox" id="sidebtn">+</label>
            <div class="side-title">ColorON</div>
            <ul class="menu">
              <p><?php echo e(Auth::user()->name); ?></p>
              <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
              <a href="/main"><li>Панель администратора</li></a>
              <?php endif; ?>
              <?php if(auth()->check() && auth()->user()->hasRole('master')): ?>
              <a href="/entriesMaster"><li>Записи клиентов</li></a>
              <?php endif; ?>
              <a href="/entries"><li>Мои записи</li></a>
              <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="submit" value="Выйти">
              </form>
            </ul>
          </div>
            
        <?php endif; ?>

      </ul>
      
    </nav>

  </div>

  
    
</div>


</header><?php /**PATH C:\OpenServer\domains\ColorOnSalon\resources\views/includes/header.blade.php ENDPATH**/ ?>