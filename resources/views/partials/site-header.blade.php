@php
    $home = 'https://univalores.com.br';
    $indicaUrl = url('/indica');
    $nav = $headerNav ?? 'home';
@endphp
<header id="site-header"
    class="site-header site-header--dark">
    <div class="ui-container relative flex w-full max-w-full items-center justify-between gap-3 max-lg:pe-16">
        <button type="button" id="nav-toggle" aria-controls="nav-panel" aria-expanded="false"
            class="site-header__menu-btn absolute right-3 top-1/2 z-20 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-2xl border p-2 lg:hidden">
            <svg id="nav-toggle-icon" class="h-6 w-6 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <a class="block w-28 shrink-0 text-inherit sm:w-32" href="{{ $home }}" rel="noopener noreferrer" aria-label="Univalores">
            @include('partials.logo-univalores')
        </a>
        <nav id="nav-panel"
            class="site-header__panel max-lg:fixed max-lg:inset-x-0 max-lg:top-[4.5rem] max-lg:z-[60] max-lg:flex max-lg:min-h-0 max-lg:max-h-[calc(100dvh-4.5rem)] max-lg:-translate-x-full max-lg:flex-col max-lg:items-center max-lg:justify-start max-lg:gap-6 max-lg:overflow-y-auto max-lg:overscroll-y-contain max-lg:bg-secondary-500 max-lg:px-6 max-lg:pb-[max(2.5rem,env(safe-area-inset-bottom))] max-lg:pt-8 max-lg:text-white max-lg:transition-transform max-lg:duration-300 lg:flex lg:items-center lg:gap-6 xl:gap-8">
            @if ($nav === 'indica')
                <a href="#programa" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">O programa</a>
                <a href="#produtos-iniciais" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Produtos</a>
                <a href="#regras-remuneracao" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Remuneração</a>
                <a href="#como-funciona" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Como funciona</a>
                <a href="#embaixadores" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Embaixadores</a>
                <a href="#ganhos" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Transparência</a>
                <a href="#faq-indica" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Dúvidas</a>
                <a href="#cadastro-embaixador" class="site-header__link mt-4 max-lg:inline-flex lg:hidden rounded-3xl border-2 border-white/40 px-6 py-3 text-lg font-semibold text-white duration-200 hover:border-primary-200 hover:bg-primary-500">Quero ser embaixador</a>
            @elseif ($nav === 'indicado')
                <a href="#programa" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">O programa</a>
                <a href="#produtos-iniciais" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">O que cotar</a>
                <a href="#cotacao" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Seus dados</a>
                <a href="#como-funciona" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Como funciona</a>
                <a href="#ser-embaixador" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Ser embaixador</a>
                <a href="#info-cadastro-indicado" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Quem pode</a>
                <a href="#faq-indicado" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Dúvidas</a>
                <a href="#cadastro-indicado" class="site-header__link mt-4 max-lg:inline-flex lg:hidden rounded-3xl border-2 border-white/40 px-6 py-3 text-lg font-semibold text-white duration-200 hover:border-primary-200 hover:bg-primary-500">Preencher para cotar</a>
            @else
                <a href="{{ $indicaUrl }}" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Indica</a>
                <a href="{{ $home }}#sobre" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Sobre</a>
                <a href="{{ $home }}#equipe" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Equipe</a>
                <a href="{{ $home }}#blog" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Blog</a>
                <a href="{{ $home }}#cadastro" class="site-header__link max-lg:py-1.5 max-lg:text-lg duration-200">Contato</a>
            @endif
        </nav>
        @if ($nav === 'indica')
            <a class="site-header__cta ui-button group/button hidden items-center justify-center gap-1 rounded-3xl border-2 border-current bg-transparent px-4 py-1.5 text-sm text-inherit duration-500 hover:bg-primary-500 hover:text-white sm:px-5 sm:text-base lg:inline-flex"
                href="#cadastro-embaixador">
                <svg class="h-5 w-5 shrink-0 duration-500 group-hover/button:-rotate-180 sm:h-6 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <span class="whitespace-nowrap">Quero ser embaixador</span>
            </a>
        @elseif ($nav === 'indicado')
            <a class="site-header__cta ui-button group/button hidden items-center justify-center gap-1 rounded-3xl border-2 border-current bg-transparent px-4 py-1.5 text-sm text-inherit duration-500 hover:bg-primary-500 hover:text-white sm:px-5 sm:text-base lg:inline-flex"
                href="#cadastro-indicado">
                <svg class="h-5 w-5 shrink-0 duration-500 group-hover/button:-rotate-180 sm:h-6 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <span class="whitespace-nowrap">Preencher para cotar</span>
            </a>
        @else
            <a class="site-header__cta ui-button group/button hidden items-center justify-center gap-1 rounded-3xl border-2 border-current bg-transparent px-4 py-1.5 text-sm text-inherit duration-500 hover:bg-primary-500 hover:text-white sm:px-5 sm:text-base lg:inline-flex"
                href="{{ $home }}#cadastro">
                <svg class="h-5 w-5 shrink-0 duration-500 group-hover/button:-rotate-180 sm:h-6 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <span class="whitespace-nowrap">Entrar em contato</span>
            </a>
        @endif
    </div>
</header>
