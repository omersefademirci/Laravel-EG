<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</form>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('post.store')}}" method="POST">
        @csrf

        <input type="text" name="author[name]"><br><br>
        <input type="text" name="bail">

        <!--Hata verirse classını değiştirebilirz (FlashData)-->
        <input type="text" name="hatali" class="@error('hatali') is-invalid @enderror">
        
        <!--Mesajı altta gösterme-->
        @error('hatali')
        <div class="alert alert-danger">{{$message}}</div>     
        @enderror
        
        
        <button>Ekle</button>
        <!--{{dd($errors)}}-->
       

      

</body>
</html>