@extends ('layouts.master')


@section ('content')

<form method="post">
@csrf

    <div class="form-group">
        <input type="text" class="form-control" id="title" name="title" placeholder="Film címe">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Hozzáadás</button>
    </div>

</form>

@endsection