<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        {{-- <h1>Halo Laravel World Indonesia</h1> --}}
    <div class="container">
              {{-- notifications --}}
        @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
        @endif

        <div class="row">
            <div class="col-6">
                    <h1>Halo Laravel World Indonesia</h1>
            </div>
            <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-md-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Siswa
                    </button>
            </div>
            <table class="table table-hover">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Religion</th>
                        <th>Address</th>
                    </tr>
                    @foreach ($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->firstname}}</td>
                        <td>{{$siswa->lastname}}</td>
                        <td>{{$siswa->sex}}</td>
                        <td>{{$siswa->religion}}</td>
                        <td>{{$siswa->address}}</td>
                    </tr>
                    @endforeach
                </table>
        </div>
    </div>

{{--         <h1>Halo Laravel World Indonesia</h1>
{{-- {{dd($data_siswa)}} {{-- -- check if the data is going to the view from DB --}}  --}}

    {{--  Bootstrap component  --}}

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form action="/siswa/create" method="POST">
                        {{ csrf_field() }} {{-- test the token is in place --}}
                            <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Sex</label>
                                <select name="sex" class="form-control" id="exampleFormControlSelect1">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Religion</label>
                                <input name="religion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Religion">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
            </div>
          </div>
        </div>
      </div>


    {{--  bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

