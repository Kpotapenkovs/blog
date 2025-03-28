<x-layout>

<x-slot:title>Izveidot kontentu</x-slot:title>

<h1>Izveidot kontentu</h1>

<form method="POST" action="/blogs/{{ $contents->id }}">
@csrf
  <input name="contents" />
  @error("contents")
  <p>{{ $message }}</p>
  @enderror
  <button>Saglabāt</button>
</form>

</x-layout>