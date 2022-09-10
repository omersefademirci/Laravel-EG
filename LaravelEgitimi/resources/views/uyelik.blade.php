<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyelik Form Sayfası</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $hatalar)
            <li>{{$hatalar}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('uyekayit')}}" method="post">
     <!--Token yapısı, Laravel ile otomatik token oluşturur -->
    @csrf
    <label for="">Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label for="">Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label for="">E-Mail</label><br>
    <input type="text" name="email"><br>
    <input type="submit" class="ilet" value="Gönder">
    </form>    


</body>
</html>