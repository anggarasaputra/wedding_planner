@extends('layouts.admin.main')
@section('headerTitle', 'Update Message #' . $model->id)
@section('pageTitle', 'Update Message #' . $model->id)
@section('content')


    {!! Form::model($model, [
            'method' => 'PATCH',
            'url' => ['/admin/message', $model->id],
            'files' => true,
            'id' => 'formValidate',
        ]) !!}

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        
                        <div class="mrg-btm-20">
                            <a href="{{ route('message.index') }}" class="btn btn-primary btn-rounded btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                        </div>
                        
                        @include ('admin.message.form', ['submitButtonText' => 'Update'])
                    </div>
                </div>
            </div>
        </div>
        

	{!! Form::close() !!}
@endsection