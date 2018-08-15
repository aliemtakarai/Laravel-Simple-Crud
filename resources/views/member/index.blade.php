@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('save'))
                <div class="alert alert-success">{{ session('save') }}</div>
            @elseif(session()->has('update'))
                <div class="alert alert-success">{{ session('update') }}</div>
            @elseif(session()->has('delete'))
                <div class="alert alert-success">{{ session('delete') }}</div>
            @endif
            <div class="card">
                <div class="card-header">Member Dashboard</div>
                <div class="card-body">
                    <a href="/create" class="btn btn-primary">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->nama }}</td>
                                <td>{{ $member->alamat }}</td>
                                <td>{{ $member->telepon }}</td>
                                <td><a href="/{{ $member->id }}/edit" class="btn btn-primary">Ubah</a>
                                    {{ Form::open(['url'=>'/'.$member->id, 'method'=>'delete']) }}
                                    {{ Form::submit('Hapus', ['class'=>'btn btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $members->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
