@extends('layouts.master')

@section('content')
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
@endsection

