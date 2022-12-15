@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ürünler</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form role="form" action="{{ route('admin.shopping.store') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clealfix">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="header">
                                            <h2>{{ trans('backend.image') }}</h2>
                                        </div>
                                        <div class="body">
                                            <input type="file" class="dropify" data-default-file=""
                                                data-allowed-file-extensions="png jpg jpeg" name="image" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-content">
                                            <div class="card-body">

                                                <!-- Tab panes -->
                                                <div class="tab-content pt-1">
                                                    <div class="tab-pane active" id="home-unit" role="tabpanel"
                                                        aria-labelledby="home-tab-justified">

                                                        <h4 class="card-title">
                                                            Ürün Adı</h4>

                                                        <input type="text" class="form-control" name="name"
                                                            aria-required="true">

                                                        <h4 class="card-title">
                                                            Açıklama </h4>
                                                        <input type="text" class="form-control" name="description"
                                                            aria-required="true">

                                                        <h4 class="card-title">Birim </h4>
                                                        <select name="type" class="form-select"
                                                            aria-label="Default select example">
                                                            <option name="choice1">Kilogram</option>
                                                            <option name="choice2">Gram</option>
                                                            <option name="choice3">Adet</option>
                                                            <option name="choice4">Santimetre</option>
                                                        </select>
                                                        <h4 class="card-title">
                                                            Fiyat</h4>

                                                        <input type="text" class="form-control" name="price"
                                                            aria-required="true">
                                                    </div>
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
                            href="{{   route('admin.shopping.index')   }}">{{ trans('backend.back') }}</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection