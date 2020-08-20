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
        <h3 class="kt-subheader__title">Send Email</h3>

        <span class="kt-subheader__separator kt-subheader__separator--v"></span>



    </div>

</div>
<!-- end:: Content Head -->

@endsection


@section('content')
<br><br><br><br>



<style type="text/css">
    .box {
        width: 600px;
        margin: 0 auto;
        border: 1px solid #ccc;
    }

    .has-error {
        border-color: #cc0000;
        background-color: #ffff99;
    }

    .list-type5 {
        width: 410px;
        margin: 0 auto;
    }

    .list-type5 ol {
        list-style-type: none;
        list-style-type: decimal !ie;
        margin: 0;
        margin-left: 1em;
        counter-reset: li-counter;
        display: block;
        float: right;
    }

    .list-type5 ol li {
        position: relative;
        margin-bottom: 1.5em;
        padding: 0.5em;
        background-color: #020342;
        padding-left: 58px;
        color: white;
    }

    .list-type5 a {
        text-decoration: none;
        color: black;
        font-size: 15px;
        font-family: 'Raleway', sans-serif;
    }

    .list-type5 li:hover {
        box-shadow: inset -1em 0 #6CD6CC;
        -webkit-transition: box-shadow 0.5s;
        /* For Safari 3.1 to 6.0 */
        transition: box-shadow 0.5s;
    }

    .list-type5 ol li:before {
        position: absolute;
        top: -0.3em;
        left: -0.5em;
        width: 1.8em;
        height: 1.2em;
        font-size: 2em;
        line-height: 1.2;
        font-weight: bold;
        text-align: center;
        color: white;
        background-color: #6CD6CC;
        transform: rotate(-20deg);
        -ms-transform: rotate(-20deg);
        -webkit-transform: rotate(-20deg);
        z-index: 99;
        overflow: hidden;
        content: counter(li-counter);
        counter-increment: li-counter;
    }
</style>


<br />
<br />
<br />
<div class="row">
    <div class="col-md-6">
        <div class="container box">
            <h3 align="center"> Send an Email </h3><br />
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <form method="post" action="{{url('admin/sendemail/send')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter Subject</label>
                    <textarea name="subject" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Enter Headline</label>
                    <textarea name="headline" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Enter First Paragraph</label>
                    <textarea name="message1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Enter Second Paragraph</label>
                    <textarea name="message2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Enter Email Group</label>
                    <input type="number" name="group" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" name="send" class="btn btn-info" value="Send" />
                </div>
            </form>

        </div>
    </div>


    <div class="col-md-5">
        <!-- Exercise and idea from: https://www.formget.com/css-lists/ -->

        <div class="list-type5 float-right" style="margin-top:300px;">
            <ol>
                <li>Travels Group </li>
                <li>Public Group </li>
                <li>International Group </li>
                <li>Medical Group </li>
                <li>Employee Group </li>
                <li>Corporate group </li>
                <li>Others </li>



            </ol>
        </div>
    </div>
</div>
@endsection
