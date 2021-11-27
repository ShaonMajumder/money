<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('GlobalLogin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192"  width="651" height="192" xmlns="http://www.w3.org/2000/svg" fill="none" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g>
                         <title>Layer 1</title>
                         <g clip-path="url(#clip0)" fill="#EF3B2D" id="svg_1">
                          <path fill="#f23535" d="m186.068,43.892c-0.024,-0.088 -0.073,-0.165 -0.104,-0.25c-0.481,-0.842 -0.555,-0.967 -0.659,-1.07c-0.085,-0.086 -0.194,-0.148 -0.29,-0.223c-0.109,-0.085 -0.206,-0.182 -0.327,-0.252l-0.002,-0.001l-0.002,-0.002l-35.648,-20.524a2.971,2.971 0 0 0 -2.964,0l-35.647,20.522l-0.002,0.002l-0.002,0.001c-0.121,0.07 -0.219,0.167 -0.327,0.252c-0.096,0.075 -0.205,0.138 -0.29,0.223c-0.103,0.103 -0.178,0.228 -0.265,0.345c-0.066,0.089 -0.147,0.169 -0.203,0.265c-0.083,0.144 -0.133,0.304 -0.191,0.46c-0.031,0.085 -0.08,0.162 -0.104,0.25c-0.067,0.249 -0.103,0.51 -0.103,0.776l0,38.979l-29.706,17.103l0,-76.255a3,3 0 0 0 -0.103,-0.776c-0.024,-0.088 -0.073,-0.165 -0.104,-0.25c-0.058,-0.157 -0.108,-0.316 -0.191,-0.46c-0.056,-0.097 -0.137,-0.176 -0.203,-0.265c-0.087,-0.117 -0.161,-0.242 -0.265,-0.345c-0.085,-0.086 -0.194,-0.148 -0.29,-0.223c-0.109,-0.085 -0.206,-0.182 -0.327,-0.252l-0.002,-0.001l-0.002,-0.002l-35.647,-20.523a2.971,2.971 0 0 0 -2.964,0l-35.647,20.523l-0.002,0.002l-0.002,0.001c-0.121,0.07 -0.219,0.167 -0.327,0.252c-0.096,0.075 -0.205,0.138 -0.29,0.223c-0.103,0.103 -0.178,0.228 -0.265,0.345c-0.066,0.089 -0.147,0.169 -0.203,0.265c-0.083,0.144 -0.133,0.304 -0.191,0.46c-0.031,0.085 -0.08,0.162 -0.104,0.25c-0.067,0.249 -0.103,0.51 -0.103,0.776l0,122.09c0,1.063 0.568,2.044 1.489,2.575l71.293,41.045c0.156,0.089 0.324,0.143 0.49,0.202c0.078,0.028 0.15,0.074 0.23,0.095a2.98,2.98 0 0 0 1.524,0c0.069,-0.018 0.132,-0.059 0.2,-0.083c0.176,-0.061 0.354,-0.119 0.519,-0.214l71.293,-41.045a2.971,2.971 0 0 0 1.489,-2.575l0,-38.979l34.158,-19.666a2.971,2.971 0 0 0 1.489,-2.575l0,-40.697a3.075,3.075 0 0 0 -0.106,-0.774zm-109.813,99.275l-29.648,-16.779l31.136,-17.926l0.001,-0.001l34.164,-19.669l29.674,17.084l-21.772,12.428l-43.555,24.863zm68.329,-76.259l0,33.841l-12.475,-7.182l-17.231,-9.92l0,-33.841l12.475,7.182l17.231,9.92zm2.97,-39.335l29.693,17.095l-29.693,17.095l-29.693,-17.095l29.693,-17.095zm-91.494,86.516l-12.475,7.182l0,-74.538l17.231,-9.92l12.475,-7.182l0,74.537l-17.231,9.921zm-15.446,-106.691l29.693,17.095l-29.693,17.095l-29.693,-17.095l29.693,-17.095zm-32.676,22.234l12.475,7.182l17.231,9.92l0,79.676l0.001,0.005l-0.001,0.006c0,0.114 0.032,0.221 0.045,0.333c0.017,0.146 0.021,0.294 0.059,0.434l0.002,0.007c0.032,0.117 0.094,0.222 0.14,0.334c0.051,0.124 0.088,0.255 0.156,0.371a0.036,0.036 0 0 0 0.004,0.009c0.061,0.105 0.149,0.191 0.222,0.288c0.081,0.105 0.149,0.22 0.244,0.314l0.008,0.01c0.084,0.083 0.19,0.142 0.284,0.215c0.106,0.083 0.202,0.178 0.32,0.247l0.013,0.005l0.011,0.008l34.139,19.321l0,34.175l-65.352,-37.625l0,-115.235l-0.001,0zm136.646,115.235l-65.352,37.625l0,-34.182l48.399,-27.628l16.953,-9.677l0,33.862zm35.646,-61.22l-29.706,17.102l0,-33.841l17.231,-9.92l12.475,-7.182l0,33.841z" id="svg_2"/>
                         </g>
                         <text x="251.5" y="52" id="svg_3" fill="#000000" stroke-width="0" font-size="24" font-family="Noto Sans JP" text-anchor="start" xml:space="preserve"/>
                         <path id="svg_4" d="m215.5,35" opacity="NaN" stroke-width="0" stroke="#000" fill="#f23535"/>
                         <path id="svg_6" d="m216.5,36" opacity="NaN" stroke-width="0" stroke="#000" fill="#f23535"/>
                         <path id="svg_7" d="m217.5,31" opacity="NaN" stroke-width="0" stroke="#000" fill="#f23535"/>
                         <path id="svg_8" d="m202.5,52l-9.5,101" opacity="NaN" stroke-width="0" stroke="#000" fill="#f23535"/>
                         <path id="svg_10" d="m228.5,39" opacity="NaN" stroke-width="0" stroke="#000" fill="#f23535"/>
                         <path stroke="#000" id="svg_13" d="m220.39714,145.69357l-0.39714,-96.69357l24.62246,0l27.00528,76.13667c0.39714,0 24.22533,-75.3753 24.22533,-74.61394c0,0.76137 24.63527,0 24.22533,0c0.40994,0 0.39714,96.70566 0,96.69357c0,0.01873 -22.64959,0 -23.03392,0c0.38321,0 0.39714,-60.14797 0,-60.14797c0.39714,0 -23.43105,64.71617 -23.82819,64.71617c0.39714,0 -31.37378,-63.19344 -31.77092,-63.19344c0.39714,0 0.39714,55.58498 0,55.57977c0,0.01173 -13.50264,-4.47862 -21.04823,1.52273z" opacity="NaN" stroke-width="0" fill="#f23535"/>
                         <path stroke="#00bf5f" id="svg_19" d="m325.71751,98.2297l0,0c0,-25.42184 20.81877,-46.03032 46.50001,-46.03032l0,0c12.33256,0 24.16003,4.84961 32.88047,13.48196c8.72045,8.63236 13.61954,20.34035 13.61954,32.54835l0,0c0,25.42184 -20.81877,46.03032 -46.50001,46.03032l0,0c-25.68124,0 -46.50001,-20.60848 -46.50001,-46.03032zm23.25,0l0,0c0,12.71092 10.40939,23.01516 23.25,23.01516c12.84062,0 23.25,-10.30424 23.25,-23.01516c0,-12.71092 -10.40939,-23.01516 -23.25,-23.01516l0,0c-12.84062,0 -23.25,10.30424 -23.25,23.01516z" stroke-dasharray="2,2" stroke-width="0" fill="#f23535"/>
                         <path stroke="#00bf5f" id="svg_20" d="m503.09748,54.30698l72.99998,0l0,22l-72.99998,0l0,-22z" stroke-dasharray="2,2" stroke-width="0" fill="#f23535"/>
                         <rect stroke="#00bf5f" id="svg_21" height="67" width="17" y="80" x="503.5" stroke-dasharray="2,2" stroke-width="0" fill="#f23535"/>
                         <rect id="svg_22" height="19" width="48" y="93" x="524.5" stroke-dasharray="2,2" stroke-width="0" stroke="#00bf5f" fill="#f23535"/>
                         <rect id="svg_24" height="21" width="47" y="125" x="526.5" stroke-dasharray="2,2" stroke-width="0" stroke="#00bf5f" fill="#f23535"/>
                         <path stroke="#00bf5f" id="svg_26" d="m455,144l16,0" opacity="NaN" stroke-dasharray="2,2" stroke-width="0" fill="#f23535"/>
                         <path id="svg_27" d="m472.5,54" opacity="NaN" stroke-dasharray="2,2" stroke-width="0" stroke="#00bf5f" fill="#f23535"/>
                         <path id="svg_28" d="m435.5,145" opacity="NaN" stroke-dasharray="2,2" stroke-width="0" stroke="#00bf5f" fill="#f23535"/>
                         <path id="svg_31" d="m422.5,52" opacity="NaN" stroke-dasharray="2,2" stroke-width="0" stroke="#00bf5f" fill="#f23535"/>
                         <path id="svg_33" d="m518.5,118l-3.5,42" opacity="NaN" stroke-dasharray="2,2" stroke-width="0" stroke="#00bf5f" fill="#f23535"/>
                         <path stroke="#00bf5f" id="svg_35" d="m424.51389,146.43333l-0.51389,-92.43333l14.38889,0l43.16667,84.6l0,-82.25l16.44444,0l0,91.65l-21.58333,0l-39.05555,-73.63333l0,70.5" opacity="NaN" stroke-dasharray="2,2" stroke-width="0" fill="#f23535"/>
                         <path id="svg_37" d="m590.5,104" opacity="NaN" stroke-width="0" stroke="#000" fill="#f23535"/>
                         <path stroke="#000" id="svg_39" d="m579.5,56.97778l29.468,49.44444l0,37.57778l15.568,0l0,-38.56666l24.464,-48.45555l-16.68,0l-16.68,33.62222l-21.128,-35.6l-15.012,1.97778z" opacity="NaN" stroke-width="0" fill="#f23535"/>
                        </g>
                       
                       </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
