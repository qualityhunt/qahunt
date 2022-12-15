

@extends('backend.layouts.app')
@section('content')


    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ trans('backend.sectors') }}</h4>
                        @include('includes.partials.messages')
                    </div>
                    <div class="card-content">
                        <div class="card-body">


                            <form   role="form" action="{{ route('admin.document-category.update',$category->id) }}" class="form form-horizontal" method="POST"
                                    enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}



                                <div class="form-group">
                                    <label class="card-title control-label">Üst Kategori</label>
                                    <select id="category_id" name="category_id" class="form-control">

                                        <option value=""> --- </option>
                                        @foreach($categories as $category2)
                                            <option value="{{ $category2->id }}" @if($category->category_id==$category2->id) selected @endif >{{$category2->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kategori Adı</label>
                                        <input value="@if (old('category_name')){{ old('category_name') }}@else{{ $category->category_name }}@endif" type="text"
                                               class="form-control" id="category_name" name="category_name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Slug</label>
                                        <input value="@if (old('category_slug')){{ old('category_slug') }}@else{{ $category->category_slug }}@endif" type="text"
                                               class="form-control" id="category_slug" name="category_slug">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                        <a type="button" class="btn btn-warning"
                                           href="{{   route('admin.document-category.index')   }}">{{ trans('backend.back') }}</a>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

