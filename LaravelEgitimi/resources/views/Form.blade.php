<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornek Form Sayfası</title>
</head>
<body>
    <form action="{{route('formsonuc')}}" method="post">
     <!--Token yapısı, Laravel ile otomatik token oluşturur -->
    @csrf

    <textarea name="content" id="text" cols="30" rows="10"></textarea><br>
    <input type="submit" class="ilet" value="Gönder">
    </form>    


</body>
</html>