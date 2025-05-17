<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title')</title>
</head>
<body>
  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <a href="{{ route('clients.clients') }}" class="text-white font-bold">Backoffice</a>
        </div>
        
        <!-- Mobile menu button -->
        <div class="flex md:hidden">
          <button type="button" class="text-gray-400 hover:text-white focus:outline-none focus:text-white" 
              onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Desktop menu -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center space-x-4">
            <a href="{{ route('clients.add') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Ajouter Client
            </a>
            <a href="{{ route('clients.clients') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Voir les Clients
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div class="hidden md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="{{ route('clients.add') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
          Ajouter Client
        </a>
        <a href="{{ route('clients.clients') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
          Voir les Clients
        </a>
      </div>
    </div>
  </nav>

  <main>
    @yield('Clients')
    @yield('Addclient')
  </main>
</body>
</html>