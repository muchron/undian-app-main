@extends('admin.layouts.app')
@section('title')
@endsection
@section('content')
    @if (Session::get('success'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
@endsection
