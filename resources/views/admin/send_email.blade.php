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
<br><brr><br><br>



  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>


  <br />
  <br />
  <br />
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
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>

  </div>

@endsection
