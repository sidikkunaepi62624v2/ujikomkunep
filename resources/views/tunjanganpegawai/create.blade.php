@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Tunjangan Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai')}}" class="btn btn-success btn-block">Kembali</a><br>

                    @if($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <li><span>{{ $err }}</span></li>
                            @endforeach
                        </div>
                    @endif
                    
                    {!! Form::open(['url'=>'TunjanganPegawai'])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Tunjangan','Kode Tunjangan')!!}
                        {!! Form::text('kode_tunjangan',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Pegawai Id','Pegawai Id')!!}
                        {!! Form::text('pegawai_id',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('save',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
