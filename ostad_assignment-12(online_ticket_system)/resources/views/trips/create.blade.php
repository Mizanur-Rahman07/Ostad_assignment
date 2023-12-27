<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Trip</title>
</head>
<body>
    <h1>Create Trip</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('trips.store') }}" method="POST">
        @csrf
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        
        <label for="location_id">Location:</label>
        <select id="location_id" name="location_id" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Trip</button>
    </form>
</body>
</html>
