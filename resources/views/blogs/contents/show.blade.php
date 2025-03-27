<x-layout>
  <x-slot:title>
    {{ $contents->contents }}
  </x-slot:title>
  <div><h1>{{ $contents->contents }}</h1></div>

  <h2><a href="/blogs/contents/{{$contents->id}}/edit" class="a">rediģēt</a></h2>

  <form method="POST" action="{{$contents->id}}">

  <br>

  @csrf
  @method("delete")

  <h2><input type="submit" name="delete" value="dzēst" class="a"></h2>

  </form>

</x-layout>