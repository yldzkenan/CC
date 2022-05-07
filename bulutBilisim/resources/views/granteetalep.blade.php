@extends('master')
@section("content")

    <br><br><br>
<div class="container costum-login">
    <div class="row">
        <div class="col-sm-20 col-sm-offset-20">
            <form action="/grantee/ekle/{{ Request::segment(3) }}" method="POST">
                @csrf
                    <input type="hidden" name="helps_id" class="form-control" id="exampleInputEmail1" value="{{ Request::segment(3) }}" required>
                <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama: </label>
                    <input type="text" name="status" class="form-control" id="exampleInputEmail1" value="" required>
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Adres: </label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="" required>
                  </div>
                
                <button type="submit" class="btn btn-default">Talep Et</button>
              </form>
        </div>
    </div>
</div>
@endsection