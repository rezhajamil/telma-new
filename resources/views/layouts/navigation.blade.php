<nav x-data="{ open: false }" class="bg-white border-b-2 border-shadow border-green">
    <!-- Primary Navigation Menu -->
    <div class="max-w-9xl mx-auto bg-orange px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex gap-96 items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-telkomsel-logo class="block h-1 w-1 fill-current text-white" />
                    </a>
                    <span class="font-mono text-2xl text-white font-weight-bold">Telkomsel Lifestylepreneur Academy</span>
                    <a href="{{ route('dashboard') }}">
                        <x-byu-logo class="block h-1 w-1 fill-current text-white justify-content-sm-end" />
                    </a>
                </div>
            </div>  
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
             
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">

            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
            
            </div>
        </div>
    </div>
</nav>
