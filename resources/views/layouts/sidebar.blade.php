<div class="dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 text-gray-800 dark:text-white w-full min-h-screen overflow-y-auto">
    <!-- Título da página atual -->
    <div class="p-3">
        <!-- Informações do usuário -->
        <div class="flex items-center justify-center">
            @if (Auth::user()->photo)
                <div>
                    <img src="{{ asset('images/' . Auth::user()->photo) }}" class="block h-9 w-auto rounded mt-2">
                </div>
            @else
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            @endif
            <div class="ml-3">
                <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                <p class="text-xs text-gray-400 dark:text-gray-500">Administrador</p>
            </div>
        </div>
    </div>

    <!-- Menus -->
    <nav class="mt-5">
        <!-- Gestão de usuários -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" 
                    class="w-full flex justify-between items-center py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                <img src="{{ URL::asset('assets/img/icon/icons8-users-30.png') }}" class="mr-2 w-6 h-6">
                <span>Gestão de usuários</span>
                <svg class="w-4 h-4" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Usuários
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Nível de acesso
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório de usuários
                </a>
            </div>
        </div>

        <!-- Gestão de projetos -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" 
                    class="w-full flex justify-between items-center py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                <img src="{{ URL::asset('assets/img/icon/icons8-file-64.png') }}" class="mr-2 w-6 h-6">
                <span>Gestão de projetos</span>
                <svg class="w-4 h-4" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                <a href="{{ route('admin.projeto.index') }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Projetos
                </a>
                <a href="{{ route('admin.projeto.index') }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-science-folder-64.png') }}" class="mr-2 w-6 h-6">
                    Projetos Científicos
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório de conteúdo
                </a>
            </div>
        </div>

        <!-- Soft skills -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" 
                    class="w-full flex justify-between items-center py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                <img src="{{ URL::asset('assets/img/icon/icons8-file-64.png') }}" class="mr-2 w-6 h-6">
                <span>Soft skills</span>
                <svg class="w-4 h-4" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                <a href="{{ route('admin.tech.index') }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-tech-50.png') }}" class="mr-2 w-6 h-6">
                    Tecnologias
                </a>
                <a href="{{ route('admin.carrossel.index') }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-gallery-80.png') }}" class="mr-2 w-6 h-6">
                    Carrossel
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-office-50.png') }}" class="mr-2 w-6 h-6">
                    Serviços
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório de conteúdo
                </a>
            </div>
        </div>

        <!-- Minha conta -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" 
                    class="w-full flex justify-between items-center py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                <img src="{{ URL::asset('assets/img/icon/icons8-list-50.png') }}" class="mr-2 w-6 h-6">
                <span>Minha Conta</span>
                <svg class="w-4 h-4" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                @auth
                <a href="{{ route('admin.user.edit', Auth::user()->id) }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Dados Pessoais
                </a>
                <a href="{{ route('admin.education.index') }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-study-50.png') }}" class="mr-2 w-6 h-6">
                    Formação Acadêmica
                </a>
                <a href="{{ route('admin.experience.index') }}" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-work-50.png') }}" class="mr-2 w-6 h-6">
                    Trabalhos
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório da Conta
                </a>
                @endauth
            </div>
        </div>
    </nav>
</div>
