@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Post</div>

                <div class="panel-body">
                    {!! Form::open(['url' => url('addPost')]) !!}
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" name="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Cuerpo</label>
                        <textarea name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <button type="submit" class="btn btn-default">Guardar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
