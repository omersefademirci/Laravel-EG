

{!! Form::open(['url'=>'kitap/ekle','method'=>'GET'])!!}
<!--$_COOKIE


-->
{!! Form::label('name','Kitap İsmi') !!}
{!! Form::text('name') !!}
<br><br>
{!! Form::select('size',['L'=>'Large','S'=>'Small'],'null',['placeholder'=>'Size seçiniz']) !!}
<br><br>
{!! Form::select('animal',
    [
        'Cats'=>['leapard'=>'Leopar'],
        'Dogs'=>['spaniel'=>'Spaniel'],
    ]); 
!!}
<br><br>
{!! Form::selectRange('number',10,20) !!}
<br><br>
{!! Form::selectMonth('aylar')!!}
<br><br>
{!! Form::submit('Kaydet') !!}
{!! Form::close() !!}




