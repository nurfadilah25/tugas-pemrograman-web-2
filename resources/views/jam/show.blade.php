<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-3 py-2" href="{{ route('jam.index') }}">Kembali</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Jam</h5>
            <p class="card-text"><strong>Name:</strong> {{ $jam->name }}</p>
            <p class="card-text"><strong>Brand:</strong> {{ $jam->brand }}</p>
            <p class="card-text"><strong>Category:</strong> {{ $jam->category }}</p>
            <p class="card-text"><strong>Price:</strong> {{ $jam->price }}</p>
            <p class="card-text"><strong>Stock:</strong> {{ $jam->stock }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $jam->description }}</p>
        </div>
    </div>

</x-app>
