@auth
    <x-app-layout>
    <div class="card mt-5">
  <h2 class="card-header">Add New rise</h2>
  <div class="card-body">
  

  
    <form action="{{ route('newRise') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="inputDeparture" class="form-label"><strong>departure:</strong></label>
            <input 
                type="text" 
                name="departure" 
                class="form-control @error('departure') is-invalid @enderror" 
                id="inputDeparture" 
                placeholder="departure">
            @error('departure')
                <div class="form-text text-danger">{{ $departure }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputDestination" class="form-label"><strong>destination:</strong></label>
            <input 
                class="form-control @error('destination') is-invalid @enderror" 
                name="destination" 
                id="inputDestination" 
                placeholder="destination">
            @error('destination')
                <div class="form-text text-danger">{{ $destination }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputDeparture_time" class="form-label"><strong>departure_time:</strong></label>
            <input 
                type='time'
                step="2"
                class="form-control @error('departure_time') is-invalid @enderror" 
                name="departure_time" 
                id="inputDeparture_time" 
                placeholder="departure_time">
            @error('departure_time')
                <div class="form-text text-danger">{{ $departure_time }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputArrival_time" class="form-label"><strong>arrival_time:</strong></label>
            <input 
                type='time'
                step="2"
                class="form-control @error('arrival_time') is-invalid @enderror" 
                name="arrival_time" 
                id="inputArrival_time" 
                placeholder="arrival_time">
            @error('arrival_time')
                <div class="form-text text-danger">{{ $arrival_time }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="inputWeekdays" class="form-label"><strong>weekdays:</strong></label>
            <input 
                class="form-control @error('weekdays') is-invalid @enderror" 
                name="weekdays" 
                id="inputWeekdays" 
                placeholder="weekdays">
            @error('weekdays')
                <div class="form-text text-danger">{{ $weekdays }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputDelete_time" class="form-label"><strong>delete_time:</strong></label>
            <input 
                type='date'
                class="form-control @error('delete_time') is-invalid @enderror" 
                name="delete_time" 
                id="inputDelete_time" 
                placeholder="delete_time">
            @error('delete_time')
                <div class="form-text text-danger">{{ $delete_time }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputMeans_of_transport" class="form-label"><strong>means_of_transport:</strong></label>
            <input 
                class="form-control @error('means_of_transport') is-invalid @enderror" 
                name="means_of_transport" 
                id="inputMeans_of_transport" 
                placeholder="means_of_transport">
            @error('means_of_transport')
                <div class="form-text text-danger">{{ $means_of_transport }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputPlaces" class="form-label"><strong>places:</strong></label>
            <input 
                class="form-control @error('places') is-invalid @enderror" 
                name="places" 
                id="inputPlaces" 
                placeholder="places">
            @error('places')
                <div class="form-text text-danger">{{ $places }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  
  </div>
</div>
</x-guest-layout>
@endauth
