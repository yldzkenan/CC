@extends('master')
<style>

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
    
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
      font-family: 'Josefin Sans', sans-serif;
    }
    
    body{
       background-color: #f3f5f9;
    }
    
    .wrapper{
      display: flex;
      position: relative;
    }
    
    .wrapper .sidebar{
      width: 200px;
      height: 100%;
      background: #4b4276;
      padding: 30px 0px;
      position: fixed;
    }
    
    .wrapper .sidebar h2{
      color: #fff;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 30px;
    }
    
    .wrapper .sidebar ul li{
      padding: 15px;
      border-bottom: 1px solid #bdb8d7;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      border-top: 1px solid rgba(255,255,255,0.05);
    }    
    
    .wrapper .sidebar ul li a{
      color: #bdb8d7;
      display: block;
    }
    
    .wrapper .sidebar ul li a .fas{
      width: 25px;
    }
    
    .wrapper .sidebar ul li:hover{
      background-color: #594f8d;
    }
        
    .wrapper .sidebar ul li:hover a{
      color: #fff;
    }
     
    .wrapper .sidebar .social_media{
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
    }
    
    .wrapper .sidebar .social_media a{
      display: block;
      width: 40px;
      background: #594f8d;
      height: 40px;
      line-height: 45px;
      text-align: center;
      margin: 0 5px;
      color: #bdb8d7;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }
    
    .wrapper .main_content{
      width: 100%;
      margin-left: 200px;
    }
    
    .wrapper .main_content .header{
      padding: 20px;
      background: #fff;
      color: #717171;
      border-bottom: 1px solid #e0e4e8;
    }
    
    .wrapper .main_content .info{
      margin: 20px;
      color: #717171;
      line-height: 25px;
    }
    
    .wrapper .main_content .info div{
      margin-bottom: 20px;
    }
    </style>
    <style>
      input[type=text], select,input[type=number],input[type=select],input[type=email],input[type=password]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      
      input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width:100%;
    }          
      
      </style>
      <style>
        main {display: flex;}
    main > * {border: 1px solid;}
    table {border-collapse: collapse; font-family: helvetica}
    td, th {border:  1px solid;
          padding: 10px;
          min-width: 100px;
          background: white;
          box-sizing: border-box;
          text-align: center;
    }
    .table-container {
      position: relative;
      max-height:  100px;
      width: 200px;
      overflow: scroll;
    }
    
    thead th {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 2;
      background: hsl(20, 50%, 70%);
    }
    
    thead th:first-child {
      left: 0;
      z-index: 3;
    }
    
    tfoot {
      position: -webkit-sticky;
      bottom: 0;
      z-index: 2;
    }
    
    tfoot td {
      position: sticky;
      bottom: 0;
      z-index: 2;
      background: hsl(20, 50%, 70%);
    }
    
    tfoot td:first-child {
      z-index: 3;
    }
    
    tbody {
      overflow: scroll;
      height: 100px;
    }
    
    /* MAKE LEFT COLUMN FIXEZ */
    tr > :first-child {
      position: -webkit-sticky;
      position: sticky; 
      background: hsl(180, 50%, 70%);
      left: 0; 
    }
    /* don't do this */
    tr > :first-child {
      box-shadow: inset 0px 1px black;
    }
        </style>
@section("content")
        <div class="info">
          <div>
            <table>
              <thead>
                <tr>
                  <th>İstekte Bulunabileceğiniz Yardımlar</th>
                  <th>Kategori</th>
                  <th>Açıklama</th>
                  <th>Resim</th>
                  <th>Talep Et</th>

                </tr>
              </thead>
              <?php foreach ($tum_urunler as $row) {?>
              <tbody>
                <tr>
                  <td style="color: red">{{ $row->name }}</td>
                  <td>{{ $row->category }}</td>
                  <td>{{ $row->description }}</td>
                  <td><img class="slider-img" src="{{ $row->gallery }}" width="150" height="150"></td>
                  <td><a href="/grantee/ekle/{{ $row->id }}">Talep Et</a></td>

                </tr>
              </tbody>
              <?php } ?>
            </table>
          
        </div>
      </div>




<!--
      <div class="info">
        <div>
          <table>
            <thead>
              <tr>
                <th>İstekte Bulunabileceğiniz Yardımlar</th>
                <th>Kategori</th>

              </tr>
            </thead>
            <?php foreach ($tum_bagislar as $row) {?>
            <tbody>
              <tr>
                <td style="color: red">{{ $row->status }}</td>
                <td>{{ $row->address }}</td>

              </tr>
            </tbody>
            <?php } ?>
          </table>
        
      </div>
    </div>
      <h1>Başarılı</h1>-->
      <br>
      <p style="text-align: center;"><a style="color:red" href="/granteelogout">Çıkış</a></p>

@endsection

