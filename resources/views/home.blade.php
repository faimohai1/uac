@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                    @if(Auth::user()->isAdmin())
                    Congratulations!!
                    You are logged in as an admin!!!
                    
                    @endif
                    @elseif(Auth::user()->isAgent())
                    Congratulations!!
                    You are logged in as an Agent!!!
                    @else
                    Congratulations!!
                    You are logged in as a Customer!!!
                    @endif
                    
                </div>
               
               
            </div>
        </div>
    </div>
</div>
@endsection
