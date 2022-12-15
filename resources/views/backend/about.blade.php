@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.about_page_settings') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                            <form role="form" action="{{ route('admin.about.update') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}

                                    <div class="col-sm-6">
                                        <div class="card overflow-hidden">
                                            <div class="card-header">
                                                <h2>Logo</h2>
                                            </div>
                                            <div class="body">

                                                <input type="file" class="dropify"
                                                    data-default-file="{{ URL::to('uploads/about', $about->about_image) }}"
                                                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                                    name="about_image">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-header">
                                                <h4 class="card-title">Hakkımızda Başlık</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">

                                                    <!-- Tab panes -->
                                                    <div class="tab-content pt-1">
                                                        <div class="tab-pane active" id="home-just" role="tabpanel"
                                                            aria-labelledby="home-tab-justified">
                                                            <input type="text" class="form-control"
                                                                name="about_title_tr"
                                                                value="{{   $about->about_title_tr }}" aria-required="true"><br>
                                                            <h4 class="card-title">Hakkımızda </h4>
                                                            <textarea type="text" id="summary-ckeditor" class="form-control"
                                                                name="about_text_tr">{!! $about->about_text_tr !!}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ trans('backend.save') }}</button>
                                    <a type="button" class="btn btn-warning"
                                       href="{{   route('admin.dashboard')   }}">{{ trans('backend.back') }}</a>
                                </div>



                            </form>

</div>
</div>
</div>
</div>
</div>
</section>

@endsection
