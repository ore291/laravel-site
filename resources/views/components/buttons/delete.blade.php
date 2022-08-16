@props(['route' => '', 'icon' => 'fas fa-trash-alt', 'title', 'small' => '', 'class' => ''])

@if ($route)
    <form action="{{ $route }}" method="POST">
        @csrf
        @method('DELETE')
        <button class='btn btn-danger mt-1 {{ $small == 'true' ? 'btn-sm' : '' }} {{ $class }}'
            data-toggle="tooltip" title="{{ $title }}" data-confirm='Are you sure?'> <i
                class="{{ $icon }}"></i>
            {{ $slot }}</button>
    </form>
@else
    <button type="submit" class='btn btn-danger  mt-1 {{ $small == 'true' ? 'btn-sm' : '' }} {{ $class }}'
        data-toggle='tooltip' data-method='DELETE' data-token="{{ csrf_token() }}" title="{{ $title }}">


        <i class="{{ $icon }}"></i>
        {{ $slot }}
    </button>
@endif

