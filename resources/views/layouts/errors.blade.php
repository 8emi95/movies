<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">
    @if (count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</div>