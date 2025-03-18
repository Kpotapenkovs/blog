
<x-layout>

<x-slot:title> Blogs </x-slot:title>

<h1 class="virsraksts_center">Blogs</h1>


<form>

<h2><a href="/blogs/create" class="a">izveidot</a></h2>

</form>

<div>


  <ul>
    @foreach ($blogs as $blog)
      <li><br><a href="/blogs/{{ $blog->id }}">{{ $blog->category }}</a><hr></li>
    @endforeach
  </ul>


</div>

</x-layout>