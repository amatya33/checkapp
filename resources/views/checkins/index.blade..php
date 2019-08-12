@extends('layouts.app')

@section('content')

<div class="container">
    <!-- @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif -->

    <div class="card">
        <div class="card-header">
            <i class="icon-note" style="float:right"></i>User Check-Ins
            <!-- <div class="card-header-actions" style="float:right;">
                <a class="btn btn-primary btn-sm" href="/create" role="button">Add Post</a>
            </div> -->
        </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Check Type</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>Accuracy</th>
                            <th>Details</th>

                            <th colspan="2"><div style="margin-left: 40%;">Action</div></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($checkins as $checkin)
                        <tr>
                            <td>{{$checkin['user_id']}}</td>
                            <td>{{$checkin['checktype']}}</td>
                            <td>{{$checkin['longitude']}}</td>
                            <td>{{$checkin['latitude']}}</td>
                            <td>{{$checkin['accuracy']}}</td>
                            <td>{{$checkin['details']}}</td>

                            <td><div  style="float:right;"><a href="{{action('CheckinsController@edit', $checkin['id'])}}" class="btn btn-primary">Edit</a></div>
                            </td>
                            <td>
                                <form action="{{action('CheckinsController@destroy', $checkin['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
