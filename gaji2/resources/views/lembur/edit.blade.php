@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">EDIT LEMBUR PEGAWAI</div>

                <div class="panel-body">
                {!! Form::model($lp,['method'=>'PATCH', 'route'=>['lembur_pegawai.update', $lp->id]]) !!}
				<div class="form-group">
						{!! Form::label('Jumlah Jam','Jumlah Jam :') !!}
						{!!Form::text('jumlah_jam',null,['class'=>'form-control']) !!}
						
					</div>
				<div class="form-group">
                        {!! Form::submit('Save',['class'=>'btn btn-primary form control']) !!}
                        {!! Form::close() !!}
                    </div>
                 </div>
               </div>
             </div>
           </div>
           </div>
         @endsection
