@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
 
                <div class="card-body">
                    @if(auth()->user()->user_type == "Admin")
                    <p>Anda Masuk Sebagai Admin</p>
                    <a href="{{url('blog')}}" class="btn-btn-primary">Masuk</a>
                    @else
                    <p>Anda Masuk Sebagai User</p>
                    <div class=”panel-heading”>Item User Belum Disediakan</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection