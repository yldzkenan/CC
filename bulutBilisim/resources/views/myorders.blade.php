@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Yaptığım Bağışlar:</h4>
            @foreach ($orders as $item)
            <div class="row searched-item cart-list-diveder">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img class="trending-images" src="{{ $item->gallery}}"> 
                        </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                          <h2>Bağış: {{ $item->name }}</h2>
                          <h5>Bağış Durumu: {{ $item->status}}</h5>
                          <h5>Yardım Yapılan Merkez Adresi: {{ $item->address}}</h5>
                          <h5>Ödeme Durumu: {{ $item->payment_status}}</h5>
                          <h5>Ödeme Şekli: {{ $item->payment_method}}</h5>
                        </div>
                </div>
            </div>
            @endforeach
          </div>
    </div>
</div>
@endsection