@extends('layouts.admin')
@section('header')
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    @endsection
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Kategori Listesi</h4>
                                    <p class="category">Burada eklenen kategorilerin listesini bulabilir siniz</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <?php /*
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Name</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key=>$value)
                                            <tr>
                                                <td>{{$value['name']}}</td>
                                                <td><a href="{{route('admin.kategori.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                                <td><a href="{{route('admin.kategori.delete',['id'=>$value['id']])}}">Sil</a></td>
                                                
                                            </tr>
                                           @endforeach
                                        </tbody>     
                                    </table>
                                   */?>
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Extn.</th>
                                                <th>Start Date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Extn.</th>
                                                <th>Start Date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    
                                    <a style="padding:20px 50px; margin:10px;float:right;background-color:#6a2076;color:white;border-radius:10px"  href="{{route('admin.kategori.create')}}">Ekle</a>
                                    
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
@section('footer')
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $('#example').DataTable({
            lenghtMenu:[[25, 100, -1],[25, 100, "All"]],
            processing:true,
            serverSide:true,
            ajax:{
                type:"POST",
                header:{'X-CSRF-TOKEN':{{csrf_token()}}},
                url:'',
            },
            columns:[
                {data:'name',name:'name'},
                {data:'edit',name:'edit',orderable:false,searchabla:false}
            ]
        )};
    </script>
@endsection