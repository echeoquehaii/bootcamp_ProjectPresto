<x-layout>

    <livewire:profile-form/>

    @if (session('message'))
    <div class="alert alert-success mt-custom position-absolute w-100">
        {{ session('message') }}
    </div>
    @endif

</x-layout>

