@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Yaptığım Bağış Talepleri:</h4>
            @foreach ($helps as $item)
            <div class="row searched-item cart-list-diveder">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-images" src="{{ $item->gallery}}"> 
                        </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                          <h2>Talep: {{ $item->name }}</h2>
                          <h5>Açıklama: {{ $item->status}}</h5>
                          <h5>Adres: {{ $item->address}}</h5>
                        </div>
                </div>
            </div>
            @endforeach
          </div>
    </div>
</div>
@endsection