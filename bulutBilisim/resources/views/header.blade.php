<?php
//use App\Http\Controllers\DonateController;
//$total=0;
//if(Session::has('user'))
//{
 // $total=DonateController::cartItem();
//}

//Sepetim({{ $total }})alta ekle
?>
<nav class="navbar navbar-default" style="background: linear-gradient(to right, rgb(238, 255, 0), rgb(125, 138, 4))">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Bee Yardımlaşma</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Anasayfa</a></li>
        <li class=""><a href="/">Hizmetlerimiz</a></li>
        @if(Session::has('user'))
        <li class=""><a href="/myorders">Yapılan Bağışlar</a></li>
        @else
        @endif
        @if(Session::has('grantee'))
        <li class=""><a href="/myhelps">Önceki Taleplerim</a></li>
        @else
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li><a href="/cartlist">Bağışları Onaylama</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/kullanicisayfasi">Profilim</a></li>
            <li><a href="/logout">Çıkış</a></li>
          </ul>
        </li>
        @endif
        @if(Session::has('grantee'))
        <li><a href="/grantee2">Yardım Talep</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('grantee')['name'] }}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/kullanicisayfasi2">Profilim</a></li>
            <li><a href="/granteelogout">Çıkış</a></li>
          </ul>
        </li>
        @endif
        @if(!(Session::has('grantee'))&&!(Session::has('user')))
        <li><a style="color: black" href="/login">Bağışçı</a></li>
        <li><a style="color: black" href="/granteelog">Bağış Talep</a></li>
        @endif
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
