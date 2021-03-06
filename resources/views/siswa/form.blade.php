<div class="form-group">
    {!! Form::label('nisn','NISN:',['class'=>'control-label']) !!}
    {!! Form::text('nisn',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nama_siswa','Nama:',['class'=>'control-label']) !!}
    {!! Form::text('nama_siswa',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tanggal_lahir','Tanggal Lahir:',['class'=>'control-label']) !!}
    {!! Form::date('tanggal_lahir',null,['class'=>'form-control','id'=>'tanggal_lahir']) !!}
</div>

<div class="form-group">
    {!! Form::label('jenis_kelamin','Jenis Kelamin:',['class'=>'control-label']) !!}
    <div class="radio">
        <label>{!! Form::radio('jenis_kelamin','L',['class'=>'form-control']) !!} Laki-laki</label>
        <label>{!! Form::radio('jenis_kelamin','P',['class'=>'form-control']) !!} Perempuan</label>
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
