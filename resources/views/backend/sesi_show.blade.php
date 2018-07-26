@extends('backend.layout')

@section('content')

    <!-- Page Content -->
    
        <h1>Maklumat Sesi: {{ $sesi->name }}</h1><br/>

        @include('common.alert')
        @include('common.form_error')

        <form method="POST" action="{{ route('sesi.store') }}">
          
          <!--@include('backend.sesi_form')-->

          <p>Name: <b>{{ $sesi->name }}</b></p>
          <p>Status: <b>{{ $sesi->status ? 'Open' : 'Close' }}</b></p>
          <p>Pingat: <b>{{ $sesi->pingat }}</b></p></br>

          <div class="form-group row">
            <div class="col-sm-10">
              <a href="{{ url()->previous() }}">Back to senarai</a>
            </div>
          </div>

        </form>

@endsection