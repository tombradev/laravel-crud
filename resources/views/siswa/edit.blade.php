<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        {{-- <h1>Halo Laravel World Indonesia</h1> --}}
    <div class="container">
        <h1>Edit Data Siswa</h1>
              {{-- notifications --}}
        @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{ csrf_field() }} {{-- test the token is in place --}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">First Name</label>
                        <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" value="{{$siswa->firstname}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" value="{{$siswa->lastname}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sex</label>
                            <select name="sex" class="form-control" id="exampleFormControlSelect1">
                              <option>{{$siswa->sex}}</option>
                              <option>{{$siswa->sex}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Religion</label>
                            <input name="religion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Religion" value="{{$siswa->religion}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->address}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>      
        </div>
    </div>


    {{--  Bootstrap component  --}}

     

    {{--  bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

