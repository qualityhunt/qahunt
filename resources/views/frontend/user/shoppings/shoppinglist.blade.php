@extends('backend.layouts.app')


@section('content')
<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <a href="{{   route('admin.company.create')   }}" class="btn btn-primary mb-2"><i
                                class="feather icon-plus"></i>&nbsp;
                            {{ trans('backend.new') }}
                        </a>
                        <div class="row">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Firma Adı</th>
                                        <th scope="col">Adres</th>
                                        <th scope="col">Konum</th>
                                        <th scope="col">Detaylar</th>
                                        <th scope="col">Eylemler</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($company as $com)
                                    <tr>

                                        <th scope="col"><img src="{{ URL::to('uploads/company',$com->src)}}" style="width:50px;"></th>
                                        <th scope="col">{{$com->name}} </th>
                                        <th scope="col">{{$com->adress}}</th>
                                        <th scope="col">{{$com->konum}} </th>
                                        <th scope="col">{!! $com->detail !!} </th>
                                        <th scope="col">
                                            <a href="{{route('admin.company.edit',$com->id)}}" title="Düzenle"
                                                class="btn btn-sm btn-primary"><i class="fa fa-pen">Düzenle</i>
                                                <a  href="{{route('admin.delete.company',$com->id)}}" title="Sil" style="margin-left:3px;" class="btn btn-sm btn-danger">Sil</a>

                                            </a>
                                        </th>

                                    </tr>
                                 
                        
                        @endforeach


                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--/ Add rows table -->



@endsection


@section('page-js')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src="{{asset('backend/app-assets/js/scripts/datatables/datatable.min.js')}}"></script>
<!-- END: Page JS-->

@endsection