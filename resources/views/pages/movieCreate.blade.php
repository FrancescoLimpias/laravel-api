@extends('layouts.main')

@section('title', 'Create movie')

@section('content')
    <h2>
        Create a movie record
    </h2>

    <form method="POST" action="/movies">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="form-group">
            <label for="cashout">Cashout</label>
            <input type="number" class="form-control" id="cashout" name="cashout" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
