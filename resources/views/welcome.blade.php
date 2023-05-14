
<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
            @if(is_null(Auth::id()))
            <li><a href="{{route('login')}}" data-after="Contact">Đăng nhập</a></li>
            @endif
            @if(!is_null(Auth::id()))
            <li><a href="{{route('signOut')}}" data-after="Contact">Đăng xuất: {{Auth::id()}}</a></li>
            @endif
            <li>
              <a href="#" class="icon" data-after="About"><i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">

    <div class="hero container">
      <div>
        <h1>Xin chào, <span></span></h1>
        <h1>Chào mừng bạn đến với<span></span></h1>
        <h1>Readook <span></span></h1>
        <div class="newlatter">
            <form action="#">
                <input type="text" name="search" placeholder="Sách muốn đọc">
                <input type="submit" name="submit" value="Tìm kiếm">
            </form>
        </div>
        <!-- <a href="#projects" type="button" class="cta">Đọc ngay</a> -->
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">tất cả <span>S</span>ách</h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas
          magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias
          voluptatum explicabo!</p> -->
      </div>
      <div class="service-bottom">
      @foreach ($book as $book)
        <div class="service-item">
            <div class="icon"><img src="public/img/dacnhamtam.jpg" /></div>
            <h2><a href="{{route('detail',$book->id)}}" id="action_book">{{$book->book_name}}</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
              architecto placeat beatae tenetur officia quod</p>
          </div>
       @endforeach

       <!-- phan trang -->
      </div>
    </div>
  </section>
  <!-- End Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Sách <span>M</span>ới</h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas
          magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias
          voluptatum explicabo!</p> -->
      </div>
      <div class="service-bottom">
      @foreach ($new_book as $data)
        <div class="service-item">
            <div class="icon"><img src="public/img/dacnhamtam.jpg" /></div>
            <h2><a href="{{route('detail',$book->id)}}" id="action_book">{{$data->book_name}}</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
              architecto placeat beatae tenetur officia quod</p>
          </div>
          @endforeach
      </div>
    </div>
  </section>
  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Top <span>Đọc</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Đắc nhân tâm</h1>
            <h2><a href="" id="action_book">Đọc ngay</a></h2>
            <p id="demo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="public/img/dnt.jpg"alt="img">
          </div>
        </div>
        <div class="project-item">
            <div class="project-info">
              <h1>Đắc nhân tâm</h1>
              <h2>Coding is Love</h2>
              <p id="demo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                <a href="">Đọc ngay</a>
            </div>
            <div class="project-img">
              <img src="public/img/dnt.jpg"alt="img">
            </div>
          </div>  
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="public/img/dacnhamtam.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sách <span>Nổi</span>bật</h1>
        <h2>Đắc nhân tâm</h2>
        <p>Đắc nhân tâm là một quyển sách thuộc thể loại Sách tự lực
             - sách tự giúp bản thân. Bản tiếng Việt do Nguyễn Hiến
              Lê dịch và đưa vào tủ sách học làm người. Đắc nhân tâm
               bao gồm sáu phần, tương tự như sáu mảnh ghép của cuộc
                sống tạo nên một bức tranh đa sắc màu</p>
        <a href="#" class="cta">Đọc ngay</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Liên hệ <span>Qua</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Số điện thoại</h1>
            <h2>+84 989748659</h2>
            <h2>+84 989748659</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>21211TT2122@mail.tdc.edu.vn</h2>
            <h2>21211TT2122@mail.tdc.edu.vn</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Địa chỉ</h1>
            <h2>Tòa 15 len mắc tám mốt</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

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
  <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>