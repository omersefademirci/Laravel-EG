@extends('index')
@section('content')
    <div class="row">

        @foreach($data as $value)
        <div class="col-md-3 mb-1">
            <a href="{{route('post.content')}}">
                <img src="{{asset('storage/posts/post3-cropped.jpg')}}" style="width:100%" alt="">
            </a>
            <div class="pt-1">
                <a href="#" style="text-decoration:none;color:blue"><h3>{{$value['name']}}</h3></a>
                <p>{{$value['desc']}}</p>
            </div>
        </div>     
        @endforeach
    </div>
@endsection