<x-layout>
     <div class="max-w-3xl mx-auto">
        @foreach ($chirps as $chirp)
            
     
            <div class="card bg-base-100 shadow mt-8" style="border-radius: 12px; background-color:white;">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $chirp['author'] }}</div>
                        <div class="mt-2">{{ $chirp['message'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div>
                    </div>
                </div>
            </div>
               @endforeach
        </div>
        
</x-layout>