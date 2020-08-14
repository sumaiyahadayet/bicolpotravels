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
                        Create New Banner
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" action="{{route('submit-add-emaild')}}" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
                @csrf

                <div class="kt-portlet__body">
                    <div class="form-group row">


                        <label class="col-lg-3 col-form-label">Event Background Image<br>
                            <p>(will take content height and full screen width)</p>
                        </label>
                        <div class="col-lg-8 col-xl-8">


                            <div class="kt-avatar" id="kt_user_avatar_1">
                                <div class="kt-avatar__holder" style="background-image:url({{asset('assets/images/profile-avater.png')}})"></div>
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
                    </div>
                    <div class="form-group row">


                        <label class="col-lg-3 col-form-label">Support Background Image<br>
                            <p>(will take content height and full screen width)</p>
                        </label>
                        <div class="col-lg-8 col-xl-8">


                            <div class="kt-avatar" id="kt_user_avatar_2">
                                <div class="kt-avatar__holder" style="background-image:url({{asset('assets/images/profile-avater.png')}})"></div>
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
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Image<br>
                            <p>(will take content height and full screen width)</p>
                        </label>
                        <div class="col-lg-8 col-xl-8">


                            <div class="kt-avatar" id="kt_user_avatar_3">
                                <div class="kt-avatar__holder" style="background-image:url({{asset('assets/images/profile-avater.png')}})"></div>
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
                        <label class="col-lg-3 col-form-label">Image<br>
                            <p>(will take content height and full screen width)</p>
                        </label>
                        <div class="col-lg-8 col-xl-8">


                            <div class="kt-avatar" id="kt_user_avatar_4">
                                <div class="kt-avatar__holder" style="background-image:url({{asset('assets/images/profile-avater.png')}})"></div>
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
                         <label class="col-lg-2 col-form-label">Title 1</label>
             						<div class="col-lg-3">
             							<input type="text" name="titlea"  class="form-control" placeholder="Enter email" required>
             							<span class="form-text text-muted">Please enter email</span>
             						</div>

                                        <label class="col-lg-2 col-form-label">Title 2</label>
                                                       <div class="col-lg-3">
                                                            <input type="text" name="titleb"  class="form-control" placeholder="Enter email" required>
                                                            <span class="form-text text-muted">Please enter email</span>
                                                       </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-lg-2 col-form-label">Title 3</label>
             						<div class="col-lg-3">
             							<input type="text" name="titlec"  class="form-control" placeholder="Enter email" required>
             							<span class="form-text text-muted">Please enter email</span>
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
