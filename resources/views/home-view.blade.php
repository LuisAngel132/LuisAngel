
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <form action="logout" method="POST">
                @csrf
                <button type="submit" class="text-sm text-gray-700 dark:text-gray-500 underline">Cerrar Sesión</button>
            </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    <div class="text">
    <h2 class="colorBlanco">{{ $user->email }}</h2>
    <br>
</div>
<style>
    * { margin:0; padding:0; }
html, body { width:100%; height:100%; overflow: hidden;}
canvas { display:block; }
#controls {
  margin: 20px;
  position: absolute;
  top: 0; left: 0;
  color: white;
}
</style>
