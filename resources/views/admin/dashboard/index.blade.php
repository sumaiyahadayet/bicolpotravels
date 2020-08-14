@extends('admin.layouts.app')


@section('meta')
@endsection


@section('css')
@endsection

@section('js')

@endsection


@section('content-head')

@include('admin.layouts.header.content-head')


@endsection


@section('content')

<!--Begin::Section-->
<div class="row">
     <div class="kt-portlet kt-portlet--mobile" style="justify-content:center;">
          <div class="kt-portlet__head">
               <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    Monitor your site visitors
                    </h3>
               </div>
          </div>
          <div class="kt-portlet__body">
               <a href="https://analytics.google.com/analytics/web/#/realtime/rt-overview/a173945284w241416827p225186525/"><button type="button" class="btn btn-outline-primary">Visit</button></a>
     </div>

</div>
</div>
<div class="row">
     <div class="col-md-12">
<div class="alert alert-info" role="alert">
   <div class="alert-text">Maintain recommended image size for better view</div>
</div></div>
</div>
<div class="col-md-6" style="margin:0px auto; display:block;">
 <img class="" src="{{asset('/assets/images/admin.jpg')}}" alt="Card image" style="height:auto;width:100%; ">
</div>
<!--End::Section-->



@endsection
