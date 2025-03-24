@auth
    <x-app-layout>
        
        <div>
            @foreach($rices as $rice)
            <form action="{{ route('delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $rice->id }}">
                <p>
                    vertrek: {{ $rice->departure }}<br>
                    tijdstip: {{ $rice->weekdays }} {{ $rice->departure_time }}<br>
                    aankomst: {{ $rice->destination }}<br>
                    tijdstip: {{ $rice->weekdays }} {{ $rice->arrival_time }}<br>
                    vervoersmiddel: {{ $rice->means_of_transport }}<br>
                </p> 
               
                <button type="submit" name="action" value="delete" class="bg-red-500 text-white hover:bg-red-700 px-4 py-2 rounded"><i class="fa-solid fa-floppy-disk"></i>delete</button>
                <button type="submit" name="action" value="edit" class="bg-blue-500 text-white hover:bg-blue-700 px-4 py-2 rounded"><i class="fa-solid fa-floppy-disk"></i>edit</button>

             </form>       
            @endforeach
        </div>
            
    </x-app-layout>
@else
            <a href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
            <p> Log in</p>   
            </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                    <p>Register</p>
                    </a>
                    @endif
        <x-guest-layout>
        @foreach($rices as $rice)
                    <p>
                        <br>vertrek: {{ $rice->departure }}<br>
                        tijdstip: {{ $rice->weekdays }} {{ $rice->departure_time }}<br>
                        aankomst: {{ $rice->destination }}<br>
                        tijdstip: {{ $rice->weekdays }} {{ $rice->arrival_time }}<br>
                        vervoersmiddel: {{ $rice->means_of_transport }}<br>
                    </p> 
                @endforeach
        </div>
    </x-guest-layout>
@endauth
