<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornek Form Sayfası</title>
</head>
<body>
    <form action="{{route('iletisim-sonuc')}}" method="post">
     <!--Token yapısı, Laravel ile otomatik token oluşturur -->
    @csrf
    <label for="">Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label for="">Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label for="">E-Mail</label><br>
    <input type="text" name="email"><br>
    <label for="">Mesaj</label><br>
    <textarea name="metin" id="text" cols="30" rows="10"></textarea><br>
    <input type="submit" class="ilet" value="Gönder">
    </form>    


</body>
</html>