@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>
                @for ($i = 0; $i <= 5; $i++)


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @role('admin')
                        Hamza is logged in
                    @endrole
                    @permission('create-post')
                        You can easily create posts
                    @endpermission

                </div>
                <hr>
                @endfor
            </div>
        </div>
    </div>

</div>
@endsection

