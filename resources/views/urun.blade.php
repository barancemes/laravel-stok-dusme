<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ürünler</title>
</head>
<body>

        <div class="container mt-5">
            <div class="row">
                @foreach($urunler as $u)
                    @if($u->stok > 0)
                <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem;">
{{--                            <img src="{{$u->resim}}" class="card-img-top">--}}
                            <div class="card-body">
                                <h5 class="card-title" style="color: salmon; text-align: center">{{$u->adi}}</h5>
                            </div>
                            <ul class="list-group list-group-flush" style="text-align: center">
                                <li class="list-group-item">Fiyatı: {{$u->fiyat}} ₺</li>
                                <li class="list-group-item">Stok: {{$u->stok}} Adet</li>
                            </ul>
                            <div class="card-body" style="text-align: center">
                                <a href="{{route('urun-ekle',$u->id)}}" class="card-link btn btn-success">Markete Ekle</a>
                            </div>
                        <hr>
                        <br>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
