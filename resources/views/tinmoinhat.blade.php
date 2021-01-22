<?php
  use App\Http\Controllers\TinController;

  $tinmoinhat = DB::table('tb_news')
  ->select('idTin', 'TieuDe', 'Ngay','urlHinh', 'HoTen', 'TenTLC')

  ->orderby('Ngay','desc')

  ->join('tb_tlc', 'tb_news.idTLC', '=', 'tb_tlc.idTLC')

  ->join('tb_users', 'tb_news.idUser', '=', 'tb_users.idUser')

  ->where('tb_news.AnHien','=','1')
  
  ->offset(0)->limit(5)->get();
  ?>
          <!-- Widget Popular Posts -->
          <aside class="widget widget-popular-posts">
            <h4 class="widget-title">Tin Mới Nhất</h4>
            <ul class="post-list-small">
              @foreach($tinmoinhat as $r)
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-100">
                      <a href="tin/{{$r->idTin}}}">
                        <img data-src="img/{{$r->urlHinh}}" src="img/{{$r->urlHinh}}" alt="" class="post-list-small__img--rounded lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="tin/{{$r->idTin}}}">{{$r->TieuDe}}</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>đăng bởi</span>
                        <a href="#">{{$r->HoTen}}</a>
                      </li>
                      <li class="entry__meta-date">
                            {{$r->Ngay}}
                    </li>
                    </ul>
                  </div>                  
                </article>
              </li>
              @endforeach
            </ul>           
          </aside> <!-- end widget popular posts -->