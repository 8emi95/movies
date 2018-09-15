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
            <td>{{ $show->movie1->title }}</td>
            <td>{{ $show->movie2->title }}</td>
        </tr>
        <tr>
            <td>
                <ul style="list-style: none; padding-left: 0">
                @foreach ($items as $item)
                    @if ($item->movie_id == $show->movie1_id)
                        <li>{{ $item->name }}</li>
                    @endif
                @endforeach
            </ul>
            </td>
            <td>
                <ul style="list-style: none; padding-left: 0">
                @foreach ($items as $item)
                    @if ($item->movie_id == $show->movie2_id)
                        <li>{{ $item->name }}</li>
                    @endif
                @endforeach
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection