@extends('layouts.admin')
@section('content')

<div class="content ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Yazar Ekle</h4>
                                    <p class="category">Yazar Oluşturunuz</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.yazar.create.post')}}" method="POST" enctype="multipart/form-data">    
                                        {{csrf_field()}}                                   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Yazar Adı</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom:3em">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Yazar Image</label>
                                                    <input style="opacity:1; position:inherit;top:30px;display:inline-block;width:20%" type="file" name="image"></input>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Yazar Bio</label>
                                                    <textarea  type="text" name="bio" class="form-control" rows="10" cols="30"></textarea>
                                    
                                                </div>
                                            </div>
                                        </div>
                                   
                                        <button type="submit" class="btn btn-primary pull-right">Yazar Ekle</button>
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