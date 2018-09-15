@extends ('layouts.master')


@section ('content')

<form method="post">
@csrf

    <div class="form-group">
        <select class="form-control" name="first">
            <option value="" disabled selected>Első film</option>
            @foreach ($movies as $movie)
            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <select class="form-control" name="second">
            <option value="" disabled selected>Második film</option>
            @foreach ($movies as $movie)
            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Hozzáadás</button>
    </div>

</form>

@endsection