@extends('frontend.layout')

@section('content')

  @include('common.alert')
  @include('common.form_error')

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">

        <form method="POST" action="{{ route('user.login.post') }}">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </form>

      </div>
    </section>

@endsection