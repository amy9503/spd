@extends('backend.layout')

@section('content')

    <!-- Page Content -->
    
        <h1>Tambah Sesi</h1><br/>

        @include('common.alert')
        @include('common.form_error')

        <form method="POST" action="{{ route('sesi.store') }}">
          
          @include('backend.sesi_form')

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Tambah Sesi</button>
            </div>
          </div>

        </form>

@endsection