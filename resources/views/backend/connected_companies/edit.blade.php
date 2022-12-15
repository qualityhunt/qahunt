@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Firma Düzenle</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <form role="form" action="{{ route('admin.company.update',$company->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <label for="inputEmail4">Firma Adı </label>
                                <input name="name" type="text" class="form-control" id="inputEmail4"
                                    placeholder="Firma Adı" value="{{ old('name', $company->name) }}">
                            </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Adres</label>
                                <input name="adress" type="text" class="form-control" id="inputAddress"
                                    placeholder="1234 Tuna Caddesi" value="{{ old('adress', $company->adress) }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Konum</label>
                                <input name="konum" type="text" class="form-control" id="inputAddress2"
                                    placeholder="Kayseri , İstanbul" value="{{ old('konum', $company->konum) }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="card-title control-label"
                                       for="date">Kategori Bayi</label>

                                <select id="category_bayi" name="category_bayi" class="form-control" required>
                                    <option value="0" @if($company->category_bayi==0) selected @endif>Toptancı</option>
                                    <option value="1" @if($company->category_bayi==1) selected @endif>Çözüm Ortağı</option>

                                 </select>


                            </div>
                            <div class="form-group col-md-6">
                                <label class="card-title control-label"
                                       for="date">Kategori İl</label>

                                <select id="category_il" name="category_il" class="form-control" required>
                                    @foreach ($iller as $il)
                                        <option value="{{ $il->id }}"
                                                @if ($company->category_il == $il->id)
                                                selected
                                            @endif
                                        >{{ $il->name }}</option>

                                    @endforeach
                                </select>


                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlTextarea1"> Detaylar :</label>
                                <textarea name="detail" id="detail" class="ckeditor"
                                    rows="5">{{$company->detail}}</textarea>
                                    <script type="text/javascript">
      CKEDITOR.replace( 'detail' );
      CKEDITOR.add
   </script>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="card main-sectionx">
                                    <label for="exampleFormControlTextarea1"> Logo</label>
                                    <div class="body">
                                        <input type="file" class="dropify"
                                            data-default-file="{{ URL::to('uploads/company',$company->src) }}"
                                            data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="src">

                                    </div>
                                </div>

                            </div>
                        </div>

                            <button type="submit" class="btn btn-primary">Güncelle</button>

                            <a type="button" class="btn btn-warning"
                               href="{{   route('admin.company.index')   }}">{{ trans('backend.back') }}</a>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


@endsection
