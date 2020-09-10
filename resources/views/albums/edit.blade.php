<h1>Modifica il tuo post</h1>

<form action="{{ route('album.update', $album) }}" method="post">
	@csrf
	@method('PUT')

	<div>
		<label>Title</label>
		<input type="text" name="title" value="{{ $album->title }}">
	</div>

  <div>
		<label>Title</label>
		<input type="text" name="artist" value="{{ $album->artist }}">
	</div>

	<div>
		<label>Year</label>
    <input type="number" name="year" value="{{ $album->year }}">
	</div>

	<div>
		@foreach ($tags as $tag)
			<div>
				<input type="checkbox" name="tags[]" {{ ($album->tags->contains($tag)) ? 'checked' : '' }} value="{{ $tag->id }}">
				<span>{{ $tag->name }}</span>
			</div>
		@endforeach
	</div>

	<div>
		<input type="submit" value="Salva modifica">
	</div>
</form>
