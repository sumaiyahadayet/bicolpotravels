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
        <h3 class="kt-subheader__title">Support</h3>

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

                    <div class="dropdown dropdown-inline">
                        <a href="{{route('add-support')}}" class="btn btn-success btn-icon-sm ">
                            <i class="la la-plus"></i>
                            New Data
                        </a>
                    </div>

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

                    <th title="Field #2">Image</th>
                    <th title="Field #3">Title</th>
                    <th title="Field #4">Description</th>
                    <th title="Field #4">Description In Button</th>

<th class="d-print-none"  title="Field #5">Order</th>
                    <th  title="Field #8">Actions</th>
                    
                    <th title="Field #4">Card_Type</th>
                    <th title="Field #5">Created At</th>
                </tr>
            </thead>
            <tbody>
              @php
                $serial=0;
              @endphp
                @foreach($data as $support)
                  @php
                    $serial++;
                  @endphp
                <tr>

                    <td>{{$serial}}</td>

                    <td>
                        <img src="{{asset($support->image)}}" style="height:80px;width:auto" alt="">
                    </td>
                    <td>{{$support->title}}</td>
                    <td ><span style="height: 150px;">{{$support->description}}</td></span>
                    <td ><span style="height: 150px;">{{$support->descriptionb}}</td></span>
<td>{{$support->order}}</td>
                    <td>
                     <a href="/admin/edit-support/{{$support->id}}" class="edit"><i class="la la-edit" data-toggle="tooltip" title="Edit"></i></a>
                     <a href="/admin/delete-support/{{$support->id}}" class="delete"> <i class="la la-trash" data-toggle="tooltip" title="Delete"></i> </a>
                    </td>

                    @if ($support->type==1)


                    <td>big</td>
                    @else
                    <td>small</td>
                    @endif
                    <td>{{$support->created_at}}</td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <!--end: Datatable -->
    </div>
</div>
@endsection


 @section('modals')



@endsection
