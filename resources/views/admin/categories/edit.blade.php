@extends('layouts.admin')



@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">

        {!! Form::model($category,['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        {{--<div class="form-group">--}}
        {{--{!! Form::label('email', 'Email:') !!}--}}
        {{--{!! Form::email('email', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}
        {{----}}
        {{--<div class="form-group">--}}
        {{--{!! Form::label('role_id', 'Role:') !!}--}}
        {{--{!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class' => 'form-control'])!!}--}}
        {{--</div>--}}
        {{----}}
        {{--<div class="form-group">--}}
        {{--{!! Form::label('is_active', 'Status:') !!}--}}
        {{--{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}
        {{----}}
        {{--<div class="form-group">--}}
        {{--{!! Form::label('photo_id', 'Photo:') !!}--}}
        {{--{!! Form::file('photo_id', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}
        {{----}}
        {{--<div class="form-group">--}}
        {{--{!! Form::label('password', 'Password:') !!}--}}
        {{--{!! Form::password('password', ['class' => 'form-control']) !!}--}}
        {{--</div>--}}
        {{----}}

        <div class="form-group">
            {!! Form::submit('Update Category', ['class' => 'btn btn-primary col-sm-6']) !!}
        </div>


        {!! Form::close()  !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-6']) !!}
            </div>


        {!! Form::close()  !!}


    </div>


    <div class="col-sm-6">




    </div>


@stop