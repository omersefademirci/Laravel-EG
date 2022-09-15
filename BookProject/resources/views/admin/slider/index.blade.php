@extends('layouts.admin')
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-primary" href="{{route('admin.slider.create')}}">Ekle</a>
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Slider Listesi</h4>
                                    <p class="category">Burada Slider ların listesini bulabilir siniz</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Önizleme</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key=>$value)
                                            <tr>
                                                <td><img src="{{asset($value['image'])}}" style="width:120px;height:120px" alt=""></td>
                                                <td><a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                                <td><a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</a></td>
                                                
                                            </tr>
                                           @endforeach
                                        </tbody>     
                                    </table>
                                   
                                 
                                    
                                </div>
                                <div class="row ">
                                     @if(session("status"))
                                        <div class="alert alert-primary col-md-4 " role="alert">
                                            {{session("status")}}
                                        </div>
                                      @endif
                                    {{$data->links()}}
                                </div>
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
@endsection