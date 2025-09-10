<x-layout title="Our Autobiographies">


    <div class="card-container">
        <div class="card">
            <img src="{{ asset('pictures/jace.jpg') }}" alt="Jacen">
            <div class="card-body">
                <h5 class="card-title">Jacen Luke A. Cielos</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="{{ route('biography.jacen') }}" class="btn btn-custom">View</a>
            </div>
        </div>


        <div class="card">
            <img src="{{ asset('pictures/moonie.jpg') }}" alt="moonie">
            <div class="card-body">
                <h5 class="card-title">Moonie Rey L. Leonen</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="{{ route('biography.moonie') }}" class="btn btn-custom">View</a>
            </div>
        </div> 


        <div class="card">
            <img src="{{ asset('pictures/Jake.jpg') }}" alt="Jake">
            <div class="card-body">
                <h5 class="card-title">Jake Ashley Y. Ballenas</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="{{ route('biography.jake') }}" class="btn btn-custom">View</a>
            </div>
        </div> 

        
        <div class="card">
            <img src="{{ asset('pictures/joross.jpg') }}" alt="jrss">
            <div class="card-body">
                <h5 class="card-title">Joross L. Manzano</h5>
                <p class="card-text">Click below to view my biography.</p>
                <a href="{{ route('biography.joross') }}" class="btn btn-custom">View</a>
            </div>
        </div> 
    </div>
</x-layout>
