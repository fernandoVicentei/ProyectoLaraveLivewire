<style>
    /* ---- reset ---- */ 
    body{ 
        font:normal 75% Arial, Helvetica, sans-serif; } 
        canvas{ 
            display: block; 
            vertical-align: bottom; } 
        /* ---- particles.js container ---- */ 
        #particles-js{ 
            position:absolute; 
        width: 100%; 
        height: 100%;
        background-color: #000000; 
        background-image: url("https://static.vecteezy.com/system/resources/previews/000/691/409/non_2x/bookshelf-in-library-vector.jpg");
        background-repeat: no-repeat; 
        background-size: cover; 
        background-position: 50% 50%; } 
        /* ---- stats.js ---- */ 
        .count-particles{ 
            background: transparent; 
            position: absolute; 
            width: 90%; 
            color: #000000; 
            font-size: 1.8em; 
            text-align: center; 
            text-indent: 4px; 
            line-height: 14px; 
            padding-bottom: 2px; 
            font-family: Helvetica, Arial, sans-serif; 
            font-weight: bold; } 
            .js-count-particles{ 
                font-size: 1.1em; } 
                #stats, .count-particles{ 
                    -webkit-user-select: none; 
                    margin-top: 5px; 
                    margin-left: 5px; } 
                    #stats{ 
                        border-radius: 3px 3px 0 0; 
                        overflow: hidden; } 
                        .count-particles{ 
                            border-radius: 0 0 3px 3px; }
                            
    </style>
    <div id="particles-js"></div>
        <div class="count-particles">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="name" value="{{ __('NOMBRE') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('CORREO ELECTRONICO') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('CONTRASEÑA') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('CONFIRMAR CONTRASEÑA') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya registrado?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('REGISTRARSE') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</div>
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
 <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script>
particlesJS("particles-js", {"particles":{"number":{"value":459,"density":{"enable":true,"value_area":800}},"color":{"value":"#fafafa"},"shape":{"type":"polygon","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.2919846274039409,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":11.83721462448409,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#ffffff","opacity":0.4,"width":2},"move":{"enable":true,"speed":6,"direction":"bottom","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":0.5}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>

