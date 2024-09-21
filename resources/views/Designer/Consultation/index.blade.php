@extends('Designer.master')

@section('content')

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Consultations List</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Available Days</th>
                        <th>Available Time Slots</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultations as $consultation)
                        <tr>
                            <td>{{ $consultation->id }}</td>
                            <td>{{ $consultation->days }}</td>
                            <td>{{ json_decode($consultation->time) }}</td>
                            <td>{{ $consultation->user_id }}</td>
                            <td>{{ $consultation->created_at }}</td>
                            <td>{{ $consultation->updated_at }}</td>
                            <td>
                                <a href="{{ route('consultations.edit', $consultation->id) }}">Edit</a>
                                <form action="{{ route('consultations.destroy', $consultation->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
