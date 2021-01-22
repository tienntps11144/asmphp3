@extends("layout")
<!--<div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.html" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="index.html" class="breadcrumbs__url">News</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
          World
        </li>
      </ul>
    </div>-->
@section("noidungchinh")
          <div class="content-box mb-72">           

            <!-- standard post -->
            <article class="entry mb-0">
              
              <div class="single-post__entry-header entry__header">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{$tin->TenTLC}}</a>
                <h1 class="single-post__entry-title">
                  {{$tin->TieuDe}}
                </h1>

                <div class="entry__meta-holder">
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>Đăng Bởi</span>
                      <a href="#">{{$tin->HoTen}}</a>
                    </li>
                    <li class="entry__meta-date">
                    {{$tin->Ngay}}
                    </li>
                  </ul>

                  <ul class="entry__meta">
                    <li class="entry__meta-views">
                      <i class="ui-eye"></i>
                      <span>{{$tin->SoLanXem}}</span>
                    </li>
                    <li class="entry__meta-comments">
                      <a href="#">
                        <i class="ui-chat-empty"></i>{{$totalyk}}
                      </a>
                    </li>
                  </ul>
                </div>
              </div> <!-- end entry header -->

              <div class="entry__img-holder">
                <img src="img/{{$tin->urlHinh}}" alt="" style="height:400px;object-fit: cover;" class="entry__img">
              </div>

              <div class="entry__article-wrap">

                <!-- Share -->
                <div class="entry__share" style="position: relative;">
                  <div class="sticky-col" style="">
                    <div class="socials socials--rounded socials--large">
                      <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                      </a>
                      <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                      </a>
                      <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                      </a>
                      <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                        <i class="ui-pinterest"></i>
                      </a>
                    </div>
                  </div>                  
                </div> <!-- share -->
                <div class="entry__article" style="white-space: break-spaces;">
                  {{$tin->NoiDung}}
                </div>
               
              </div> <!-- end entry article wrap -->
              

              <!-- Newsletter Wide -->
              <div class="newsletter-wide">
                <div class="widget widget_mc4wp_form_widget">
                  <div class="newsletter-wide__container">
                    <div class="newsletter-wide__text-holder">
                      <p class="newsletter-wide__text">
                        <i class="ui-email newsletter__icon"></i>
                        Đăng ký nhận tin tức hằng ngày
                      </p>
                    </div>
                    <div class="newsletter-wide__form">
                      <form class="mc4wp-form" method="post">
                        <div class="mc4wp-form-fields">
                          <div class="form-group">
                            <input type="email" name="EMAIL" placeholder="Địa chỉ email của bạn" required="">
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-color" value="Đăng ký">
                          </div>
                        </div>
                      </form>
                    </div> 
                  </div>         
                </div>
              </div> <!-- end newsletter wide -->

              <!-- Prev / Next Post -->


       

                  

            </article> <!-- end standard post -->

            <!-- Comments -->
            <div class="entry-comments">
              <div class="title-wrap title-wrap--line">
                <h3 class="section-title">{{count($ykien)}} bình luận</h3>
              </div>
              <ul class="comment-list">
                  @foreach($ykien as $r)
                  <li class="comment">  
                  <div class="comment-body">
                    <div class="comment-avatar">
                      <img alt=""  onerror="this.src='img/avatar/avatar.jpg'" src="img/avatar/{{$r->Avatar}}" width="50" height="50">
                    </div>
                    <div class="comment-text">
                      <h6 class="comment-author">{{$r->HoTen}}</h6>
                      <div class="comment-metadata">
                        <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                      </div>                      
                      <p>{{$r->NoiDung}}</p>
                      <a href="#" class="comment-reply">Trả lời</a>
                    </div>
                  </div>
                </li> 
                  @endforeach
              </ul>         
            </div> <!-- end comments -->

            <!-- Comment Form -->
            <div id="respond" class="comment-respond">
              <div class="title-wrap">
                <h5 class="comment-respond__title section-title">Viết bình luận</h5>
              </div>
              <form id="form" class="comment-form" method="post" action="#">
                <p class="comment-form-comment">
                  <label for="comment">Nội dung</label>
                  <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                </p>

                <div class="row row-20">
                  <div class="col-lg-4">
                    <label for="name">Tên: *</label>
                    <input name="name" id="name" type="text">
                  </div>
                  <div class="col-lg-4">
                    <label for="comment">Email: *</label>
                    <input name="email" id="email" type="email">
                  </div>
                  <div class="col-lg-4">
                    <label for="comment">Website:</label>
                    <input name="website" id="website" type="text">
                  </div>
                </div>

                <p class="comment-form-submit">
                  <input type="submit" class="btn btn-lg btn-color btn-button" value="Gửi bình luận" id="submit-message">
                </p>
                
              </form>
            </div> <!-- end comment form -->

          </div> <!-- end content box -->
@endsection