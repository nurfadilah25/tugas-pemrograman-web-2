<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary my-3 py-2" href="{{ route('jam.create') }}">Tambah Data Jam</a>

    <table class="table table-bordered border-dark table-hover">
        <thead>

            <th>No</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Description</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($jams as $jam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jam->name }}</td>
                    <td>{{ $jam->brand }}</td>
                    <td>{{ $jam->category }}</td>
                    <td>{{ $jam->price }}</td>
                    <td>{{ $jam->stock }}</td>
                    <td>{{ $jam->description }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('jam.edit', $jam->id) }}">edit</a>
                        <a class="btn btn-info btn-sm" href="{{ route('jam.show', $jam->id) }}">Show</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
