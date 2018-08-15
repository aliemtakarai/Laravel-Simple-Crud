@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Member Dashboard</div>

                <div class="card-body">
                    {{ Form::model($member, ['url'=>['/', $member->id], 'method'=>'put']) }}
                    <div class="form-group">
                        {{ Form::label('nama', 'Nama') }}
                        {{ Form::text('nama',$member->nama,['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('alamat', 'Alamat') }}
                        {{ Form::text('alamat',$member->alamat,['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('telepon', 'Telepon') }}
                        {{ Form::number('telepon',$member->telepon,['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Simpan', ['class'=>'btn btn-primary']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
