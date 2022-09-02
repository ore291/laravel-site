@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 body-font px-2 md:px-20">
    <div class="container mx-auto flex px-2 md:px-5 py-8 sm:py-16 md:flex-row flex-col items-center">
        <div class="lg:flex-grow sm:w-8/12 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                {{$$module_name_singular->name}}
            </h1>
            @if($$module_name_singular->intro != "")
            <p class="mb-8 leading-relaxed">
                {{$$module_name_singular->intro}}
            </p>
            @endif

            @include('frontend.includes.messages')
        </div>
        <div class="sm:w-4/12">
            <img class="object-cover object-center rounded shadow-md" alt="{{$$module_name_singular->name}}" src="{{$$module_name_singular->featured_image}}">
        </div>
    </div>
</section>

<section class="py-10 px-2 md:px-20">
    <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col">
        <div class="flex flex-col lg:flex-grow sm:w-8/12 sm:pr-8">
            <div class="pb-5">
                <p>
                    {!!$$module_name_singular->content!!}
                </p>
            </div>

            <hr>

            <div class="py-5">
                <div class="flex justify-between font-bold">
                    <div>
                        {{__('Written by')}}: {{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}
                    </div>
                    <div>
                        {{__('Published at')}}: {{$$module_name_singular->published_at->isoFormat('llll')}}
                    </div>
                </div>
            </div>


        
         
        </div>

        <div class="flex flex-col sm:w-4/12">
            <div class="py-5 sm:pt-0">
                <livewire:recent-posts />
            </div>
        </div>
    </div>
</section>

@endsection

@push ("after-style")

@endpush

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush