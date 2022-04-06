<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    p {
      color: red;
    }
    .container1{
      margin-top: 10px;
      font-size: 12px;
    }
  </style>
  <title>Student Data</title>
</head>

<body>
 
    <fieldset>
      <legend>Student Form</legend>
      <table border="1" style="border-color:bisque; width:100%; text-align:center">

        <tr>
          <th>Id</th>
          <th>FullName</th>
          <th>Email</th>
          <th>Address</th>
          <th>Number</th>
          <th>Action</th>
        </tr>
        @foreach ($users as $info)
        <tr>
          <td>{{$info->id}}</td>
          <td>{{$info->fullname}}</td>
          <td>{{$info->email}}</td>
          <td>{{$info->address}}</td>
          <td>{{$info->number}}</td>
          <td>
            <a href="{{route('student.edit',$info->id)}}"><i class='fas fa-edit'></i></a>

            <a href="javascript:void(0)" onclick="document.getElementById('deleteform.{{$info->id}}').submit()"><i class='far fa-trash-alt' style="color: red;"></i></a>
            <form method="POST" action="{{route('student.destroy',$info->id)}}" id="deleteform.{{$info->id}}">
              @method('DELETE')
              @csrf
        
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </fieldset>
    <div class="container1">
      {!! $users->links() !!}

    </div>
 
</body>

</html>