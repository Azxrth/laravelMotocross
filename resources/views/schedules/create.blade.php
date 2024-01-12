<!-- resources/views/schedules/create.blade.php -->

@extends('layouts.main')

@section('content')
    <h1>Create Schedule</h1>

    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="training_id">Training</label>
            <select class="form-control" id="training_id" name="training_id" required>
                @foreach ($trainings as $training)
                    <option value="{{ $training->id }}">{{ $training->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection