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

                        <a href="{{   route('admin.announcement.create')   }}"  class="btn btn-primary mb-2"><i
                                class="feather icon-plus"></i>&nbsp;
                            {{ trans('backend.new') }}
                        </a>
                        <div class="table-responsive">
                            <table class="table add-rows">
                                <thead>
                                    <tr>
                                        <th>S. NO</th>


                                        <th>{{ trans('backend.image') }}</th>

                                        <th>{{ trans('backend.title') }}</th>
                                        <th>{{ trans('backend.text') }}</th>
                                        <th>{{ trans('backend.type') }}</th>


                                        <th>{{ trans('backend.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($announcements as $announcement)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>


                                        <td align="center"> <img style="height: 50px;width: 50px;" class="img-circle"
                                                src="{{  URL::to('uploads/announcements/')}}/{{ $announcement->f_image }}"></td>


                                        <td>{{ $announcement->title }}</td>

                                        <td>{!! Str::words($announcement->text ,10,'...') !!}</td>





                                        <td>
                                            <a href="{{   route('admin.announcement.edit',$announcement->id) }}"> <i
                                                    class="feather icon-edit font-medium-5"></i> </a>
                                            <a href=""
                                                onclick="if(confirm('Silmek İstediğinize Emin Misiniz?')){event.preventDefault();document.getElementById('delete-form-{{ $announcement->id }}').submit();}else{event.preventDefault();}">
                                                <i class="feather icon-trash  font-medium-5"> </i></a>
                                            <form id="delete-form-{{ $announcement->id }}" method="post"
                                                action="{{ route('admin.announcement.destroy',$announcement->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. NO</th>


                                        <th>{{ trans('backend.image') }}</th>

                                        <th>{{ trans('backend.title') }}</th>
                                        <th>{{ trans('backend.text') }}</th>
                                        <th>{{ trans('backend.type') }}</th>

                                        <th>{{ trans('backend.action') }}</th>

                                    </tr>
                                </tfoot>
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
