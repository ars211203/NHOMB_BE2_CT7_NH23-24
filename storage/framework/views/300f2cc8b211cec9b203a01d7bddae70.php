<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Readook </title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>R</span>ead <span>D</span>ook</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a data-after="Home">Trang chủ</a></li>
            <li><a href="#" data-after="Service">Danh mục</a>
            <!-- <ul>
                <li>Danh mục 1</li>
                <li>Danh mục 2</li>
            </ul> -->
            </li>
            <li><a href="#" data-after="Projects">Sách nổi bật</a></li>
            <li><a href="#" data-after="About">Giới thiệu</a></li>
            <?php if(is_null(Auth::id())): ?>
            <li><a href="<?php echo e(route('login')); ?>" data-after="Contact">Đăng nhập</a></li>
            <?php endif; ?>
            <?php if(!is_null(Auth::id())): ?>
            <li><a href="<?php echo e(route('signOut')); ?>" data-after="Contact">Đăng xuất: <?php echo e(Auth::id()); ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <div class="wrapcontent">
  <h1>Trang chi tiet sach</h1>
      <?php echo $__env->yieldContent('content_user'); ?>
    </div>

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>R</span>ead <span>D</span>ook</h1>
      </div>
      <h2>Đọc sách đủ đầy sau khi ngủ dậy để biết thêm nhiều điều bổ ích các bạn nhé!</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>  
      </div>
      <!-- <p>Copyright © 2020 Arfan. All rights reserved</p> -->
    </div>
  </section>
  <!-- End Footer -->
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH G:\Xampp\htdocs\DoAnBe_2\resources\views/layout_user.blade.php ENDPATH**/ ?>