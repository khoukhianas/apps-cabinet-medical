<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background: url('/image/livres.jpg');
background-repeat:no-repeat;
background-position: center center;
background-size: 100%;
background-position: -2px 0px;opacity:initial ; "  >
    <div>
        {{ $logo }}
    </div>

    <div style="background-color: rgba(255, 255, 255, 0.377);" class="w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
