@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Üye İlanları Düzenle</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <section id="statistics-card">
                            <div class="row">
 
                                @foreach ($advert->gallery_images as $gallery_images)
                                <div id="{{ $gallery_images->id }}" class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-content">
                                            <div class="card-body">

                                                <img width="200" height="100" class="user-photo"
                                                    src="{{ URL::to('public/uploads/galleries',$gallery_images->gallery_image_path) }}"
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
                                url: "<?php echo url('admin/gallery/image') ?>/" + id,
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
                        <form role="form" action="{{ route('admin.advert.update',$advert->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}


                            <div class="row">

                                <div class="col-12">

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
                                        uploadUrl: "/image-view",
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

                               


                            </div>









                            <div class="row clealfix">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="header">
                                            <h2>İlan Başlığı</h2>
                                        </div>
                                        <div class="body">

                                            <input
                                                value="@if (old('title_tr')){{ old('title_tr') }}@else{{ $advert->title_tr }}@endif"
                                                type="text" class="form-control" id="title_tr" name="title_tr">

                                        </div>
                                    </div>
                                </div>

                            </div>






                            <div class="row clealfix">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Konum</h2>
                                        </div>
                                        <div class="body">

                                            <input
                                                value="@if (old('location_tr')){{ old('location_tr') }}@else{{ $advert->location_tr }}@endif"
                                                type="text" class="form-control" id="location_tr" name="location_tr">



                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row clealfix">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Kategori</h2>
                                        </div>
                                        <div class="body">

                                                 <div class="multiselect_div">
                                                 <select id="single-selection" name="category">
                                                <option value="Konut">
                                                   Konut</option>
                                                <option value="Araç">
                                                    Araç</option>
                                                <option value="Diğer">
                                                  Diğer</option>
                                            </select>
                                    

                                                 </div>
                                                 

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h4 class="card-title">
                                İlan Detayları</h4>
                            <textarea type="text" class="ckeditor" name="text_tr">{!! $advert->text_tr !!}</textarea>
                            <script type="text/javascript">
      CKEDITOR.replace( 'text_tr' );
      CKEDITOR.add            
   </script>
                            <br>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                <a type="button" class="btn btn-warning"
                                    href="{{   route('admin.advert.index')   }}">{{ trans('backend.back') }}</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection