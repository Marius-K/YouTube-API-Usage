@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ url('submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="query">Search for a video</label>
                            <input type="text" class="form-control" name="query" id="query">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
