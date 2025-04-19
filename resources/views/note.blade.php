<x-layout>

    <x-slot:heading>
    </x-slot:heading>
    
  
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-6 mt-8 border border-gray-200">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $note->title }}</h1>
        <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($note->created_at)->format('F j, Y') }}</p>
      
        <p class="text-gray-700 text-base leading-relaxed whitespace-pre-line">
          {{ $note->content }}
        </p>
      
        <div class="mt-6 flex justify-between items-center">
          <a href="/" class="text-sm text-indigo-600 hover:underline">&larr; Back to notes</a>
      
          {{-- <div class="space-x-2">
            <a href="/notes/{{ $note->id }}/edit" class="px-4 py-2 text-sm bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
              Edit
            </a>
            <form action="/notes/{{ $note->id }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-4 py-2 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                Delete
              </button>
            </form>
          </div> --}}
        </div>
      </div>
      
  
  </x-layout>