
   @extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Duyurular</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">
        <form role="form" action="{{ route('admin.announcement.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
 <div class="row">
    <div class="col-4">

<div class="card main-sectionx">
        <div class="header">
            <h2>{{ trans('backend.image') }}</h2>
        </div>
        <div class="body">
            <input type="file" class="dropify" data-default-file="" data-allowed-file-extensions="png jpg jpeg"
                name="f_image" required>
        </div>
    </div>

    </div>
    <div class="col-8">

<div class="card">
    <div class="header">
        <h2>{{ trans('backend.images') }}</h2>
    </div>
    <div class="body">
        <div class="file-loading">
   <input id="file-1" type="file" name="announcement_images[]" multiple class="file" data-overwrite-initial="false"
        data-min-file-count="0">
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#file-1").fileinput({
            rtl: true,
            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'jpeg'],
            overwriteInitial: false,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
</script>



    </div>
</div>











            <br>
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body">
                           
                      
                                <div class="tab-content pt-1">
                                    
                                    <div>
                                        <h4 class="card-title">
                                            {{ trans('backend.title') }}</h4>

                                        <input type="text" class="form-control" name="title_tr" aria-required="true">
                                        <h4 class="card-title">
                                            {!! trans('backend.text') !!}</h4>
                                        <textarea type="text" class="ckeditor" name="text_tr"> </textarea>
                                        <script type="text/javascript">
      CKEDITOR.replace( 'text_tr' );
      CKEDITOR.add            
   </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>



            <div class="row clealfix">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.date') }}</h2>
                        </div>


                        <div class="body">


                                <input type='text' name="date" class="form-control  pickadate-months-year" />


                        </div>
                    </div>
                </div>


<script>

$(document).ready(function() {

$('.pickadate-months-year').pickadate({
selectMonths: true,
selectYears: 20
});
});

</script>





 



            </div>



            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.announcement.index')   }}">{{ trans('backend.back') }}</a>
            </div>
 </form>


    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    @endsection
