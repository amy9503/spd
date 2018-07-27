@extends('backend.layout')

@section('content')

    <!-- Page Content -->
    
        <h1>Edit Pencalonan: {{ $calon->name }}</h1><br/>

        @include('common.alert')
        @include('common.form_error')

        <form method="POST" action="{{ route('pencalonan.update', $calon->id) }}">
          <!-- @method('PUT') -->
          {{ method_field('PUT') }}
          @include('backend.pencalonan_form')

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ url()->previous() }}">Back</a>
            </div>
          </div>

        </form>

@endsection