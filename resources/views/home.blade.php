@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9" style="padding-top: 100px">
            <div style="text-align:left"><h2>Home</h2></div>
            <div class="row pt-50">
                    <div class="card w-500">
                        <div class="card-body">
                            
                            <h5 class="card-title pull-left">Set your profile!</h5>

                            <h6 class="card-subtitle mb-2 text-muted">Select your interests before you get started</h6>
                            
                            <a href="#" class="btn btn-primary pull-right">Set profile</a>
                            
                        </div>
                    </div>
                </div>
                    <div class="card w-500">
                        <div class="card-body">
                            
                            <h5 class="card-title pull-left">Get started!</h5>

                            <h6 class="card-subtitle mb-2 text-muted">Find your first lecture consult here</h6>
                            
                            <a href="#" class="btn btn-primary pull-right">Find lecturer</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
