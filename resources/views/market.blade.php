<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Market</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4" style="text-align: right">
            <a style="text-decoration: none" class="btn btn-warning" href="{{route('urun')}}">Geri Dön</a>
        </div>
        <div class="col-md-4" style="text-align: center">
            <h3>-SENİN MARKETİN-</h3>
        </div>
        <div class="col-md-4" style="position: relative; right: 65px;">

        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col" class="text-center">Ürün Adı</th>
                    <th scope="col" class="text-center">Adet</th>
                    <th scope="col" class="text-center">Fiyat</th>
                    <th scope="col" class="text-center" style="width: 140px">Çıkar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($marketim as $market)
                    <tr>
                        <td>{{$market->urunew->adi}}</td>
                        <td class="text-center">{{$market->adet}}</td>
                        <td class="text-center">
                            @php
                                $araToplam += $market->urunew->fiyat*$market->adet
                            @endphp
                            {{number_format($market->urunew->fiyat*$market->adet)}}₺
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger" style="text-decoration: none"
                               href="{{route('marketsil',$market->id)}}">Çıkar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" style="position: relative; right: -330px">
            <span><b>Genel Toplam: {{$araToplam}} ₺</b></span><br>
        </div>
        <div style="position: relative; right: 31px; top: -15px" class="col-md-4">
            <a href="{{route('bosalt')}}">
                <button style="" class="btn btn-warning">Sepeti Boşalt</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" style="position: relative; right: -330px">
            <a href="{{route('urun')}}">
                <button class="btn btn-success">Onay</button>
            </a>
        </div>
        <div style="position: relative; right: 31px; top: -15px" class="col-md-4">

        </div>
    </div>
</div>










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
