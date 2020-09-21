@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="modal-body row">
            <div class="col-md-6">
                <h2>Goto Companies </h2>
                <a class="btn btn-success" href="{{ route('company.index') }}" title="Goto Company"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
            <div class="col-md-6">
                <h2>Goto Employees </h2>
                <a class="btn btn-success" href="{{ route('employee.index') }}" title="Goto Company"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>

    </div>


@endsection
