<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
    @if (Auth::check())
        <a class="py-2 d-none d-md-inline-block mr-auto" href="/add-movie">Film hozzáadása</a>
        <a class="py-2 d-none d-md-inline-block mr-auto" href="/add-item">Termék hozzáadása</a>
        <a class="py-2 d-none d-md-inline-block mr-auto" href="/assign">Film-Termék hozzárendelés</a>
        <a class="py-2 d-none d-md-inline-block mr-auto" href="/combine">Kombinált műsor készítése</a>

        <a class="py-2 d-none d-md-inline-block mr-auto" href="/shows">Műsorok</a>

        <a class="py-2 d-none d-md-inline-block ml-auto" href="/logout">Kijelentkezés</a>
    @else
        <a class="py-2 d-none d-md-inline-block ml-auto" href="/login">Bejelentkezés</a>
    @endif
    </div>
</nav>
