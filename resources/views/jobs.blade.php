<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h1> Jobs List </h1>
    @if (count($jobs) > 0)
        @foreach ($jobs as $job)
            <li>
                <p> {{ $job['title'] }} pays ${{ $job['salary'] }} per year. </p>
            </li>
        @endforeach
    @endif
</x-layout>
