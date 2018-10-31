@include('tamplete.partains.header')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">تواصل معانا </h1>
        <div class="bread-crumb right-side">
          <ul>
            <li><a href="{{route('home')}}">الرئيسية</a>/</li>
            <li><span>Contact</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
<section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="map"> 
       
          <img src="{!!asset('assets/images/cover-2.png')!!}" alt="rovanna"  hieght="250px" width="1170px">
        
        </div>
      </div>
    </div>
  </section>

<section class="pt-70 client-main align-center">
    <div class="container">
      <div class="contact-info">
        <div class="row m-0">
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-phone-icon"></div>
              <span><b>ت</b></span>
              <p> 01204 002 882 / 0123 456 788</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-mail-icon"></div>
              <span><b>البريد الالكتروني</b></span>
              <p>info@rovanna.com </p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-open-icon"></div>
              <span><b>مفتوح</b></span>
              <p> Sun - Thu: 9:00 – 17:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ptb-70" style="    direction: rtl;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="heading-part mb-30">
            <h2 class="main_title  heading"><span>لإستفسارتكم !</span></h2>
          </div>
        </div>
      </div>
      <div class="main-form">
        <form action="http://aaryaweb.info/html/rovanna/stx001/contact-form-handler.php" method="POST" name="contactform">
          <div class="row">
            <div class="col-md-4 mb-30">
              <input type="text" required="" placeholder="اسمك" name="name">
            </div>
            <div class="col-md-4 mb-30">
              <input type="email" required="" placeholder="بريدك الالكتروني" name="email">
            </div>
            <div class="col-md-4 mb-30">
              <input type="text" required="" placeholder="بخصوص" name="website">
            </div>
            <div class="col-12 mb-30">
              <textarea required="" placeholder="رسالتك" rows="3" cols="30" name="message"></textarea>
            </div>
            <div class="col-12">
              <div class="align-center">
                <button type="submit" name="submit" class="btn btn-color">ارسال</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  
@include('tamplete.partains.footer')