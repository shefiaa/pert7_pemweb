@extends('layouts.main')


@section('content')
    
<form action="{{ route('product.create') }}" method="POST">
    {{ csrf_field() }}
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
    <div class="mb-3">
      <label for="nama" class="form-label">Name</label>
      <input type="text" class="form-control" name="nama">
      <div id="emailHelp" class="form-text">masukan nama product yang di inginkan</div>
    </div>
   
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection