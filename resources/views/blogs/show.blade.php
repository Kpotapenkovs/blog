
<x-layout>
  <x-slot:title>
    {{ $blog->category }}
  </x-slot:title>
  <div><h1>{{ $blog->category }}</h1></div>

  <h2><a href="/blogs/{{$blog->id}}/edit" class="a">rediģēt</a></h2>

  <form method="POST" action="{{$blog->id}}">

  <br>

  @csrf
  @method("delete")

  <h2><input type="submit" name="delete" value="dzēst" class="a"></h2>

  </form>

  <form>
  <ul>

    @foreach ($blog->contents as $content)
      <li><br><a href="/blogs/contents/{{ $content->id }}">{{ $content->contents }}</a><hr></li>
    @endforeach
  
  </ul>
  </form>

</x-layout>