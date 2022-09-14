@extends('layouts.admin')
@section('content')

<div class="content ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Kategori Ekle</h4>
                                    <p class="category">Kategori Oluşturunuz</p>
                                </div>
                                <div class="card-content">
                                    <form enctype="multipart/form-data" action="{{route('admin.kategori.create.post')}}" method="POST">    
                                        {{csrf_field()}}                                   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kategori Adı</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>               
                                        </div>

                                        <button type="submit" class="btn btn-primary pull-right">Kategori Ekle</button>
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