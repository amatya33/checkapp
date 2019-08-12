@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mx-auto col-md-8">
            <div class="card bg-light mb-3">
                
            <div class="card-header">
                User Check-in
            </div>

            <div class="card-body">

                <form method="POST" action="{{ url('create')}}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="user_id"><h2>User: </h2></label>
                    <input type="text" class="form-control" name="user_id" value="{{$user->id}}" readonly/><label>{{$user->username}}</label>
                    </div>
                    
                    <div>
                        <h5><p>Check Type:</p></h5>
                        <input type="checkbox" name="checktype[]" value="{{$checktype->id}}"> <label>{{$checktype->type}}</label>
                    </div>

                    {{-- <div class="form-group">
                        <h5><p>Check Type:</p></h5>
                        
                        <div>
                            <input type="checkbox" id="arrival" name="arrival">
                            <label for="checktype">Arrival</label>
                        </div>
                        <div>
                            <input type="checkbox" id="departure" name="departure">
                            <label for="checktype">Departure</label>
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <label for="latitude">Latitude: </label>
                        <input type="text" class="form-control" name="latitude" required/>
                    </div>

                    <div class="form-group">
                        <label for="longitude">Longitude: </label>
                        <input type="text" class="form-control" name="longitude" required/>                    
                    </div>

                    <div class="form-group">
                        <label for="accuracy">Accuracy: </label>
                        <input type="text" class="form-control" name="accuracy" required/>
                    </div>

                    <div class="form-group">
                        <label for="altitude">Altitude: </label>
                        <input type="text" class="form-control" name="altitude" required/>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Check-in</button>
                    <a class="btn btn-light" href="/post" role="button">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

                    {{-- <ul class="list-group">
                        @foreach ($companies as $company)
                            <li class="list-group-item"><a href="{{route('companies.show', ['id'=>$company->id])}}">{{ $company->name }}</a></li>
                        @endforeach
                    </ul> --}}