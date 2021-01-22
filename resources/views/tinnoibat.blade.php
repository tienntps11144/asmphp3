<?php
  use App\Http\Controllers\TinController;

  $tinnoibat = DB::table('tb_news')
  ->select('idTin', 'TieuDe', 'Ngay','urlHinh', 'HoTen', 'TenTLC')

  ->orderby('Ngay','desc')

  ->join('tb_tlc', 'tb_news.idTLC', '=', 'tb_tlc.idTLC')

  ->join('tb_users', 'tb_news.idUser', '=', 'tb_users.idUser')

  ->where('tb_news.AnHien','=','1')
  
  ->Where("NoiBat","=","1")

  ->offset(0)->limit(3)->get();

  $tinnoibat2 = DB::table('tb_news')
  ->select('idTin', 'TieuDe', 'Ngay','urlHinh', 'HoTen', 'TenTLC')

  ->orderby('Ngay','desc')

  ->join('tb_tlc', 'tb_news.idTLC', '=', 'tb_tlc.idTLC')

  ->join('tb_users', 'tb_news.idUser', '=', 'tb_users.idUser')

  ->where('tb_news.AnHien','=','1')
  
  ->Where("NoiBat","=","1")

  ->offset(3)->limit(1)->get();
?>
<section class="featured-posts-grid">
      <div class="container">
        <div class="row row-8">

          <div class="col-lg-6">

            @foreach($tinnoibat as $r)
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
              <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url('img/{{$r->urlHinh}}')">
                  <a href="tin/{{$r->idTin}}}" class="thumb-url"></a>
                  <img src="img/{{$r->urlHinh}}" alt="" class="entry__img d-none">
                  <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$r->TenTLC}}</a>
                </div>

                <div class="entry__body post-list__body card__body">  
                  <h2 class="entry__title">
                    <a href="tin/{{$r->idTin}}}">{{$r->TieuDe}}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>Đăng bởi</span>
                      <a href="#">{{$r->HoTen}}</a>
                    </li>
                    <li class="entry__meta-date">
                      {{$r->Ngay}}
                    </li>              
                  </ul>
                </div>
              </article>
            </div> 
            @endforeach


          </div> <!-- end col -->

          <div class="col-lg-6">

            <!-- Large post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
              <article class="entry card featured-posts-grid__entry">
                <div class="entry__img-holder card__img-holder">
                  <a href="single-post.html">
                    <img src="img/{{$tinnoibat2[0]->urlHinh}}" alt="" class="entry__img">
                  </a>
                  <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{$tinnoibat2[0]->TenTLC}}</a>
                </div>

                <div class="entry__body card__body">   
                  <h2 class="entry__title">
                    <a href="single-post.html">{{$tinnoibat2[0]->TieuDe}}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>Đăng bởi</span>
                      <a href="#">{{$tinnoibat2[0]->HoTen}}</a>
                    </li>
                    <li class="entry__meta-date">
                    {{$tinnoibat2[0]->Ngay}}
                    </li>              
                  </ul>
                </div>
              </article>
            </div> <!-- end large post -->
          </div>          

        </div>
      </div>
    </section>