<x-layout>

<x-slot:title>
rediģēt
</x-slot:title>

<form method="POST" action="/blogs/{{ $blog->id }}">
@csrf

@method('PUT')

<label>
<br>
rediģēt: 
<input name="category" value="{{$blog->category}}"/>
@error("category")
  <p>{{ $message }}</p>
@enderror
<br>
</label>

<br>
  <button>rediģēt</button>
</form>

</x-layout>