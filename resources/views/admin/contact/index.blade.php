@extends('admin.layouts.app')


@section('meta')
@endsection


@section('css')
@endsection


@section('js')
<script src="{{asset('assets/js/html-table.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    function ChangeStatus(student_id, output_id, status) {


        $.ajax({
            url: '/admin/student/update-status',
            type: 'GET',
            data: {
                student_id: student_id,
            },
            success: function(response) {

                if (response == 'Active') {


                    document.getElementById(output_id).innerHTML = 'Active';
                    document.getElementById(output_id).className = "kt-badge--inline kt-badge--pill kt-badge  kt-badge--primary";


                } else {


                    document.getElementById(output_id).innerHTML = 'Inactive';
                    document.getElementById(output_id).className = "kt-badge--inline kt-badge--pill kt-badge  kt-badge--danger";


                }



            }
        });

    }
</script>
@endsection


@section('content-head')

<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item d-print-none" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Contact</h3>

        <span class="kt-subheader__separator kt-subheader__separator--v"></span>



    </div>

</div>
<!-- end:: Content Head -->

@endsection


@section('content')
<div class="d-print-none" id="snackbar">

    <div class="alert kt-padding-l-30 kt-padding-r-30 kt-padding-0 alert-@if (isset($alert)&&$alert!=''){{$alert_type}}@endif" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">
        @if (isset($alert)&&$alert!=''){{$alert}}
        @endif</div>
    </div>

</div>

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg d-print-none" style="
    float: right;
    display: inline-block;
    align-items: center;
    margin-top: 10px;
">

        <div class="kt-portlet__head-toolbar" style="
        float: right;
        display: inline-block;
        align-items: center;
        margin-top: 10px;
    ">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">



                    &nbsp;




                </div>
            </div>
        </div>
    </div>

    <div class="kt-portlet__body d-print-none">
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">

                        </div>

                    </div>
                </div>
                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">

                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
        <!--begin: Datatable -->
        <table class="kt-datatable" id="html_table" width="100%">
            <thead>
                <tr>
                    <th title="Field #1">Serial</th>

                    <th title="Field #5">Phone</th>
                    <th title="Field #3">Email</th>
                    <th title="Field #4">Facebook</th>

                    <th  title="Field #8">Skype</th>
                    <th title="Field #5">Created At</th>
                </tr>
            </thead>
            <tbody>

              @php
                $serial=1;
              @endphp
              <tr>
<td></td>
<td> <a href="{{route('phone')}}" class="edit"><i class="la la-edit" data-toggle="tooltip" title="Edit" style="font-size:30px; color:red;"></i></a></td>
<td> <a href="{{route('email')}}" class="edit"><i class="la la-edit" data-toggle="tooltip" title="Edit" style="font-size:30px; color:red;"></i></a></td>

<td> <a href="{{route('fb')}}" class="edit"><i class="la la-edit" data-toggle="tooltip" title="Edit" style="font-size:30px; color:red;"></i></a></td>

<td> <a href="{{route('skype')}}" class="edit"><i class="la la-edit" data-toggle="tooltip" title="Edit" style="font-size:30px; color:red;"></i></a></td>


              </tr>
                <tr>

                    <td>{{$serial}}</td>

                         <td>
                   @foreach (Phone() as $phone)
                        {{$phone->number}}
                   @endforeach
                         </td>
                         <td>
                         @foreach (Email() as $email)
                         {{$email->number}}
                         @endforeach
                         </td>
                         <td>
                         @foreach (Fb() as $fb)
                         {{$fb->number}}
                         @endforeach
                         </td>
                         <td>
                         @foreach (Skype() as $skype)
                         {{$skype->number}}
                         @endforeach
                         </td>
                </tr>


            </tbody>
        </table>
        <!--end: Datatable -->
    </div>
</div>
@endsection


 @section('modals')



@endsection
