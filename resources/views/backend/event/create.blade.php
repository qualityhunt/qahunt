@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.events') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

	  <form method="post" class="validate" autocomplete="off" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}


          <div class="col-8">

              <div class="card">
                  <div class="header">
                      <h2>{{ trans('backend.images') }}</h2>
                  </div>
                  <div class="body">
                      <div class="file-loading">
                          <input id="file-1" type="file" name="gallery_images[]" multiple
                                 class="file" data-overwrite-initial="false" data-min-file-count="0">
                      </div>
                  </div>
              </div>

              <script type="text/javascript">
                  $("#file-1").fileinput({
                      rtl: true,
                      showUpload: false,
                      theme: 'fa',
                      uploadUrl: "/admin/events/image-upload",
                      method:'Post',
                      uploadExtraData: function() {
                          return {
                              _token: $("input[name='_token']").val(),
                          };
                      },
                      allowedFileExtensions: ['jpg', 'png', 'jpeg'],
                      overwriteInitial: false,
                      maxFilesNum: 20,
                      slugCallback: function(filename) {
                          return filename.replace('(', '_').replace(']', '_');
                      }
                  });
              </script>
          </div>
<div class="container" >
            <div class="row" >

                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">{{ trans('Start Date') }}</label>
                        <input type="dateTime-local" class="form-control pickadate-months-year" name="start_date" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">{{ trans('End Date') }}</label>
                        <input type="dateTime-local" class="form-control pickadate-months-year" name="end_date" required>
                    </div>
                </div>
            </div>
        </div>







        <div class="tab-content pt-1">
            <div class="tab-pane active" id="home-unit" role="tabpanel" aria-labelledby="home-tab-justified">

                <h4 class="card-title">
                    {{ trans('backend.name') }}</h4>

                <input type="text" class="form-control" required="required" aria-required="true"  name="name_tr" aria-required="true">

                <h4 class="card-title">
                    {{ trans('backend.location') }}</h4>
                <input type="text" class="form-control" required="required" aria-required="true" name="location_tr" aria-required="true">


                <h4 class="card-title">
                    {{ trans('backend.text') }}</h4>
                <textarea type="text" class="ckeditor" required="required" aria-required="true"  name="text_tr"> </textarea>
                <script type="text/javascript">
      CKEDITOR.replace( 'text_tr' );
      CKEDITOR.add
   </script>
            </div>
        </div>




<br>



		<div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                        <a type="button" class="btn btn-warning"
                            href="{{   route('admin.events.index')   }}">{{ trans('backend.back') }}</a>
                    </div>
                    </form>


                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </section>

                    @endsection
