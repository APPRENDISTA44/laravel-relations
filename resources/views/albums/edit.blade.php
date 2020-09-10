<h1>Modifica il tuo post</h1>

<form action="{{ route('album.update', $post) }}" method="post">
	@csrf
	@method('PUT')

	<div>
		<label>Title</label>
		<input type="text" name="title" value="{{ $post->title }}">
	</div>

	<div>
		<label>Content</label>
		<textarea name="content" rows="8" cols="80">{{ $post->content }}</textarea>
	</div>

	<div>
		<label>User</label>
		<select name="user_id">
			@foreach ($users as $user)
				<option value="{{ $user->id }}" {{ ($user->id == $post->user->id) ? 'selected' : '' }}>{{ $user->name }}</option>
			@endforeach
		</select>
	</div>

	<div>
		@foreach ($categories as $category)
			<div>
				<input type="checkbox" name="categories[]" {{ ($post->categories->contains($category)) ? 'checked' : '' }} value="{{ $category->id }}">
				<span>{{ $category->name }}</span>
			</div>
		@endforeach
	</div>

	<div>
		<input type="submit" value="Salva modifica">
	</div>
</form>
