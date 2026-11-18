<h1>{{ $title }}</h1>



@if (empty($count))
    <FONT COLOR="red">No se ha encontrado ninguna película</FONT>
@else
    <h3>Hay {{ $count }} peliculas</h3>
@endif
