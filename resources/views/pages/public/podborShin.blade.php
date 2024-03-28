<x-public.layout>
    <x-slot:head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" />
        @viteReactRefresh
    </x-slot:head>
    <section class="catalog-section container" id="app-podbor-shin" ></section>
    <x-slot:scripts>
        @vite(['resources/js/apps/podborShin.jsx'])
    </x-slot:scripts>
</x-public.layout>

