@extends('backend.layout')

@section('content')

    <!-- Page Content -->
    
        <h1>Tambah Pencalonan</h1><br/>

        @include('common.alert')
        @include('common.form_error')

        <form method="POST" action="{{ route('pencalonan.store') }}">
          
          @include('backend.pencalonan_form')

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>

        </form>

@endsection