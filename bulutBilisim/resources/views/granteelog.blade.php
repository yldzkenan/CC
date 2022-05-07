@extends('master')
@section("content")
<div class="container costum-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="granteelog" method="POST">
                <div class="form-group">
                  @csrf
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Şifre</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre" required>
                </div>
                <button type="submit" class="btn btn-default">Giriş</button>
              </form>
              <br>
              <a href="/granteelogreg">Bağış Talep Etmek İçin Tıklayınız!</a>
        </div>
    </div>
</div>
@endsection