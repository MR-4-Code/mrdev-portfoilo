<x-app-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <x-home.home></x-home.home>
    <x-home.clients.our-clients></x-home.clients.our-clients>
    <x-home.about-us></x-home.about-us>
    <x-home.plans></x-home.plans>
    <x-home.contact-us></x-home.contact-us>
</x-app-layout>
