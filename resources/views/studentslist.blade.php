<div class="card mb-3">
<img src="https://support.content.office.net/en-us/media/9baeb92c-fa30-474c-b8f9-c14d1532622b.png" class="card-img-top" alt-"...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">Find the All information about the Students</p>
   

<div class="col">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Secound Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
    
      <td>{{$student->cne }}</td>
      <td>{{$student->firstName }}</td>
      <td>{{$student->secoundName }}</td>
      <td>{{$student->age }}</td>
      <td>{{$student->speciality }}</td>
      <td>
    
<a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">EDIT</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

  </div>
</div>

