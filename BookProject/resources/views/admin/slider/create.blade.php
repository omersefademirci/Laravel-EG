@extends('layouts.admin')
@section('content')

<div class="content ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Slider Ekle</h4>
                                    <p class="category">Slider Oluşturunuz</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.slider.create.post')}}" method="POST" enctype="multipart/form-data">    
                                        {{csrf_field()}}                                   
                                        <div class="row">
                                           
                                            <div class="col-md-12" style="margin-bottom:3em">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Slider Image</label>
                                                    <input style="opacity:1; position:inherit;top:30px;display:inline-block;width:20%" type="file" name="image"></input>
                                                    
                                                </div>
                                            </div>
                                          
                                        </div>
                                   
                                        <button type="submit" class="btn btn-primary pull-right">Slider Ekle</button>
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