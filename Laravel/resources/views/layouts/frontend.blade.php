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

    <div id="app">

		<div class="page">
			@include('_partials.organism.topbar')
			@yield('content')    
		</div>
        
	</div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        /**
            * Modal Login
        */
        function load_modal_login()
        {   
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-image"></div>');
            $('body').addClass('no-scroll');
            $('.modal-image').load('/modal_login');
        }

        /**
            * Modal Register
        */
        function load_modal_register()
        {   
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-common"></div>');
            $('body').addClass('no-scroll');
            $('.modal-common').load('/modal_register');

        }

        /**
            * Modal Submit Beachcourt
        */
        function load_modal_submitBeachcourt()
        {
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-common"></div>');
            $('body').addClass('no-scroll');
            $('.modal-common').load('/modal_submitBeachcourt');
        }

        /**
            * Modal Edit User Profile
        */

        function load_modal_editUserProfile()
        {
            $('body').append('<div class="overlay"><div class="preloader__spinner-container"><div class="preloader__spinner"></div></div></div>').append('<div class="modal-common"></div>');
            $('body').addClass('no-scroll');
            $('.modal-common').load('/modal_editUserProfile');
        }


        $(document).keyup(function(e) {
          if (e.keyCode === 27) {

            $('.overlay').remove();
            $('body').removeClass('no-scroll');
            $('.modal-image').remove();

          }
        });

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
