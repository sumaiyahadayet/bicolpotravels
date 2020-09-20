<!DOCTYPE html>
<html>
 <head>
      <title>Bicolpo Travels | A Different Feel</title>
      <link rel="icon" href="{{asset('assets/images/title-logo.png')}}" type="image/icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <style>
  * {
    font-family: 'Raleway', sans-serif;
  }

  a {
    color: #fff;
    -webkit-transition: 0.3s;
    padding: 0 0.5rem;
  }

  a:hover {
    color: rgba(33, 150, 243, 1);
  }

  button {
    border-radius: 50px;
    background: rgba(33, 150, 243, 1);
    border: solid 1px rgba(33, 150, 243, 1);
    margin-top: 20px;
    font-size: 1rem;
    padding: 8px 18px;
    color: #fff;
    -webkit-transition: 0.3s;
  }

  button:hover {
    background: #fff;
    cursor: pointer;
    color: rgba(33, 150, 243, 1);
    border: solid 1px #fff;
  }

  .background {
    background-image: linear-gradient(rgb(132 152 150 / 13%), rgb(9 187 255 / 52%)), url(https://static.pexels.com/photos/299836/pexels-photo-299836.jpeg);
    background-size: cover;
    height: 80vh;
  }



  .card {
    position: relative;
    color: #fff;
    background: linear-gradient(rgba(33, 150, 243, 1), rgba(33, 150, 243, 0.18));
    width: 600px;
    height: 250px;
    margin: 0 auto;
    top: 20%;
    -webkit-box-shadow: 0px 8px 28px 8px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 8px 28px 8px rgba(0,0,0,0.5);
  box-shadow: -2px -4px 20px 9px rgb(33 146 226 / 38%);
  }

  .info {
    float: left;
    margin-top: 5%;
    padding-left: 5%;
    width: 40%;
  }

  .picture {
    background-image: url('{{asset('assets/images/unsubscribe.jpg')}}');
    background-position: 10% 20%;
    float: right;
    height: 100%;
    width: 55%;
    background-size: cover;
    -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 30% 100%);
  clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 30% 100%);
    z-index: 99;
  }
    </style>
 </head>
 <body>
 <div>
   <div class="background">

     <div class="card">
       <section class=info>
         <h2>You are successfully unsubscribed!</h2>
         <p>You won't get this type of emails anymore.</p>
         </section>

         <aside class="picture">
         </aside>

     </div>

   </div>
 </div>

</body>
</html>
