<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resim Form Sayfası</title>
</head>
<body>
    <form action="{{route('resim-yukle')}}" method="post" enctype="multipart/form-data">
     <!--Token yapısı, Laravel ile otomatik token oluşturur -->
    @csrf

    Resim : <input type="file" name="resim">
    <input type="submit" class="ilet" value="Gönder">
    </form>    


</body>
</html>