@extends('admin.layouts.app')
@include('admin.contents.pemenang_undian_umum.custom.styles')
@section('title')
    Pemenang Undian Umum
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pemenang Undian Umum</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! $dataTable->table([
                            'id' => 'pemenangundianumum-table',
                            'class' => 'table table-hover table-bordered table-striped',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin.contents.pemenang_undian_umum.custom.scripts')
