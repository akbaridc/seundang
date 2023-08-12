@extends('templates.backend.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Data Member</h4>
                    <p class="card-title-desc">Daftar member </p>
                    {!! $dataTable->table(['class' => 'table table-striped dt-responsive nowrap table-striped align-middle w-100']) !!}

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@push('addon-scripts')
    {!! $dataTable->scripts() !!}
@endpush
