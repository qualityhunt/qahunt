@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Döküman Düzenle</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">

        <form role="form" action="{{ route('admin.document.update',$document->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


            <div class="row">

      <div class="col-12">

        <div class="card">
            <div class="header">
                <h2>Döküman Yükle (PDF)</h2>
            </div>

            <div class="body">
                <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/documents',$document->f_image) }}" data-allowed-file-extensions="png jpg jpeg pdf" name="f_image">
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

          <div class="row">
            <div class="col-sm-12">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="card-title control-label"
                                       for="date">Kategori</label>

                                <select id="category_id" name="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                         <option value="{{ $category->id }}"
                                            @if ($document->category_id == $category->id)
                                            selected
                                            @endif
                                        >{{ $category->category_name }}</option>

                                    @endforeach
                                </select>


                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content pt-1">
                                <div class="tab-pane active" id="home-post" role="tabpanel"
                                    aria-labelledby="home-tab-justified">
                                    <h4 class="card-title">
                                        {{ trans('backend.title') }}</h4>

                                    <input type="text" class="form-control" name="title"
                                        value="{{   $document->title }}" aria-required="true">
                                    <br>
                                    <h4 class="card-title">
                                        {{ trans('backend.text') }}</h4>
                                    <textarea type="text" class="ckeditor"
                                        name="text">{!! $document->text !!}</textarea>
                                        <script type="text/javascript">
      CKEDITOR.replace( 'text' );
      CKEDITOR.add
   </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.document.index')   }}">{{ trans('backend.back') }}</a>
            </div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>


@endsection
