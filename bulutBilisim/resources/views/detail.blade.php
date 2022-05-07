@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $donates['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Geri Dön</a>
            <h2>{{ $donates['name'] }}</h2>
            <h3>Fiyat: {{ $donates['price']}} TRY</h3>
            <h4>Açıklama: {{ $donates['description'] }}</h4>
            <h4>Kategori: {{ $donates['category'] }}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="donates_id" value={{ $donates['id'] }}>
            <button class="btn btn-primary">Destek Ol</button>
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection