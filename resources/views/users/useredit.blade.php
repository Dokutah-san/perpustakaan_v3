@extends('layout')

@section('content')
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <h3>Edit User</h3>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">users</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        @foreach($users as $u)
                                        <form action="/editsave/{{$u->user_id}}" method="post" class="col-4">
                                            @csrf
                                        <div class="form-group">
                                        <label for="Username">Username</label> 
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="{{$u->username}}">
                                        @error('username')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                        <label for="Password">Password</label> 
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                        <i class="text-muted">Abaikan password jika ada perubahan!</i>
                                        @error('password')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                        <label for="Level">Level</label> 
                                        <select name="level" id="" class="form-control">
                                            <option selected hidden value="{{$u->level}}">{{ucfirst($u->level);}}</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Petugas">Petugas</option>
                                        </select>
                                        @error('level')
                                        <label class="text-danger">{{$message}}</label>
                                        @enderror
                                        </div>

                                        <br>
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <a href="/data_users" class="btn btn-secondary">Kembali</a>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
@endsection