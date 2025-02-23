<nav class="bg-white py-6 px-4 md:px-16 flex mx-auto items-center justify-between shadow-sm">
    {{-- Logo Section --}}
    <div class="flex items-center">
        <div class="text-blue-600 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="67" height="38" viewBox="0 0 67 38" fill="none">
                <path
                    d="M35.3923 1.53506C36.2713 0.620709 37.4649 0.107033 38.7079 0.107033C44.3002 0.107033 49.5703 0.107036 54.7602 0.107046C65.1986 0.107068 70.4257 13.2362 63.0447 20.9148L46.9669 37.6405C46.2289 38.4084 44.9668 37.8646 44.9668 36.7786V22.0472L46.8248 20.1142C48.301 18.5785 47.2555 15.9527 45.1678 15.9527H21.5334L35.3923 1.53506Z"
                    fill="#2D68F6" />
                <path
                    d="M31.1076 36.4649C30.2288 37.3793 29.0351 37.893 27.7921 37.893C22.1998 37.893 16.9297 37.893 11.7398 37.893C1.30133 37.8929 -3.92574 24.7638 3.45534 17.0851L19.5331 0.35945C20.2712 -0.408412 21.5332 0.13542 21.5332 1.22134L21.5333 15.9527L19.6752 17.8857C18.199 19.4215 19.2445 22.0473 21.3322 22.0473L44.9667 22.0472L31.1076 36.4649Z"
                    fill="#2D68F6" />
            </svg>
        </div>
        <a href="" class="text-2xl font-bold text-blue-600">Toest</a>
    </div>

    {{-- Navigation Links --}}
    <div class="hidden md:flex items-center space-x-8">
        <a href="" class="text-blue-600 font-medium">Home</a>
        <a href="" class="text-gray-600 hover:text-gray-800">About Us</a>
        <a href="" class="text-gray-600 hover:text-gray-800">Service</a>
    </div>

    {{-- Auth Buttons --}}
    <div class="flex items-center space-x-4">
        <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Login
        </a>
        <a href="" class="text-blue-600 border border-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50">
            Sign In
        </a>
    </div>

    {{-- Hamburger Menu for Mobile --}}
    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-blue-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

{{-- Mobile Menu --}}
<div id="mobile-menu" class="hidden md:hidden">
    <div class="flex flex-col space-y-4 py-4">
        <a href="" class="text-blue-600 font-medium">Home</a>
        <a href="" class="text-gray-600 hover:text-gray-800">About Us</a>
        <a href="" class="text-gray-600 hover:text-gray-800">Service</a>
        <div class="flex flex-col space-y-2">
            <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                Login
            </a>
            <a href="" class="text-blue-600 border border-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50">
                Sign In
            </a>
        </div>
    </div>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
