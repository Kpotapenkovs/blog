<x-layout>

<x-slot:title>
rediģēt
</x-slot:title>

<form method="POST" action="/blogs/{{ $contents->id }}">

@csrf

@method('PUT')

<label>
<br>
rediģēt: 
<input name="contents" value="{{$contents->contents}}"/>
@error("content")
  <p>{{ $message }}</p>
@enderror
<br>
</label>

<br>
  <button>rediģēt</button>
</form>

</x-layout>