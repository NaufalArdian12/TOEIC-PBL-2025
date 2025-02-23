<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://cdn.tailwindcss.com"></script>
<title>English Test Landing Page</title>
<!-- Font Face Declarations -->
<style>
    @font-face {
        font-family: 'Reddit Sans';
        src: url('/fonts/RedditSans-VariableFont_wght.ttf') format('truetype-variations');
        font-weight: 100 900;
        font-style: normal;
    }

    @font-face {
        font-family: 'Reddit Sans';
        src: url('/fonts/RedditSans-Italic-VariableFont_wght.ttf') format('truetype-variations');
        font-weight: 100 900;
        font-style: italic;
    }

    /* Set default font */
    body {
        font-family: 'Reddit Sans', sans-serif;
    }

    .container {
        max-width: 1200px;
    }
</style>

<!-- Tailwind Config -->
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    'reddit': ['Reddit Sans', 'sans-serif'],
                }
            }
        }
    }
</script>
</head>

<body class="min-h-screen bg-gray-50">
    @include('partials.navbar')

    <main class="bg-white py-6 px-4 md:px-16 flex mx-auto items-center justify-between">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                {{-- Left side content --}}
                <div class="flex flex-col w-full lg:w-1/2 justify-center items-start gap-6 flex-shrink-0 self-stretch">
                    <h1 class="text-black text-4xl md:text-6xl font-semibold leading-[120%] capitalize">
                        English Test That <br class="hidden md:block"> Measures The Ability To <br
                            class="hidden md:block"> Communicate In <br class="hidden md:block"> Everyday Life.
                    </h1>

                    <p class="text-[#666] text-xl md:text-2xl font-regular leading-[120%]">
                        Helping institutions to improve their reputation in the eyes of <br class="hidden md:block">
                        employers
                        and attract more prospective students and helping <br class="hidden md:block"> individuals to
                        expand
                        their employment opportunities.
                    </p>

                    <div class="flex gap-4">
                        <a href=""
                            class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Have Certificate?
                        </a>

                        <a href=""
                            class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">
                            Need Certificate?
                        </a>
                    </div>
                </div>

                {{-- Right side image --}}
                <div class="w-full lg:w-1/2">
                    <img src="{{ asset('images/auditorium-seats.jpg') }}" alt="Blue auditorium seats"
                        class="rounded-lg shadow-lg w-full" loading="lazy">
                </div>
            </div>
        </div>
    </main>

    {{-- You might want to include a footer here
    @include('partials.footer') --}}
</body>

</html>
