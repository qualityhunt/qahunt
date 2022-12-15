@extends('backend.layouts.app')
@section('content')
<!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title"> Kategori Ekle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                                <form role="form" action="{{ route('admin.document-category.store') }}" class="form form-horizontal" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}



                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="card-title control-label"
                                                                   for="date">Üst Kategori</label>
                                                            <select id="category_id" name="category_id" class="form-control">
                                                                <option value="">---</option>
                                                                @foreach ($categories as $category)
                                                                    <option
                                                                        value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">

                                                                <div class="card main-sectionx">
                                                                    <div class="header">
                                                                        <h2>Kategori Adı</h2>
                                                                    </div>
                                                                    <div class="body">
                                                                        <input type="text" id="category_name" class="form-control" name="category_name" placeholder="Kategori Adı">

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-6">

                                                                <div class="card main-sectionx">
                                                                    <div class="header">
                                                                        <h2>Slug</h2>
                                                                    </div>
                                                                    <div class="body">
                                                                        <input type="text" id="category_slug" class="form-control" name="category_slug" placeholder="Slug">

                                                                    </div>
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
                           href="{{   route('admin.document-category.index')   }}">{{ trans('backend.back') }}</a>
                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>





@endsection
