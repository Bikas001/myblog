@extends('../layouts.publicUserlayouts')


@section('content')
    <div class="container">
        <div class="row user-details">
            <div class="col-xl-4 ">
                <h1>Edit Profile</h1>
                {!! Form::open(['method'=>'PATCH','action'=>['App\Http\Controllers\UserProfileController@update',$user->id]]) !!}

                {!! Form::token() !!}
                <div class="form-group">

                 {{Form::label('Full name', 'Full Name')}}
                {!! Form::text('name',$user->name,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Email', 'Email Address') !!}
                    {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                   {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
