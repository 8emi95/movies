@extends ('layouts.master')


@section ('content')

<form method="post">
@csrf

    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Név (pl. Pop Corn)">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Darabszám (pl. 800)">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="price" name="price" placeholder="Ár (pl. 15 $)">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Hozzáadás</button>
    </div>

</form>

@endsection
