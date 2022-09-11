@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}}'s Profile @endsection

@section('content')

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-7xl mx-auto px-4 sm:px-6 py-10">
    <div class="col-span-1">
        <div class="text-center mb-8 md:mb-0">
            <img class="w-48 h-48 object-cover rounded-lg mx-auto -mb-24" src="{{asset($$module_name_singular->avatar)}}" alt="{{$$module_name_singular->name}}" />
            <div class="bg-white shadow-lg rounded-lg px-8 pt-32 pb-10 text-gray-400">
                <h3 class="font-title text-gray-800 text-xl mb-3">
                    {{$$module_name_singular->name}}
                </h3>
                
                @if($userprofile->url_website)
                <a class="text-blue-800 hover:text-gray-800" target="_blank" href="{{$userprofile->url_website}}">
                    {{$userprofile->url_website}}
                </a>
                @else
                <a class="text-blue-800 hover:text-gray-800" href="{{route('frontend.users.profile', encode_id($$module_name_singular->id))}}">
                    {{route('frontend.users.profile', encode_id($$module_name_singular->id))}}
                </a>
                @endif
              

                @auth
                @if (auth()->user()->id == $$module_name_singular->id)
                <div class="mt-8">
                    <a href="{{ route("frontend.users.profileEdit", encode_id($$module_name_singular->id)) }}">
                        <div class="w-full text-sm px-6 py-2 transition ease-in duration-200 rounded text-gray-500 hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
                            Edit
                        </div>
                    </a>
                </div>
                @endif
                @endauth

            </div>
        </div>
    </div>
    <div class="col-span-2">
        <div class="bg-white shadow-lg rounded-lg px-8 md:mt-16 pb-10 text-gray-400">
          <table width="100%" align="center" cellpadding="10px">
            <tbody class="text-start">
                <tr>
                    <th>Name</th>
                    <td id="name">{{ $$module_name_singular->name }}</td>
                </tr>
                <tr>
                    <th>User ID</th>
                    <td id="user_id">{{ $$module_name_singular->username }}</td>
                </tr>
                <tr>
                    <th>Email Addess</th>
                    <td id="email">{{ $$module_name_singular->email }}</td>
                </tr>
                <tr>
                    <th>Mobile Number</th>
                    <td id="phone">{{ $$module_name_singular->mobile }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td id="country">{{ $$module_name_singular->country }}</td>
                </tr>
                <tr>
                    <th>Joined Date</th>
                    <td id="joined">{{ date('d-m-Y', strtotime($$module_name_singular->created_at)) }}</td>
                </tr>
               

            </tbody>
        </table>
        </div>
        
    </div>
</div>


<!-- 
<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    {{$$module_name_singular->name}}
                    @auth
                    @if(auth()->user()->id == $$module_name_singular->id)
                    <small>
                        <a href="{{ route('frontend.users.profileEdit', $$module_name_singular->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                    </small>
                    @endif
                    @endauth
                </h1>
                <p class="lead">
                    Username: {{$$module_name_singular->username}}
                </p>
                @if ($$module_name_singular->email_verified_at == null)
                <p class="lead">
                    <a href="{{route('frontend.users.emailConfirmationResend', $$module_name_singular->id)}}">Confirm Email</a>
                </p>
                @endif

                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-lg line-bottom-light">
    <div class="container mt-n7 mt-lg-n12 z-2">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    <div class="col-md-6 col-lg-4">
                        <img class="img-fluid img-thumbnail" src="{{asset($user->avatar)}}" alt="{{$$module_name_singular->name}}">
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-5">

                        @if($userprofile->bio)
                        <h5 class="description">
                            {{$userprofile->bio}}
                        </h5>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <?php $fields_array = [
                                        ['name' => 'first_name'],
                                        ['name' => 'last_name'],
                                        // [ 'name' => 'email' ],
                                        // [ 'name' => 'mobile' ],
                                        ['name' => 'username'],
                                        ['name' => 'gender'],
                                        // [ 'name' => 'date_of_birth', 'type' => 'date'],
                                        ['name' => 'url_website', 'type' => 'url'],
                                        // [ 'name' => 'url_facebook', 'type' => 'url' ],
                                        // [ 'name' => 'url_twitter', 'type' => 'url' ],
                                        // [ 'name' => 'url_linkedin', 'type' => 'url' ],
                                        // [ 'name' => 'profile_privecy' ],
                                        // [ 'name' => 'address' ],
                                        // [ 'name' => 'bio' ],
                                        // [ 'name' => 'login_count' ],
                                        // [ 'name' => 'last_login', 'type' => 'datetime' ],
                                        // [ 'name' => 'last_ip' ],
                                    ]; ?>
                                    @foreach ($fields_array as $field)
                                    <tr>
                                        @php
                                        $field_name = $field['name'];
                                        $field_type = isset($field['type'])? $field['type'] : '';
                                        @endphp

                                        <th>{{ __("labels.backend.users.fields.".$field_name) }}</th>

                                        @if ($field_name == 'date_of_birth' && $userprofile->$field_name != '')
                                        <td>
                                            @if(auth()->user()->id == $userprofile->user_id)
                                            {{ $userprofile->$field_name->isoFormat('LL') }}
                                            @else
                                            {{ $userprofile->$field_name->format('jS \\of F') }}
                                            @endif
                                        </td>
                                        @elseif ($field_type == 'date' && $userprofile->$field_name != '')
                                        <td>
                                            {{ $userprofile->$field_name->isoFormat('LL') }}
                                        </td>
                                        @elseif ($field_type == 'datetime' && $userprofile->$field_name != '')
                                        <td>
                                            {{ $userprofile->$field_name->isoFormat('llll') }}
                                        </td>
                                        @elseif ($field_type == 'url')
                                        <td>
                                            <a href="{{ $userprofile->$field_name }}" target="_blank">{{ $userprofile->$field_name }}</a>
                                        </td>
                                        @else
                                        <td>{{ $userprofile->$field_name }}</td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-sm-center align-items-center py-3 mt-3">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-9 col-md-6">
                        <h6 class="font-weight-bolder d-inline mb-0 mr-3">Share:</h6>

                        @php $title_text = $$module_name_singular->name; @endphp

                        <button class="btn btn-sm mr-3 btn-icon-only btn-pill btn-twitter d-inline" data-sharer="twitter" data-via="LaravelStarter" data-title="{{$title_text}}" data-hashtags="LaravelStarter" data-url="{{url()->full()}}" data-toggle="tooltip" title="Share on Twitter" data-original-title="Share on Twitter">
                            <span class="btn-inner-icon"><i class="fab fa-twitter"></i></span>
                        </button>

                        <button class="btn btn-sm mr-3 btn-icon-only btn-pill btn-facebook d-inline" data-sharer="facebook" data-hashtag="LaravelStarter" data-url="{{url()->full()}}" data-toggle="tooltip" title="Share on Facebook" data-original-title="Share on Facebook">
                            <span class="btn-inner-icon"><i class="fab fa-facebook-f"></i></span>
                        </button>
                    </div>

                    <div class="col-3 col-md-6 text-end"><i class="far fa-bookmark text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark story"></i></div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush