<h1>Titolo Album: {{ $album->title }}</h1>
<p>Artista: {{ $album->artist }}</p>
<p>Anno: {{ $album->year }}</p>

<h2>Lista Canzoni</h2>
<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>

@if(!$album->tags->isEmpty())
	<div>
		<h3>Tags</h3>
		<ul>
			@foreach ($album->tags as $tag)
				<li>{{ $tag->name }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div>
  <a href="{{ route('album.index') }}">Home</a>
</div>
