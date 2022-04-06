<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    p{
      color: red;
    }
  </style>
  <title>Student Data</title>
</head>
<body>
  <form action="{{route('student.update',$useredit->id)}}" method="post">
    @csrf
    @method('patch')
    <fieldset>
      <legend>Student Form</legend>
      <table border="1" style="border-color:bisque">
      
        <tr>
          <td>
          <label for="fullname">FullName:</label>
          <input type="text" name="fullname" id="fullname" value="{{$useredit->fullname}}" class="@error('fullname') is-invalid @enderror">
          @error('fullname')
            <p>{{$message}}</p>
            @enderror
          </td>
          <td>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="{{$useredit->email}}" class="@error('email') is-invalid @enderror">
            @error('email')
            <p>{{$message}}</p>
            @enderror
          </td>
        </tr>
        <tr>
          <td>
            <label for="address">Address:</label>
            <textarea name="address" id="address" cols="30" rows="2" class="@error('address') is-invalid @enderror">{{$useredit->address}}</textarea>
            @error('address')
            <p>{{$message}}</p>
            @enderror
          </td>
          <td>
            <label for="number">Phone_Number:</label>
            <input type="text" name="number" id="number" value="{{$useredit->number}}" class="@error('number') is-invalid @enderror">
            @error('number')
            <p>{{$message}}</p>
            @enderror
          </td>
        </tr>
      </table>
    </fieldset>
    <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>