@extends ('layouts.master')


@section ('content')

<form method="post">
@csrf

    <div class="form-group">
        <table class="table">
            <tr>
                <td></td>
                @foreach ($movies as $movie)
                    <td>{{ $movie->title }}</td>
                @endforeach
            </tr>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                @foreach ($movies as $movie)
                    @if ($movie->id == $item->movie_id)
                        <td>
                            <div class="radio">
                                <input type="radio" name="{{ 'item' . $item->id }}" value="{{ $movie->id }}" checked>
                                <!-- <input type="radio" name="{{ $item->name }}" value="{{ $movie->id }}" checked> -->
                            </div>
                        </td>
                    @else
                        <td>
                            <div class="radio">
                                <input type="radio" name="{{ 'item' . $item->id }}" value="{{ $movie->id }}">
                                <!-- <input type="radio" name="{{ $item->name }}" value="{{ $movie->id }}"> -->
                            </div>
                        </td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Hozzáadás</button>
    </div>

</form>

@endsection
