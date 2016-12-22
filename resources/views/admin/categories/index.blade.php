@extends('layouts.admin')



@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">

        {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store', 'files'=> true]) !!}


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
                {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
            </div>


        {!! Form::close()  !!}


    </div>


    <div class="col-sm-6">

        @if($categories)

            <table class="table">
               <thead>
                 <tr>
                   <th>id</th>
                   <th>Name</th>
                   <th>Created date</th>
                 </tr>
               </thead>
               <tbody>

               @foreach($categories as $category)

                 <tr>
                   <td>{{$category->id}}</td>
                   <td>{{$category->name}}</td>
                   <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                 </tr>

               @endforeach
               </tbody>
            </table>

        @endif

    </div>


@stop