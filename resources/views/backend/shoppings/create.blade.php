@extends('backend.layouts.app')
@section('content')


    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Aidat Oluştur</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">


                            <form role="form" action="{{ route('admin.shoppings.store') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="card-title control-label"
                                                               for="date">Üye Seçimi</label>
                                                        <select id="user" name="user" class="form-control" required>
                                                            @foreach ($users as $user)
                                                                <option
                                                                    value="{{ $user->id }}"> {{ $user->full_name_tr }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="date">Tarih</label>
                                                        <input id="date" type="date" class="form-control" name="date"
                                                               min="2020-01-01" aria-required="true" required>
                                                    </div>
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
                                                                        <input id="file-1" type="file" name="activity_images[]" multiple class="file" data-overwrite-initial="false"
                                                                               data-min-file-count="0">
                                                                    </div>
                                                                </div>
                                                            </div>





                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="card-title control-label" for="description">Açıklama</label>
                                                        <textarea class="ckeditor" id="description"
                                                                  name="description" rows="3"></textarea>
                                                                  <script type="text/javascript">
      CKEDITOR.replace( 'description' );
      CKEDITOR.add            
   </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                    <a type="button" class="btn btn-warning"
                                       href="{{   route('admin.shoppings.index')   }}">{{ trans('backend.back') }}</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection