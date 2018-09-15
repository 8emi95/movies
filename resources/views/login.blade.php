@extends ('layouts.master')


@section ('content')

<form>
@csrf

    <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" placeholder="Felhasznlónév">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Bejelentkezés</button>
    </div>

</form>

@endsection