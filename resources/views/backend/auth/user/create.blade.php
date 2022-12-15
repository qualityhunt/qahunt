@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection
@section('some-css')
<link rel="stylesheet" href="{{asset('frontend/c_build/css/countrySelect.css')}}">
<link rel="stylesheet" href="{{asset('frontend/c_build/css/demo.css')}}">
@endsection
@section('content')

<form id="register-form"   class="form-horizontal" action="{{route('admin.auth.user.store')}}"  method="POST"  enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="card">
        <div class="card-body">
            <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.personal_information') }}
            </h4>
            <div class="form-group">
                <label>{{ trans('frontend.full_name') }} <span class="sup">*</span></label>
                <input type="text" class="form-control" name="full_name_tr"
                    placeholder="{{ trans('frontend.full_name') }}  ">
            </div><!-- ends: .form-group -->

            <div class="form-group">
                <label>{{ trans('frontend.email') }}<span class="sup">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="{{ trans('frontend.email') }}"
                    required="required" aria-required="true">
            </div><!-- ends: .form-group -->

            <div class="form-group">
                <label>{{ trans('frontend.password') }}<span class="sup">*</span></label>
                <input type="password" id="password" class="form-control" name="password"
                    placeholder="{{ trans('frontend.password') }}" required="required" aria-required="true">
            </div><!-- ends: .form-group -->

            <div class="form-group">

                <label>{{ trans('frontend.password_confirmation') }}<span class="sup">*</span></label>
                <span id='message'></span>
                <input type="password" id="confirm_password" name="password_confirmation" class="form-control"
                    placeholder="{{ trans('frontend.password_confirmation') }}" required="required" aria-required="true">

            </div><!-- ends: .form-group -->

            <script>
                $('#password, #confirm_password').on('keyup', function () {
                        if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('@lang('frontend.password_are_matching')').css('color', 'green');
                        } else
                        $('#message').html('@lang('frontend.password_not_matching')').css('color', 'red');
                        });
            </script>



            <div class="form-group">
                <label>{{ trans('frontend.phone') }}<span class="sup">*</span></label>
                <input style="direction:ltr;" type="text" class="form-control" name="phone" placeholder="{{ trans('frontend.phone') }}" required="required"
                    required aria-required="true">
            </div><!-- ends: .form-group -->
            <div class="form-group">
                <label>Kan Grubu <span class="sup">*</span></label>
                <input style="direction:ltr;" type="text" class="form-control" name="blood_group" placeholder="Kan Grubu" required="required"
                    required aria-required="true">
            </div><!-- ends: .form-group -->

           
            <div class="form-group">
                <label>{{ trans('frontend.gender') }}<span class="sup">*</span></label>
                <div class="select-basic">
                    <select class="form-control" name="gender" id="gender">
                        <option value="1">{{ trans('frontend.male') }}</option>
                        <option value="0">{{ trans('frontend.female') }}</option>
                    </select>
                </div>
            </div><!-- ends: .form-group -->

            <br>
            <br>
          
            <br>
            <div class="custom-control custom-checkbox checkbox-secondary">
                <input type="checkbox" class="custom-control-input" id="customCheck3" required="required"
                    aria-required="true">
                <label class="custom-control-label" for="customCheck3">{{ trans('frontend.i_agree_with_the_all_additional') }}
                    <a style="color:red" data-toggle="modal"
                        data-target="#myModal">{{ trans('frontend.membership_conditions') }}</a>
                </label>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 style="color:red" class="modal-title" id="myModalLabel">
                                {{ trans('frontend.membership_conditions') }}</h4>
                        </div>
                        <div class="modal-body">
                            <p style="padding: 20px;">
                                {!! trans('frontend.membership_conditions_text') !!}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal">{{ trans('frontend.close') }}</button>
                        </div>
                    </div>
                </div>
            </div>



            <br>



                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.users.active'))->class('col-md-2 form-control-label')->for('active') }}

                            <div class="col-md-10">
                                <label class="switch switch-label switch-pill switch-primary">
                                    {{ html()->checkbox('active', true)->class('switch-input') }}
                                    <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                </label>
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.users.confirmed'))->class('col-md-2 form-control-label')->for('confirmed') }}

                            <div class="col-md-10">
                                <label class="switch switch-label switch-pill switch-primary">
                                    {{ html()->checkbox('confirmed', true)->class('switch-input') }}
                                    <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                </label>
                            </div><!--col-->
                        </div><!--form-group-->

                        @if(! config('access.users.requires_approval'))
                            <div class="form-group row">
                                {{ html()->label(__('validation.attributes.backend.access.users.send_confirmation_email') . '<br/>' . '<small>' .  __('strings.backend.access.users.if_confirmed_off') . '</small>')->class('col-md-2 form-control-label')->for('confirmation_email') }}

                                <div class="col-md-10">
                                    <label class="switch switch-label switch-pill switch-primary">
                                        {{ html()->checkbox('confirmation_email')->class('switch-input') }}
                                        <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                    </label>
                                </div><!--col-->
                            </div><!--form-group-->
                        @endif

                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.access.users.table.abilities'))->class('col-md-2 form-control-label') }}

                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>@lang('labels.backend.access.users.table.roles')</th>
                                            <th>@lang('labels.backend.access.users.table.permissions')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                @if($roles->count())
                                                    @foreach($roles as $role)
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="checkbox d-flex align-items-center">
                                                                    {{ html()->label(
                                                                            html()->checkbox('roles[]', old('roles') && in_array($role->name, old('roles')) ? true : false, $role->name)
                                                                                  ->class('switch-input')
                                                                                  ->id('role-'.$role->id)
                                                                            . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                                                        ->class('switch switch-label switch-pill switch-primary mr-2')
                                                                        ->for('role-'.$role->id) }}
                                                                    {{ html()->label(ucwords($role->name))->for('role-'.$role->id) }}
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                @if($role->id != 1)
                                                                    @if($role->permissions->count())
                                                                        @foreach($role->permissions as $permission)
                                                                            <i class="fas fa-dot-circle"></i> {{ ucwords($permission->name) }}
                                                                        @endforeach
                                                                    @else
                                                                        @lang('labels.general.none')
                                                                    @endif
                                                                @else
                                                                    @lang('labels.backend.access.users.all_permissions')
                                                                @endif
                                                            </div>
                                                        </div><!--card-->
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                @if($permissions->count())
                                                    @foreach($permissions as $permission)
                                                        <div class="checkbox d-flex align-items-center">
                                                            {{ html()->label(
                                                                    html()->checkbox('permissions[]', old('permissions') && in_array($permission->name, old('permissions')) ? true : false, $permission->name)
                                                                          ->class('switch-input')
                                                                          ->id('permission-'.$permission->id)
                                                                        . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                                                    ->class('switch switch-label switch-pill switch-primary mr-2')
                                                                ->for('permission-'.$permission->id) }}
                                                            {{ html()->label(ucwords($permission->name))->for('permission-'.$permission->id) }}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--col-->
                        </div><!--form-group-->


            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
        </div>
            <!--card-->
   </form>
@endsection