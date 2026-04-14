@php
    $home = url('/');
    $indicaUrl = url('/indica');
    $nav = $headerNav ?? 'home';
@endphp
<header
    class="ui-navbar fixed left-0 top-0 z-50 flex min-h-20 w-full items-center border-b border-white/40 bg-transparent text-white backdrop-blur lg:h-20">
    <div class="ui-container flex w-full items-center justify-between">
        <button type="button" id="nav-toggle" aria-controls="nav-panel" aria-expanded="false"
            class="absolute right-5 top-5 z-20 flex h-12 w-12 items-center justify-center rounded-2xl border border-white/50 p-2 lg:hidden">
            <svg id="nav-toggle-icon" class="h-6 w-6 transition-transform duration-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <a class="block w-32 text-white" href="{{ $home }}" aria-label="Univalores">
            @include('partials.logo-univalores')
        </a>
        <nav id="nav-panel"
            class="max-lg:invisible max-lg:fixed max-lg:inset-0 max-lg:z-10 max-lg:flex max-lg:-translate-x-full max-lg:flex-col max-lg:items-center max-lg:justify-center max-lg:bg-secondary-500 max-lg:gap-6 max-lg:transition-transform max-lg:duration-300 lg:flex lg:items-center lg:gap-8">
            @if ($nav === 'indica')
                <a href="{{ $home }}" class="duration-200 hover:text-primary-200">Home</a>
                <a href="#programa" class="font-semibold duration-200 hover:text-primary-200">O programa</a>
                <a href="#como-funciona" class="duration-200 hover:text-primary-200">Como funciona</a>
                <a href="#embaixadores" class="duration-200 hover:text-primary-200">Embaixadores</a>
                <a href="#ganhos" class="duration-200 hover:text-primary-200">Remuneração</a>
                <a href="#faq-indica" class="duration-200 hover:text-primary-200">Dúvidas</a>
            @else
                <a href="{{ $home }}" class="font-semibold duration-200 hover:text-primary-200">Home</a>
                <a href="{{ $indicaUrl }}" class="duration-200 hover:text-primary-200">Indica</a>
                <a href="{{ $home }}#sobre" class="duration-200 hover:text-primary-200">Sobre</a>
                <a href="{{ $home }}#equipe" class="duration-200 hover:text-primary-200">Equipe</a>
                <a href="{{ $home }}#blog" class="duration-200 hover:text-primary-200">Blog</a>
                <a href="{{ $home }}#cadastro" class="duration-200 hover:text-primary-200">Contato</a>
            @endif
        </nav>
        @if ($nav === 'indica')
            <a class="ui-button group/button hidden items-center justify-center gap-1 rounded-3xl border-2 border-current bg-transparent px-5 py-1.5 text-current duration-500 hover:bg-primary-500 hover:text-white lg:inline-flex"
                href="#cadastro-embaixador">
                <svg class="h-6 w-6 duration-500 group-hover/button:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <span>Quero ser embaixador</span>
            </a>
        @else
            <a class="ui-button group/button hidden items-center justify-center gap-1 rounded-3xl border-2 border-current bg-transparent px-5 py-1.5 text-current duration-500 hover:bg-primary-500 hover:text-white lg:inline-flex"
                href="{{ $home }}#cadastro">
                <svg class="h-6 w-6 duration-500 group-hover/button:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <span>Entrar em contato</span>
            </a>
        @endif
    </div>
</header>
