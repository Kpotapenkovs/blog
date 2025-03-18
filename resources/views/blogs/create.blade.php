<x-layout>

<x-slot:title>Izveidot blogu</x-slot:title>

<h1>Izveidot blogu</h1>

<form method="POST" action="/blogs">
@csrf
  <input name="category" />
  @error("category")
  <p>{{ $message }}</p>
  @enderror
  <button>Saglabāt</button>
</form>

</x-layout>