@extends ('layouts.master')


@section ('content')

<!-- <form method="post">
@csrf -->

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
                                <!-- <input type="radio" name="{{ 'item' . $item->id }}" value="{{ $movie->id }}" checked> -->
                                <input type="radio" name="{{ 'item' . $item->id }}" value="{{ $movie->id }}" class="item-radio" checked>
                            </div>
                        </td>
                    @else
                        <td>
                            <div class="radio">
                                <!-- <input type="radio" name="{{ 'item' . $item->id }}" value="{{ $movie->id }}"> -->
                                <input type="radio" name="{{ 'item' . $item->id }}" value="{{ $movie->id }}" class="item-radio">
                            </div>
                        </td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>
<!--
    <div class="form-group">
        <button type="submit" class="btn btn-default">Hozzáadás</button>
    </div>
-->
<!-- </form> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    $('.item-radio').click(function () {
        const item_id = $(this).attr('name').substring(4);
        const movie_id = $(this).attr('value');

        $.post('/assign', { item_id, movie_id })
            .done(() => {
            alert('A változtatások mentésre kerültek.');
            });
    });
});
</script>

@endsection
