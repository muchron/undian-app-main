@extends('admin.layouts.app')
@include('admin.contents.peserta_umum.custom.styles')
@section('title')
    Peserta Umum
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="accordion mb-3" id="accordionImport">
                <div class="card accordion-item">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#accordionImportMenu" aria-expanded="true" aria-controls="accordionImportMenu">
                            Import Data Peserta
                        </button>
                    </h2>
                    <div id="accordionImportMenu" class="accordion-collapse collapse" data-bs-parent="#accordionImport">
                        <div class="accordion-body">
                            <form id="importdata">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="File"><span class="text-danger">*</span> File</label>
                                    <input type="file" name="file" class="form-control" accept=".xlsx">
                                </div>
                                <div class="form-group mt-2">
                                    <button onclick="importFile()" id="btn-import" type="button" class="btn btn-primary btn-sm">
                                        <span class="bx bx-import"></span> Import Data Peserta
                                    </button>
                                    <button type="reset" class="btn btn-secondary btn-sm">
                                        <span class="bx bx-reset"></span> Hapus File
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Peserta Umum</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! $dataTable->table([
                            'id' => 'pesertaumum-table',
                            'class' => 'table table-hover table-bordered table-striped',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.contents.peserta_umum.modals.nomor_undian_peserta')
@endsection
@include('admin.contents.peserta_umum.custom.scripts')
