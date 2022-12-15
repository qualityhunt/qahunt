@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Üye İlanları</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">




                        <form role="form" action="{{ route('admin.advert.store') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
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
                            <br>
                            <br>
                           



                            <div class="row clealfix">
                                <div class="col-12">
                                 
                            <div class="tab-content pt-1">
                                <div class="tab-pane active" id="home-unit" role="tabpanel"
                                    aria-labelledby="home-tab-justified">

                                    <h4 class="card-title">
                                        İlan Başlığı</h4>

                                    <input type="text" class="form-control" required="required" aria-required="true"
                                    id="title_tr" name="title_tr" aria-required="true">

                                    <h4 class="card-title">
                                        Konum</h4>
                                    <input type="text" class="form-control" required="required" aria-required="true"
                                        name="location_tr" aria-required="true">
                                        <div class="row clealfix">
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <div class="header">
                                                        <h2>Kategori</h2>
                                                    </div>
                                                    <div class="body">
            
                                                             <div class="multiselect_div">
                                                                <select id="single-selection" name="category"
                                                                    class="form-control">
                                                                    <option value="0">Konut</option>
                                                                    <option value="1">Araç</option>
                                                                    <option value="2">Diğer</option>
                                                                </select>
                                                
            
                                                             </div>
                                                             
            
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>

                                    <h4 class="card-title">
                                        İlan İçeriği</h4>
                                    <textarea type="text" class="ckeditor"  aria-required="true"
                                        name="text_tr"> </textarea>
                                        <script type="text/javascript">
      CKEDITOR.replace( 'text_tr' );
      CKEDITOR.add            
   </script>

                                </div>
                            </div>
                                </div>

                            </div>
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