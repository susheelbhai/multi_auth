<x-user-layout>

    <x-slot name="head">
        <meta name="description" content="html 5 template">
        <meta name="author" content="">
        <title>TaxTDS</title>
    </x-slot>

    @include('user.pages.home._banner')
    @include('user.pages.home._categories')
    @include('user.pages.home._recent_listings')
    @include('user.pages.home._how-it-works')
    @include('user.pages.home._explore')
    @include('user.pages.home._feature-categories')
    {{-- @include('user.pages.home._blog') --}}
    {{-- @include('user.pages.home.partners') --}}


</x-user-layout>
