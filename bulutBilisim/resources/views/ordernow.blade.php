@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Bağış Toplam Tutarı:</td>
                <td>{{ $total }} TRY</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <input list="addresses" name="address" id="address" type="select" placeholder="Bağış Yapılacak Merkez:" required>
                  <datalist id="addresses">
                    <option value="İstanbul">
                    <option value="Ankara">
                    <option value="İzmir">
                    <option value="Antalya">
                    <option value="Adana">
                    <option value="Rize">
                    <option value="Artvin">
                    <option value="Elazığ">
                    <option value="Hatay">
                  </datalist>
                </div>
                <div class="form-group">
                  <p><label>Bağışın Tamamlanması İçin Yöntemi Seçiniz:</label></p>
                  <p><input type="radio" value="Peşin" name="payment"><span>Online Ödeme</span></p>
                  <p><input type="radio" value="Peşin" name="payment"><span>Telefonla Ödeme</span></p>
                  <p><input type="radio" value="Peşin" name="payment"><span>Yardım Merkezinde Elden Ödeme</span></p>
                  
                </div>
                <button type="submit" class="btn btn-success">Bağışımı Onaylalıyorum</button>
              </form>
          </div>
    </div>
</div>
@endsection