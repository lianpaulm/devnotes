<x-layout>

  <x-slot:heading>
    Your Notes
  </x-slot:heading>
  

  <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($notes as $note)
      <div class="bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition duration-300 border border-gray-200">
        <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $note->title }}</h2>
        <p class="text-sm text-gray-600 line-clamp-3">{{ $note->content }}</p>
        <div class="mt-4 flex justify-end">
          <a href="/notes/{{ $note->id }}" class="text-indigo-600 text-sm font-medium hover:underline">View</a>
        </div>
      </div>
    @endforeach
  </div>
  

</x-layout>