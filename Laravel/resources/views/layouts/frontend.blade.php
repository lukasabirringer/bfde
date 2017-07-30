<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'beachfelder.de - Frontend') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-shadow.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
</head>
<body>
    


		<div class="page" id="page">
			@include('_partials.organism.topbar')

            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    @include('_partials.organism.notification-success')
                @endif
            @endforeach
            
			@yield('content')    
		</div>
        
        @include('cookieConsent::index')    
    
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.4.15"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.9/jquery.jscroll.min.js"></script>
    
    <script type="text/javascript">
        /**
         * Infinite Scroll
         */
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<p class="-text-color-blue-2 -font-primary -typo-copy--large -align-center">Lade weitere Beachvolleyballfelder</p>',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });

        /**
            * Modal Login
        */
        function load_modal_login()
        {   
            $('body').addClass('no-scroll');
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-image"></div>');
            $('.modal-image').load('/modal_login');

        }

        $(document).keyup(function(e) {
          if (e.keyCode === 27) {

            $('.overlay').remove();
            $('body').removeClass('no-scroll');
            $('.modal-image').remove();

          }
        });

        /**
            * Modal Submit Beachcourt
        */
        function load_modal_submitBeachcourt()
        {
            $('body').addClass('no-scroll');
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-common"></div>');
            $('.modal-common').load('/modal_submitBeachcourt');
        }

        $(document).keyup(function(e) {
          if (e.keyCode === 27) {

            $('.overlay').remove();
            $('body').removeClass('no-scroll');
            $('.modal-common').remove();

          }
        });

        /**
            * Modal Edit User Profile
        */

        function load_modal_editUserProfile()
        {
            $('body').addClass('no-scroll');
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-common"></div>');
            $('.modal-common').load('/modal_editUserProfile');
        }

        $(document).keyup(function(e) {
          if (e.keyCode === 27) {

            $('.overlay').remove();
            $('body').removeClass('no-scroll');
            $('.modal-common').remove();

          }
        });


        /**
            * Modal Remove favorite Beachcourt
        */

        function load_modal_removeFavoriteBeachcourt()
        {
            $('body').addClass('no-scroll');
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-common"></div>');
            $('.modal-common').load('/modal_removeFavoriteBeachcourt');
        }

        $(document).keyup(function(e) {
          if (e.keyCode === 27) {

            $('.overlay').remove();
            $('body').removeClass('no-scroll');
            $('.modal-common').remove();

          }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> 
</body>
</html>
