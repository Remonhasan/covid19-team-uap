@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Covid 19 Tacker | Affected Countries</div>

                <div class="card-body">
                   <input type="text" id="countryName" class="form-control mb-5" placeholder="type country name or city">
                   <a href="" type="submit" id="submitBtn" class="btn btn-primary form-control">Search...</a>
                   <a href="{{ route('welcome')}}" type="submit" id="submitBtn" class="btn btn-secondary form-control">Or Click for Prevention & Grocery Shop Info. </a>

                   <div class="row" id="result"></div>

                   <div class="card-footer text-center">Covid 19 Tracker | Powered by Remon Hasan</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
