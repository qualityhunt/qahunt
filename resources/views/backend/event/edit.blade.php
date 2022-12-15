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

                        <section id="statistics-card">
                            <div class="row">
                                @foreach ($event->gallery_images as $gallery_images)
                                    <div id="{{ $gallery_images->id }}" class="col-xl-2 col-md-4 col-sm-6">
                                        <div class="card text-center">
                                            <div class="card-content">
                                                <div class="card-body">

                                                    <img width="200" height="100" class="user-photo"
                                                         src="{{ URL::to('uploads/events',$gallery_images->gallery_image_path) }}"
                                                         alt="">


                                                    <br>
                                                    <button class="deleteimage" data-id="{{ $gallery_images->id }}"
                                                            data-token="{{ csrf_token() }}">{{ trans('backend.delete') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>


                        <script>
                            $(".deleteimage").click(function() {
                                var id = $(this).data("id");
                                var token = $(this).data("token");
                                $.ajax({
                                    url: "<?php echo url('admin/events/image') ?>/" + id,
                                    type: 'delete',
                                    dataType: "JSON",
                                    data: {
                                        "id": id,
                                        "_method": 'delete',
                                        "_token": token,
                                    },
                                    success: function() {

                                        console.log("it Work");
                                        $('#' + id).hide();
                                    }
                                });

                            });
                        </script>
                <form method="post" class="validate" autocomplete="off" action="{{route('admin.events.update', $id)}}"
                    enctype="multipart/form-data">
                    {{ csrf_field()}}
                    {{ method_field('PATCH') }}
                            <div class="container">
                                <div class="row">

                                    <div class="col-sm-12">
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
                                                uploadUrl: "/admin/events/image/{id}",
                                                method: 'Delete',
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('backend.start_date') }}</label>
                                            <input type="dateTime-local" class="form-control" value="{{ Carbon\Carbon::parse($event->end_date)->format('Y-m-d\TH:i')}}" name="start_date"
                                                   value="{{ old('start_date') }}" required>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('backend.end_date') }}</label>
                                            <input type="dateTime-local" class="form-control" value="{{ Carbon\Carbon::parse($event->end_date)->format('Y-m-d\TH:i')}}" name="end_date"
                                                value="{{ old('end_date') }}" required>

                                        </div>
                                    </div>

                                </div>
                            </div>





<!-- Tab panes -->
<div class="tab-content pt-1">
    <div class="tab-pane active" id="home-event" role="tabpanel" aria-labelledby="home-tab-justified">

        <h4 class="card-title">
            {{ trans('backend.name') }}</h4>

        <input type="text" class="form-control" name="name_tr" value="{{   $event->name_tr }}" aria-required="true">
        <h4 class="card-title">
            {{ trans('backend.location') }}</h4>

        <input type="text" class="form-control" name="location_tr" value="{{ $event->location_tr }}"
            aria-required="true">


        <h4 class="card-title">
            {{ trans('backend.text') }}</h4>
        <textarea type="text" class="ckeditor" name="text_tr">{!! $event->text_tr !!}</textarea>
        <script type="text/javascript">
      CKEDITOR.replace( 'text_tr' );
      CKEDITOR.add
   </script>
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
