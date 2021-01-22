<?php
  use App\Http\Controllers\TinController;

  $TenTL= DB::table('tb_tl')->where("idTL",$idTL)->value("TenTL");
  $tintheoloai = DB::table('tb_news')
  ->select('idTin', 'TieuDe', 'Ngay','urlHinh', 'HoTen', 'TenTLC', 'TomTat')

  ->orderby('Ngay','desc')

  ->join('tb_tlc', 'tb_news.idTLC', '=', 'tb_tlc.idTLC')

  ->join('tb_users', 'tb_news.idUser', '=', 'tb_users.idUser')
  
  ->join('tb_tl', 'tb_tlc.idTL', '=', 'tb_tl.idTL')
  
  ->where('tb_tl.idTL', '=', "$idTL")
  
  ->where('tb_news.AnHien','=','1')
  
  ->Where("NoiBat","=","1")

  ->offset(0)->limit(3)->get();

?>
<div class="col-lg-8 blog__content mb-72">

<div class="mb-48">              <!-- Worldwide News -->
    <section class="section">
        <div class="title-wrap title-wrap--line">
        <h3 class="section-title">{{$TenTL}}</h3>
        <a href="#" class="all-posts-url">Xem Tất Cả</a>
        </div>

        @foreach($tintheoloai as $r)
        <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/{{$r->urlHinh}})">
                <a href="tin/{{$r->idTin}}}" class="thumb-url"></a>
                <img src="img/{{$r->urlHinh}}" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">{{$r->TenTLC}}</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="tin/{{$r->idTin}}}">{{$r->TieuDe}}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>Đăng Bởi</span>
                    <a href="#">{{$r->HoTen}}</a>
                    </li>
                    <li class="entry__meta-date">
                    {{$r->Ngay}}
                    </li>
                </ul>
                </div>        
                <div class="entry__excerpt">
                <p class="text-limit-4">{{$r->TomTat}}</p>
                </div>
            </div>
        </article>
        @endforeach
    </section> <!-- end worldwide news -->

    <!-- Pagination -->
    <nav class="pagination">
        <span class="pagination__page pagination__page--current">1</span>
        <a href="#" class="pagination__page">2</a>
        <a href="#" class="pagination__page">3</a>
        <a href="#" class="pagination__page">4</a>
        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
    </nav>
</div>
</div> <!-- end posts -->
