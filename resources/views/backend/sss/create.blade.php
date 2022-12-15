@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sıkça Sorulan Sorular</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <form role="form" action="{{ route('admin.sss.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <!-- Tab panes -->
                                                <div class="tab-pane" id="messages-unit" role="tabpanel"
                                                    aria-labelledby="messages-tab-justified">
                                                    <h4 class="card-title">
                                                       Soru</h4>

                                                    <input type="text" class="form-control" name="title"
                                                        aria-required="true">
                                                    <br>
                                                    <h4 class="card-title">
                                                       Cevap</h4>
                                                    <textarea type="text" class="ckeditor"
                                                        name="text"> </textarea>
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


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                <a type="button" class="btn btn-warning"
                                    href="{{   route('admin.sss.index')   }}">{{ trans('backend.back') }}</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
