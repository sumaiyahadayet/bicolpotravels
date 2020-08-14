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
          .text-muted{
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
						Update Facebook Address
					</h3>
				</div>
			</div>
			<!--begin::Form-->
               <form method="post" action="{{route('update-skype')}}" class="kt-form kt-form--fit kt-form--label-right" enctype="multipart/form-data">
                   @csrf

                   <input type="hidden" name="id" value="{{$data->id}}">

				<div class="kt-portlet__body">
					<div class="form-group row">




            <label class="col-lg-2 col-form-label">Skype Username</label>
          <div class="col-lg-3 col-xl-3">

         <input type="text" name="number" value="{{$data->number}}" class="form-control" >




                        </div>
					</div>
          <div class="form-group row">

            <label class="col-lg-2 col-form-label">Order</label>
						<div class="col-lg-3">
							<input type="text" name="order" value="{{$data->order}}" class="form-control" placeholder="Enter Order">
							<span class="form-text text-muted">Please enter  Order</span>
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
