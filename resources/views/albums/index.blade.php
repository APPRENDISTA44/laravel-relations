<ul>
  @foreach ($albums as $album)
    <li>
      <span>Titolo: {{ $album->title }}</span>
      <a href="{{ route('album.show', $album) }}">Mostra dettagli</a>
      <a href="{{ route('album.edit', $album) }}">Modifica</a>
    </li>
  @endforeach
</ul>
