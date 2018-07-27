@extends('backend.layout')

@section('content')

    <!-- Page Content -->
    
    <h1>Senarai Pencalonan</h1><br/>

    @include('common.alert')

    <table class="table">
      <thead>
        <tr>
          <th>Sesi Name</th>
          <th>Calon Name</th>
          <th>No IC</th>
          <th>Email</th>
          <th>Asas</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($calons as $calon)
        <tr>
          <td>{{ $calon->sesi->name }}</td>
          <td>{{ $calon->name }}</td>
          <td>{{ $calon->icno }}</td>
          <td>{{ $calon->email }}</td>
          <td>{{ str_limit($calon->asas,10) }}</td>
          <td>{{ $calon->created_at->format('d M Y') }}</td>
          <td>{{ $calon->updated_at->format('d/M/Y') }}</td>
          <td>
            <a href="{{ route('pencalonan.edit', $calon->id) }}">Edit</a>
            <form method="POST" action="{{ route('pencalonan.destroy', $calon->id) }}"
              style="display: inline;">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-link" value="Delete" onclick="return confirm('Are you to delete?')">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  

@endsection