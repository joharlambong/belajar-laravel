@extends('template')

@section('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>
        {!! Form::open(['url'=>'siswa']) !!}
        @include('siswa.form',['submitButtonText'=>'Tambah Siswa'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    <div id="footer">
        <p>&copy; 2022 LaravelApp</p>
    </div>
@stop
