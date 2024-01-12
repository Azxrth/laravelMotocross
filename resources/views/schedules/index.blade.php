<!-- resources/views/schedules/index.blade.php -->

@extends('layouts.main')

@section('content')
    <h1>Schedules</h1>

    <a href="{{ route('schedules.create') }}" class="btn btn-primary">Create Schedule</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Training</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>{{ $schedule->start_date }}</td>
                    <td>{{ $schedule->end_date }}</td>
                    <td>{{ $schedule->training->name }}</td>
                    <td>
                        <!-- Add edit and delete buttons -->
                        <a href="" class="btn btn-primary">Edit</a>
                        <form action="" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection