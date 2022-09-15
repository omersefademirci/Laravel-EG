@extends('layouts.admin')
@section('content')

<div class="content ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Kitap Ekle</h4>
                                    <p class="category">Kitap Oluşturunuz</p>
                                </div>
                                <div class="card-content">
                                    <form enctype="multipart/form-data" action="{{route('admin.kitap.create.post')}}" method="POST">    
                                        {{csrf_field()}}                                   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kitap Adı</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>               
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <p class="category">Kitap Görseli Seçiniz</p>  
                                                <div class="form-group label-floating">
                                                  
                                                    <input type="file" name="image" class="form-control" style="opacity:1;position:inherit;display:inline">
                                                </div>
                                            </div>               
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Kitap Fiyatı</label>
                                                        <input type="text" name="fiyat" class="form-control">
                                                    </div>
                                            </div>    
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <p class="category">Kategori Seçiniz</p>
                                                    <select name="kategoriid" id="" class="form-control">
                                                        @foreach($kategori as $key=>$value)
                                                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>               
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <p class="category">Yazar Seçiniz</p>
                                                    <select name="yazarid" id="" class="form-control">
                                                        @foreach($yazar as $key=>$value)
                                                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>               
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <p class="category">Yayın Evi Seçiniz</p>
                                                    <select name="yayineviid" id="" class="form-control">
                                                        @foreach($yayinevi as $key=>$value)
                                                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>               
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Kitap Açıklama</label>
                                                        <textarea name="aciklama" id="" cols="30" rows="10" class="form-control"></textarea>
                                                        
                                                    </div>
                                            </div>    
                                        </div>
                                   
                                        <button type="submit" class="btn btn-primary pull-right">Kitap Ekle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                            @if(session("status"))
                                <div class="alert alert-primary" role="alert">
                                    {{session("status")}}
                                </div>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection