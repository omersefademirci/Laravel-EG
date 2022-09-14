@extends('layouts.admin')
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Yazarlar</h4>
                                    <p class="category">Burada yazarların listesini görebilirsiniz.</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>İsim</th>
                                            <th>Oluşturulma Tarihi</th>
                                            <th>Son Güncellenme</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key=>$value)
                                            <tr>
                                                <td>{{$value['name']}}</td>
                                                <td>{{$value['created_at']}}</td>
                                                <td>{{$value['updated_at']}}</td>
                                                <td>
                                                    <a style="font-weight:bold" href="{{route('admin.yazar.edit',['id'=>$value['id']])}}">
                                                        Düzenle
                                                    </a>
                                                    
                                                </td>
                                                <td>
                                                    <a style="font-weight:bold" href="{{route('admin.yazar.delete',['id'=>$value['id']])}}">
                                                        Sil 
                                                    </a>
                                                   
                                                </td>
                                                
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