@extends('layout')

@section('content')
<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
                            <h3>Data Users</h3>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="card-text">
                                        <a href="useradd" class="btn btn-primary">Tambah User</a>
                                        <hr>
                                        @if(session('success'))
                                        <div class="alert bg-success text-light">{{session('success')}}</div>
                                        @endif
                                        <table class="table border">
                                        <tr>
                                            <td>No</td>
                                            <td>Username</td>
                                            <td>Level</td>
                                            <td>Aksi</td>
                                        </tr>
                                        @php
                                        $no=1;
                                        @endphp
                                        @foreach($users as $u)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$u->username}}</td>
                                            <td>{{$u->level}}</td>
                                            <td>
                                                <a href="/useredit/{{$u->user_id}}" class="btn btn-success">Edit</a>
                                                <a href="/delete/{{$u->user_id}}" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    </div>
                                </div>
@endsection