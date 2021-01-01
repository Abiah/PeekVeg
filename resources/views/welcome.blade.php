<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PeekVeg</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'sans-serif';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-200 sm:items-center sm:pt-0">


            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <span>
                  <svg class="h-16 w-auto text-gray-700 sm:h-20"  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M432 24h-24v256h32s0-168-8-256z" fill="#20754d"/><path d="M320 280l-32 48-142.2-39.5c-26.8 23.1-67.2 20.1-90.2-6.7-20.1-23.3-20.7-57.5-1.6-81.6-26.6-23.3-29.3-63.7-6.1-90.3 21.2-24.3 57.3-29 84-10.9 20.4-28.8 60.4-35.6 89.2-15.2s35.6 60.4 15.2 89.2c-1 1.4-2.1 2.8-3.2 4.2l8.9 10.5 1.5 1.7z" fill="#35a872"/><circle cx="104" cy="272" fill="#eb423f" r="48"/><circle cx="192" cy="280" fill="#d9db5e" r="48"/><path d="M352.1 56c8.8 0 16-7.2 16-16v-.8c-.4-8.6-7.8-15.2-16.4-15.2h-23.5c-8.8 0-16 7.2-16 16v80h32V88h7.5c8.6 0 16-6.6 16.4-15.2.4-8.8-6.4-16.3-15.2-16.8h-.8z" fill="#35a872"/><path d="M383.7 165.6l-3.1 26.4-1.9 16L358 384h-52l-15-128-1.9-16-8.8-74.4c-.2-1.9-.3-3.7-.3-5.6 0-26.5 21.4-48 47.9-48h8.2c26.5 0 48 21.5 48 48-.1 1.9-.2 3.8-.4 5.6z" fill="#f78a25"/><circle cx="280" cy="272" fill="#ffd33a" r="48"/><path d="M472 48h16s-24 184-24 232h-32s9.8-168 40-232z" fill="#35a872"/><path d="M24 280h464v208H24z" fill="#95573a"/><g fill="#b37a60"><path d="M24 440h464v48H24zM24 360h464v48H24zM24 280h464v48H24z"/></g><path d="M344 152c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8-8-3.6-8-8zM59.2 194.2c3.2 2.8 3.7 7.7 1 11-8 10-12.2 22-12.2 34.8 0 5.5.8 10.9 2.3 16.1C57.2 232.9 78.7 216 104 216c19.3 0 37 10 47.1 25.8 10.2-10.9 24.8-17.8 40.9-17.8 15.6 0 30.4 6.6 40.9 17.8 6.2-9.6 15.3-17.2 26-21.6l-26.3-31.1C219.8 200.8 202.7 208 184 208c-4.4 0-8-3.6-8-8s3.6-8 8-8c30.9 0 56-25.1 56-56s-25.1-56-56-56c-18.1 0-35.2 8.8-45.7 23.6-2.6 3.6-7.5 4.4-11.2 1.9-1.1-.8-13-9.5-31.1-9.5-30.9 0-56 25.1-56 56 0 16.1 7 31.5 19.2 42.2zM496 280v208c0 4.4-3.6 8-8 8H24c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h15.5c-4.9-9.9-7.5-20.9-7.5-32 0-14 3.9-27.3 11.4-38.9C31 187.9 24 170.3 24 152c0-39.7 32.3-72 72-72 11.9 0 23.5 2.9 33.9 8.5C143.5 73 163.2 64 184 64c39.7 0 72 32.3 72 72 0 15.2-4.7 29.3-12.8 40.9l33.2 39.2c.6 0 1.2-.1 1.8-.1l-5.8-49.5c-1.9-15.9 3.2-31.8 13.8-43.8 5.1-5.7 11.2-10.2 17.9-13.4V40c0-13.2 10.8-24 24-24h23.5c13.1 0 23.8 10 24.4 22.8.3 6.4-1.9 12.4-6.1 17.2 4.2 4.7 6.4 10.8 6.1 17.2-.6 12.7-11.1 22.6-24 22.8v10.4c9.8 3 18.8 8.6 25.8 16.4 10.6 11.9 15.6 27.9 13.8 43.8L379.2 272H400V24c0-4.4 3.6-8 8-8h24c4.1 0 7.6 3.2 8 7.3 2.2 24.6 3.9 55.5 5 87.2 5.9-28.4 12.5-50.4 19.8-65.9 1.3-2.8 4.1-4.6 7.2-4.6h16c2.3 0 4.5 1 6 2.7s2.2 4 1.9 6.3c-.2 1.7-21.6 166.3-23.8 223H488c4.4 0 8 3.6 8 8zm-55.4-8h15.6c1.8-50.1 18.1-180.1 22.7-216h-1.7c-23.9 56.4-34.3 182.2-36.6 216zm-24.6 0h8.5c.9-12.8 3-40.4 6.7-72.6-.8-52.2-2.7-119.7-6.6-167.4H416zm-95.9-167.4c2.6-.4 5.2-.6 7.9-.6h8.1V88c0-4.4 3.6-8 8-8h7.5c4.5 0 8.2-3.4 8.4-7.6.1-2.2-.7-4.3-2.2-5.9S354.2 64 352 64c-4.4 0-8-3.6-8-8s3.6-8 8-8c2.2 0 4.3-.9 5.8-2.5s2.3-3.7 2.2-5.9c-.2-4.2-4-7.6-8.4-7.6h-23.5c-4.4 0-8 3.6-8 8zm-22 28.8c-2.8 3.2-5.1 6.8-6.8 10.6H320c4.4 0 8 3.6 8 8s-3.6 8-8 8h-32c0 1.6.1 3.1.3 4.7l6.3 53.3c12.9 3.5 23.9 11.4 31.4 22.1h18c4.4 0 8 3.6 8 8s-3.6 8-8 8h-10.3c1.5 5.1 2.3 10.4 2.3 16h27.1l7.5-64H334v-.3c-3.5-.9-6-4-6-7.7s2.6-6.9 6-7.7v-.4h38.5l3.2-27.3c1.3-11.3-2.3-22.7-9.8-31.3-7.6-8.5-18.5-13.4-29.9-13.4h-8c-11.4 0-22.3 4.9-29.9 13.4zM136.6 272c.8-5.3 2.3-10.4 4.4-15.1-6.1-14.9-20.8-24.9-37-24.9-22.1 0-40 17.9-40 40zm16.2 0H224c0-4.7.6-9.2 1.7-13.6C218.3 247 205.6 240 192 240c-19.3 0-35.5 13.8-39.2 32zm167.2 0c0-22.1-17.9-40-40-40s-40 17.9-40 40zM32 288v32h448v-32zm448 112v-32H32v32zM32 416v16h448v-16zm448-64v-16H32v16zm0 128v-32H32v32z"/> </svg>
                </span>

                </div>
                <p class="mt-4 font-semibold text-lg">PeekVeg</p>
                <div class="mt-8 bg-white  dark:bg-gray-200 dark:text-black-200 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7  font-semibold"><a href="#" class="text-black-400 dark:ext-black-400">About PeekVeg</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-black-600 dark:text-black-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Route::has('login'))
                    <div class="hidden fixed px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm  text-gray-700 ">Login</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 ">Register</a>
                          @endif
                        @endif
                    </div>
                @endif

            </div>
        </div>
    </body>
</html>
