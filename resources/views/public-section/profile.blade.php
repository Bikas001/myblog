@extends('../layouts.publicUserlayouts')

@section('content')
    <style>
        .user-details{
            margin-top: 100px;
        }
    </style>
<div></div>
    <div class="container">
        <div class="row user-details">
            <div class="col-xl-4 ">


                @foreach($user_details as $details)
                    <p>User Name: <span class="text-primary float-right">{{$details->name}}</span><br>
                        Email: <span class="text-primary float-right">{{$details->email}}</span><br>
                        User Type:<span class="text-primary float-right"> {{$user_type}}</span><br>
                        Account Created At:<span class="text-primary float-right"> {{$details->created_at}}</span>

                        <br><br>
                        <a href="{{route('userprofile.edit',$details->id)}}" class="btn btn-primary">Edit your Profile</a>
                    </p>
                @endforeach
            </div>
            <div class="col">

            </div>

        </div>

    </div>

@endsection
