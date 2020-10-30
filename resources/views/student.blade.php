<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}"
  </head>
  <body>
  @include("navbar")
  <div class="row header-container justify-content-center">
  <div class="header">
  <h1>Student Managememt System</h1>
  </div>
  </div>
@if($layout == 'index')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("studentslist")
</section>
<section class="col-md-5"></section>
</div>
</div>
@elseif($layout == 'create')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("studentslist")
</section>
<section class="col-md-5">

<div class="card md-3">
<img src="https://www.thebalancecareers.com/thmb/mPd2v7BOUSnC2JzVMyDaxg0yjbA=/300x200/filters:no_upscale():max_bytes(150000):strip_icc():saturation(0.2):brightness(10):contrast(5):format(webp)/school-books-on-desk--education-concept-871454068-5b548900c9e77c005b04fc8c.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enter the information of the new student</h5>
    <form action="{{url('/store')}}" method="post">
  @csrf
  <div class="form-group">
    <label>CNE</label>
    <input name="cne" type="text" class="form-control"  placeholder="Enter The CNE">
    </div>
  <div class="form-group">
    <label>First Name</label>
    <input name="firstName" type="text" class="form-control"  placeholder="Enter The First Name">
    </div>
  <div class="form-group">
    <label>Secound Name</label>
    <input type="text" name="secoundName" class="form-control"  placeholder="Enter The Secound Name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input name="age" type="text" class="form-control"  placeholder="Enter The Age">
    </div>
  <div class="form-group">
    <label>Speciality</label>
    <input type="text" name="speciality" class="form-control"  placeholder="Enter The Speciality">
  </div>
  <input type="submit" class="btn btn-info" value="save">
  <input type="reset" class="btn btn-warning" value="Reset">
  
</form>
  </div>
</div>



</section>
</div>
</div>
@elseif($layout == 'show')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("studentslist")
</section>
<section class="col-md-5"></section>
</div>
</div>
@elseif($layout == 'edit')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("studentslist")
</section>
<section class="col-md-5">
<div class="card md-3">
<img src="https://images.ctfassets.net/hrltx12pl8hq/6f2M9koJF7uhwGGao7WCX5/8683a9c8388dada729c7caeefc87872b/compressed_shutterstock_1274296330.jpg?fit=fill&w=800&h=300" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Edit the information of the  student</h5>
<form action="{{url('/update/'.$student->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label>CNE</label>
    <input value="{{$student->cne}}" name="cne" type="text" class="form-control"  placeholder="Enter The CNE">
    </div>
  <div class="form-group">
    <label>First Name</label>
    <input  value="{{$student->firstName}}" name="firstName" type="text" class="form-control"  placeholder="Enter The First Name">
    </div>
  <div class="form-group">
    <label>Secound Name</label>
    <input value="{{$student->secoundName}}" type="text" name="secoundName" class="form-control"  placeholder="Enter The Secound Name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input value="{{$student->age}}" name="age" type="text" class="form-control"  placeholder="Enter The Age">
    </div>
  <div class="form-group">
    <label>Speciality</label>
    <input value="{{$student->speciality}}" type="text" name="speciality" class="form-control"  placeholder="Enter The Speciality">
  </div>
  <input type="submit" class="btn btn-info" value="update">
  <input type="reset" class="btn btn-warning" value="Reset">
  
</form>

</div>

</section>
</div>
</div>
@endif
<footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>