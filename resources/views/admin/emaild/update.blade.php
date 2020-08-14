@extends('admin.layouts.app')


@section('meta')
@endsection


@section('css')
@endsection


@section('js')
<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/avatar.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->
@endsection


@section('content-head')

@include('admin.layouts.header.content-head')


@endsection


@section('content')
<style media="screen">
    .text-muted {
        display: none;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update Email Settings
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" action="{{route('update-emaild')}}" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$data->id}}">

                <div class="kt-portlet__body">
                    <div class="form-group row">

                        <label class="col-lg-3 col-form-label">Email Banner Image<br>
                            <p>(size:666x322 )</p>
                        </label>
                        <div class="col-lg-6 col-xl-6">

                            <input type="hidden" name="old_imaged" value="{{$data->imaged}}">

                            <div class="kt-avatar" id="kt_user_avatar_4">
                                <div class="kt-avatar__holder" style="background-image: @if($data->imaged!='') url({{asset($data->imaged)}}) @else url({{asset('assets/images/profile-avater.png')}}) @endif"></div>
                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change Image">
                                    <i class="fa fa-pen"></i>
                                    <input type="file" name="imaged" accept=".png, .jpg, .jpeg">
                                </label>
                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel Image">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-lg-3 col-form-label"> Image 1<br>
                            <p>(size:170 x 200)</p>
                         </label>
                         <div class="col-lg-3 col-xl-3">

                            <input type="hidden" name="old_imagea" value="{{$data->imagea}}">

                            <div class="kt-avatar" id="kt_user_avatar_1">
                                 <div class="kt-avatar__holder" style="background-image: @if($data->imagea!='') url({{asset($data->imagea)}}) @else url({{asset('assets/images/profile-avater.png')}}) @endif"></div>
                                 <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change Image">
                                     <i class="fa fa-pen"></i>
                                     <input type="file" name="imagea" accept=".png, .jpg, .jpeg">
                                 </label>
                                 <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel Image">
                                     <i class="fa fa-times"></i>
                                 </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                         </div>
                         <label class="col-lg-1 col-form-label">Title 1</label>
                                           <div class="col-lg-4">
                                                <input type="text" name="titlea" value="{{$data->titlea}}" class="form-control" placeholder="Please enter Title 1">
                                                <span class="form-text text-muted">Please enter Title1</span>
                                           </div>



                    </div>
                    <div class="form-group row">
                         <label class="col-lg-3 col-form-label"> Image 2<br>
                            <p>(size:170 x 200)</p>
                         </label>
                         <div class="col-lg-3 col-xl-3">

                             <input type="hidden" name="old_imageb" value="{{$data->imageb}}">

                             <div class="kt-avatar" id="kt_user_avatar_2">
                                 <div class="kt-avatar__holder" style="background-image: @if($data->imageb!='') url({{asset($data->imageb)}}) @else url({{asset('assets/images/profile-avater.png')}}) @endif"></div>
                                 <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change Image">
                                     <i class="fa fa-pen"></i>
                                     <input type="file" name="imageb" accept=".png, .jpg, .jpeg">
                                 </label>
                                 <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel Image">
                                     <i class="fa fa-times"></i>
                                 </span>
                             </div>
                             <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                         </div>
                         <label class="col-lg-1 col-form-label">Title 2</label>
                                           <div class="col-lg-4">
                                                <input type="text" name="titleb" value="{{$data->titleb}}" class="form-control" placeholder="Please enter Title 2">
                                                <span class="form-text text-muted">Please enter Title 2</span>
                                           </div>



                    </div>
                    <div class="form-group row">

                         <label class="col-lg-3 col-form-label"> Image 3<br>
                           <p>(size:170 x 200)</p>
                         </label>
                        <div class="col-lg-3 col-xl-3">

                            <input type="hidden" name="old_imagec" value="{{$data->imagec}}">

                            <div class="kt-avatar" id="kt_user_avatar_3">
                                <div class="kt-avatar__holder" style="background-image: @if($data->imagec!='') url({{asset($data->imagec)}}) @else url({{asset('assets/images/profile-avater.png')}}) @endif"></div>
                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change Image">
                                    <i class="fa fa-pen"></i>
                                    <input type="file" name="imagec" accept=".png, .jpg, .jpeg">
                                </label>
                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel Image">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                        <label class="col-lg-1 col-form-label">Title 3</label>
                                         <div class="col-lg-4">
                                              <input type="text" name="titlec" value="{{$data->titlec}}" class="form-control" placeholder="Please enter Title 3">
                                              <span class="form-text text-muted">Please enter Title 3</span>
                                         </div>
                    </div>


                </div>





                <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>

</div>


@endsection
