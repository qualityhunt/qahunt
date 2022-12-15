@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.activity_type') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">


        <form role="form" action="{{ route('admin.activitytype.update',$activity_type->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


            <div class="row clealfix">
            

                 


                <div class="col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} </h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('name_tr')){{ old('name_tr') }}@else{{ $activity_type->name_tr }}@endif"
                                type="text" class="form-control" id="name_tr" name="name_tr">

                        </div>
                    </div>
                </div>

            </div>


            <div class="row clealfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ trans('backend.text') }}</h2>
                    </div>
                    <div class="body">


                        <textarea  type="text" class="ckeditor" name="text_tr">{!! $activity_type->text_tr !!}</textarea>
                        <script type="text/javascript">
      CKEDITOR.replace( 'text_tr' );
      CKEDITOR.add            
   </script>

                    </div>
                </div>
            </div>


            
            
            </div>







            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.activitytype.index')   }}">{{ trans('backend.back') }}</a>
            </div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>


@endsection
