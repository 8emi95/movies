@extends ('layouts.master')


@section ('content')

<table class="table">
    <thead>
        <td>Első film</td>
        <td>Második film</td>
    </thead>

    <tbody>
    @foreach ($shows as $show)
        <tr>
            @foreach ($movies as $movie)
            <td>{{ $movie->name }}</td>
                @if ($movie->id == $show->movie1_id)
                    <td>{{ $movie->name }}</td>
                @elseif ($movie->id == $show->movie2_id)
                    <td>{{ $movie->name }}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            <td>
            @foreach ($items as $item)
                @if ($item->movie_id == $show->movie1_id)
                    <li>{{ $item->name }}</li>
                @endif
            @endforeach
            </td>
            <td>
            @foreach ($items as $item)
                @if ($item->movie_id == $show->movie2_id)
                    <li>{{ $item->name }}</li>
                @endif
            @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection