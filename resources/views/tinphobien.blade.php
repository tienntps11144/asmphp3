<?php
  use App\Http\Controllers\TinController;
  $tinphobien = DB::table('tb_news')
  ->select('idTin', 'TieuDe', 'Ngay','urlHinh', 'HoTen', 'TenTLC', 'TomTat')

  ->orderby('SoLanXem','desc')

  ->join('tb_tlc', 'tb_news.idTLC', '=', 'tb_tlc.idTLC')

  ->join('tb_users', 'tb_news.idUser', '=', 'tb_users.idUser')

  ->where('tb_news.AnHien','=','1')
  
  ->offset(0)->limit(6)->get();
?>
<section class="section tab-post mb-16">
            <div class="title-wrap title-wrap--line">
              <h3 class="section-title">Tin Tức Phổ Biến</h3>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
              
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row card-row">
                 @foreach($tinphobien as $r)
                 <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder card__img-holder">
                        <a href="tin/{{$r->idTin}}}">
                          <div class="thumb-container thumb-70">
                            <img data-src="img/{{$r->urlHinh}}" src="img/{{$r->urlHinh}}" class="entry__img lazyloaded" alt="">
                          </div>
                        </a>
                        <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$r->TenTLC}}</a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="tin/{{$r->idTin}}}" class="text-limit-2">{{$r->TieuDe}}</a>
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
                          <p class="text-limit-2">{{$r->TomTat}}</p>
                        </div>
                      </div>
                    </article>
                  </div>
                 @endforeach
                </div>
              </div> <!-- end pane 1 -->
            </div> <!-- end tab content -->            
          </section>