@extends('index')
@section('content')
    <div class="row">
        @foreach($data as $value)
        <div class="col-md-3 mb-1">
            <a href="{{route('post.content',['id'=>$value['id']])}}">
                <img src="http://127.0.0.1:8000\storage\{{$value['image']}}" style="width:100%" alt="">
            </a>
            <div class="pt-1 row">
                <a  href="{{route('post.content',['id'=>$value['id']])}}" style="text-decoration:none;color:blue"><h3>{{$value['title']}}</h3></a>
               <div style="word-break:break-all">{{ substr($value['desc'], 0, 20) }}
                    <a href="{{route('post.content',['id'=>$value['id']])}}">...</a>
               </div>
            </div>
        </div>     
        @endforeach
    </div>
@endsection