<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resim Upload Sayfası</title>
</head>
<body>
    <form action="{{route('yukle')}}" method="post" enctype="multipart/form-data">
     <!--Token yapısı, Laravel ile otomatik token oluşturur -->
     <!--enctype özelliği upload yaparken olması gerekiyor -->
    @csrf
    <label for="">Resim seçiniz</label><br><br>
    <input type="file" name="resim"><br><br><br>
    <input type="submit" name="ilet" value="Gönder">
    </form>    


</body>
</html>