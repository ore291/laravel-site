@extends('frontend.layouts.app')

@section('title')
  {{ "Live Scores" }}
@endsection

@section('content')
    {{-- <div class="p-10 container container-with-errors">
        <section id="widgetLiveScore"></section>
    </div> --}}
    <div class="container p-10">
           <iframe src="https://www.scorebat.com/embed/livescore/" frameborder="0" width="600" height="760" allowfullscreen
        allow='autoplay; fullscreen' style="width:100%;height:760px;overflow:hidden;display:block;"
        class="_scorebatEmbeddedPlayer_"></iframe>
    </div>
 
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://www.scorebat.com/embed/embed.js?v=arrv';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'scorebat-jssdk'));
    </script>
@endsection

@push('after-styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('live/main-style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('live/widgetLiveScore.css') }}"> --}}
@endpush

@push('after-scripts')
    {{-- <script src="{{ URL::asset('live/jquery.js') }}"></script>
<script src="{{ URL::asset('live/jqueryGlobals.js') }}"></script>
<script src="{{ URL::asset('live/jquery.widgetLiveScore.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#widgetLiveScore').widgetLiveScore({
            widgetWidth: '100%'
        });
    });
</script> --}}
@endpush
