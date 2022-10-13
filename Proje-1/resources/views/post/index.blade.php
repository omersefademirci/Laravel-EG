@extends('index')
@section('content')
    <div class="container mb-5">
        <div class="row">
            
                <div class="col-md-12 mb-5">
                    <div style="max-height:280px;overflow:hidden" >
                        <img class="w-100" src="http://127.0.0.1:8000\storage\{{$data[0]['image']}}" alt="">
                    </div>
                </div>
                <div class="col-md-12 ">
                    <h3 style="" class="mb-2">
                        {!! $data[0]['title'] !!}
                    </h3>
                    <p>
                        {!! $data[0]['desc'] !!}
                    </p>
                </div>     
        </div> 
    </div>
@endsection