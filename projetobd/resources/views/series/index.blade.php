<x-layout title="Séries">
    <ul>
        @foreach ($series as $ser)
            <li>{{ $ser }}</li>
        @endforeach
    </ul>
</x-layout>
