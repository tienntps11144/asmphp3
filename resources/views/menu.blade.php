<?php
$cactheloai = DB::table('tb_tl')->select('idTL', 'TenTL')
->orderby('ThuTu','asc')
->where('AnHien','=','1')
->limit(5)->get();

?>
<nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">
                @foreach($cactheloai as $tl)
                    <li class="nav__dropdown">
                    <a href="index.html">{{$tl->TenTL}}</a>
                    <ul class="nav__dropdown-menu">
                        <?php
                            $theloaicon= DB::table('tb_tlc')->select('idTLC','TenTLC')
                            ->orderby('ThuTu','asc')
                            ->where('idTL','=',$tl->idTL)->where('AnHien','=','1')->get();
                        ?>
                        @foreach($theloaicon as $tlc)
                            <li><a href="index.html">{{$tlc->TenTLC}}</a></li>
                        @endforeach
                    </ul>
                    </li>
                @endforeach
              </ul> <!-- end menu -->
            </nav>