@extends('_layouts.master')

@section('body')
<div class="flex flex-col items-center">
    <img class="w-1/3" src="/assets/img/undraw_page_not_found_re_e9o6.svg" alt="404 - Page Not Found">
    <h2 class="text-2xl text-gray-700">Hmmmm...</h2>

    <hr class="block w-full max-w-lg mx-auto my-8 border">
    <a href="/">
        <x-button label="Back Home?"/>
    </a>

</div>
@endsection
