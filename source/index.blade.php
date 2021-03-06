@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1>{{ $page->siteName }}</h1>

            <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">For once, <br class="hidden sm:block">and for all.</p>

            <div class="flex my-10">
                <a href="/docs/welcome" title="Learn more about {{ $page->siteName }}">
                    <x-button label="Learn more about us"/>
                </a>
            </div>
        </div>

        <img src="/assets/images/familytribute.png" alt="{{ $page->siteName }} large logo" class="w-full md:w-1/2 mx-auto mb-6 lg:mb-0 rounded-lg">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 p-5 md:w-1/3 bg-white rounded-lg">
            <img src="/assets/img/undraw_photos_re_pvh3.svg" class="w-1/2" alt="pictures icon">

            <h3 class="text-2xl text-purple-900 mb-0">Your prized <br>family pictures</h3>

            <p>Don't let your oldest family photos remain hidden in your grandma's old shoebox!</p>
            <p>Put them where they can be admired by all!</p>
        </div>

        <div class="mb-8 mx-3 p-5 md:w-1/3 bg-white rounded-lg">
            <img src="/assets/img/undraw_book_lover_re_rwjy.svg" class="w-1/2" alt="stories icon">

            <h3 class="text-2xl text-purple-900 mb-0">Share <br>your families stories</h3>

            <p>Free the memories of your family's past from the clutches of a photocopied scrapbook.</p>
            <p>Share them with your friends on Facebook or Twitter.</p>
        </div>

        <div class="mb-8 mx-3 p-5 md:w-1/3 bg-white rounded-lg">
            <img src="/assets/img/undraw_engineering_team_u99p.svg" class="w-1/2" alt="team icon">

            <h3 class="text-2xl text-purple-900 mb-0">Contribute <br>as a team.</h3>

            <p>Make sure key people have access to the history.</p>
            <p>Work together to narrow down all the details!</p>
        </div>
    </div>
</section>
@endsection
