@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Onay Bekleyen Bağışlar:</h4>
            <a class="btn btn-success" href="ordernow">Bağışı Tamamla</a><br><br>
            @foreach ($donates as $item)
            <div class="row searched-item cart-list-diveder">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-images" src="{{ $item->gallery}}"> 
                        </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                          <h2>{{ $item->name }}</h2>
                          <h5>{{ $item->description}}</h5>
                        </div>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Bağışı Kaldır</a>
                </div>
            </div>
            @endforeach
          </div>
          <!-- ??????????????????????????????????????????????????????????????????-->
          <!-- ??????????????????????????????????????????????????????????????????<a class="btn btn-success" href="ordernow">Hemen Sipariş Ver</a> <br><br>-->
    </div>
</div>
@endsection