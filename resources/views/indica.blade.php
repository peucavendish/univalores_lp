@extends('layouts.site')

@section('title', 'Univalores Indica — Programa de indicação')
@section('meta_description',
    'Complemente sua renda como embaixador Univalores: indique pessoas para a assessoria e receba por indicações qualificadas. Conheça o programa Univalores Indica.')

@php
    $u = 'https://univalores.com.br';
@endphp

@section('content')
    @include('partials.site-header', ['headerNav' => 'indica'])

    <main id="main-indica" class="flex w-full grow flex-col">
        {{-- Hero (mesma base visual da home: fundo mobile/desktop + gradiente + tipografia) --}}
        <section class="relative min-h-screen bg-secondary-500 text-white">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center bg-fixed">
                    <div class="absolute inset-0 bg-cover bg-center lg:hidden"
                        style="background-image: linear-gradient(to bottom, rgba(24,24,36,0.55), rgba(24,24,36,0.78)), url('{{ $u }}/storage/midias/banners/banner-barco-mobile.webp')"></div>
                    <div class="absolute inset-0 hidden bg-cover bg-center lg:block"
                        style="background-image: linear-gradient(to bottom, rgba(24,24,36,0.55), rgba(24,24,36,0.78)), url('{{ $u }}/storage/midias/banners/banner-barco.webp')"></div>
                </div>
            </div>
            <div class="relative z-[1] flex min-h-screen flex-col justify-end pb-12 pt-32 lg:justify-center lg:pb-20 lg:pt-40">
                <div class="ui-container w-full space-y-6 max-lg:text-center">
                    <h2 class="text-[3.5rem] font-normal leading-none -tracking-wide text-balance max-lg:text-[2.75rem]">
                        Univalores Indica
                    </h2>
                    <div class="max-w-xl text-2xl max-lg:mx-auto max-lg:text-xl">
                        <p>Indique pessoas para conhecer a Univalores e <strong class="font-normal text-white">ganhe dinheiro</strong> indicando. Você complementa a renda; a gente cuida da assessoria.</p>
                        <p class="mt-4 text-xl text-white/90 max-lg:text-lg">
                            Quem indica é <strong class="font-normal text-primary-200">embaixador</strong> — simples, transparente e para quem acredita no que fazemos.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-4 max-lg:justify-center lg:justify-start">
                        <x-univalores.cta href="#cadastro-embaixador" label="Quero ser embaixador" />
                        <a href="#como-funciona"
                            class="ui-button inline-flex items-center justify-center gap-1 rounded-3xl border-2 border-current bg-transparent px-5 py-1.5 text-current duration-500 hover:bg-primary-500 hover:text-white">
                            Ver como funciona
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- O programa --}}
        <section id="programa" class="py-12 lg:py-20">
            <div class="ui-container grid w-full gap-12 lg:grid-cols-2 lg:items-center lg:gap-20">
                <div class="space-y-6">
                    <h2 class="text-4xl font-normal -tracking-wide">O que é o <span class="text-primary-500">Univalores Indica</span>?</h2>
                    <p class="text-lg leading-relaxed">
                        O <strong>Univalores Indica</strong> é o programa em que <strong>embaixadores</strong> — pessoas como você — indicam amigos, conhecidos ou contatos profissionais para conhecer a assessoria Univalores. Quando a indicação avança dentro das regras do programa, <strong>você recebe remuneração</strong>, de forma clara e alinhada ao nosso time.
                    </p>
                    <p class="text-lg leading-relaxed">
                        É uma forma de <strong>complementar a renda</strong> sem virar corretor: você traz o contato qualificado; nossa estrutura apresenta soluções, seguros, crédito e tudo o que a Univalores já oferece ao mercado.
                    </p>
                    <ul class="space-y-3 text-lg">
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Cadastro simples como embaixador</li>
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Material de apoio e acompanhamento</li>
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Pagamentos conforme etapas e política do programa</li>
                    </ul>
                </div>
                <div class="rounded-2xl bg-base-200 p-5 shadow lg:p-8">
                    <h3 class="text-2xl font-normal text-secondary-500">Por que participar?</h3>
                    <div class="mt-6 space-y-5 text-lg font-light">
                        <p>Renda extra com indicações que fazem sentido para a sua rede.</p>
                        <p>Marca forte, time especializado e operação nos mesmos padrões da Univalores.</p>
                        <p>Você ajuda quem você indica a acessar assessoria 360° — seguros, crédito, investimentos e mais.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Como funciona --}}
        <section id="como-funciona" class="bg-base-200 py-12 lg:py-20">
            <div class="ui-container w-full">
                <header class="mb-12 max-w-3xl">
                    <h2 class="text-4xl font-normal -tracking-wide">Como funciona</h2>
                    <p class="mt-4 text-lg">Quatro passos, do cadastro ao reconhecimento pela indicação.</p>
                </header>
                <ol class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ([
                        ['n' => '1', 't' => 'Cadastro', 'd' => 'Você se cadastra como embaixador e aceita o regulamento do programa Univalores Indica.'],
                        ['n' => '2', 't' => 'Indique', 'd' => 'Envie seus contatos pelo canal oficial (formulário ou orientação do time). Quanto mais alinhado ao perfil, melhor.'],
                        ['n' => '3', 't' => 'Acompanhamento', 'd' => 'Nosso time entra em contato, apresenta a Univalores e conduz a jornada com transparência.'],
                        ['n' => '4', 't' => 'Remuneração', 'd' => 'Quando a indicação cumpre as regras do programa, você recebe a bonificação acordada — combinado e documentado.'],
                    ] as $step)
                        <li class="ui-card relative rounded-2xl border border-secondary-500/10 bg-white p-5 shadow">
                            <span class="text-sm font-semibold text-primary-500">{{ $step['n'] }}.</span>
                            <h3 class="mt-1 text-xl font-normal">{{ $step['t'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-base-900/85">{{ $step['d'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        {{-- Embaixadores --}}
        <section id="embaixadores" class="py-12 lg:py-20">
            <div class="ui-container w-full">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-start">
                    <div>
                        <h2 class="text-4xl font-normal -tracking-wide">Quem pode ser <span class="text-primary-500">embaixador</span>?</h2>
                        <p class="mt-4 text-lg leading-relaxed">
                            Embaixadores são pessoas com rede de relacionamento e vontade de indicar com responsabilidade. Você não precisa atuar como produtor ou corretor para participar — o programa é pensado para <strong>quem quer complementar a renda</strong> compartilhando oportunidade.
                        </p>
                    </div>
                    <ul class="space-y-4 text-lg">
                        @foreach ([
                            'Quem já conhece o trabalho da Univalores ou do mercado financeiro e de proteção.',
                            'Influenciadores, consultores, ex-bancários, empresários ou profissionais com boa rede.',
                            'Quem valoriza transparência e quer um canal formal de indicação, sem burocracia desnecessária.',
                            'Maiores de 18 anos, com dados reais para cadastro e recebimento (conforme regras fiscais e do programa).',
                        ] as $item)
                            <li class="flex gap-4 rounded-xl bg-base-200 p-4">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-500/15 text-sm font-semibold text-primary-500">✓</span>
                                <span class="font-light leading-relaxed">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        {{-- Remuneração --}}
        <section id="ganhos" class="bg-secondary-500 py-12 text-white lg:py-20">
            <div class="ui-container grid w-full gap-12 lg:grid-cols-2 lg:items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl font-normal -tracking-wide">Remuneração e transparência</h2>
                    <p class="text-lg font-light leading-relaxed text-white/90">
                        Os valores e gatilhos de pagamento são definidos por <strong>política comercial do programa</strong>, comunicados no seu onboarding e no regulamento. Você sabe o que conta como indicação válida, em qual etapa há pagamento e como receber.
                    </p>
                    <p class="text-lg font-light leading-relaxed text-white/90">
                        Nada de promessa genérica: <strong>embaixadores</strong> trabalham com regras claras e suporte do time Univalores Indica.
                    </p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    @foreach ([
                        ['t' => 'Indicação qualificada', 'd' => 'critérios objetivos combinados com o time.'],
                        ['t' => 'Pagamento', 'd' => 'conforme calendário e documentação do programa.'],
                        ['t' => 'Canal direto', 'd' => 'dúvidas e acompanhamento com a operação.'],
                        ['t' => 'Crescimento', 'd' => 'possibilidade de evoluir conforme resultado e parceria.'],
                    ] as $box)
                        <div class="rounded-xl border border-white/20 bg-white/5 p-5 backdrop-blur-sm">
                            <h3 class="font-semibold text-primary-200">{{ $box['t'] }}</h3>
                            <p class="mt-2 text-sm font-light text-white/85">{{ $box['d'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section id="faq-indica" class="py-12 lg:py-20">
            <div class="ui-container grid w-full gap-10 lg:grid-cols-5">
                <h2 class="text-4xl font-semibold -tracking-wide lg:col-span-2">Dúvidas <wbr>frequentes</h2>
                <div class="space-y-4 lg:col-span-3">
                    <details class="rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="cursor-pointer text-xl font-normal">Preciso ser corretor ou ter SUSEP?</summary>
                        <p class="mt-3 text-base leading-relaxed">Não. O programa é para <strong>embaixadores</strong> que indicam contatos; a Univalores conduz a relação comercial e técnica com o indicado, conforme o modelo de negócio da assessoria.</p>
                    </details>
                    <details class="rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="cursor-pointer text-xl font-normal">Quanto eu posso ganhar?</summary>
                        <p class="mt-3 text-base leading-relaxed">Os valores dependem da tabela vigente do <strong>Univalores Indica</strong>, do produto ou da fase da indicação. No cadastro, nosso time apresenta os critérios e exemplos para o seu perfil.</p>
                    </details>
                    <details class="rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="cursor-pointer text-xl font-normal">Como faço para receber?</summary>
                        <p class="mt-3 text-base leading-relaxed">Após indicações válidas e aprovadas, o pagamento segue o fluxo contratual e fiscal (dados bancários, nota ou autônomo, conforme aplicável). Tudo é alinhado no onboarding.</p>
                    </details>
                    <details class="rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="cursor-pointer text-xl font-normal">Posso indicar qualquer pessoa?</summary>
                        <p class="mt-3 text-base leading-relaxed">Indicações devem ser <strong>reais, consentidas e alinhadas</strong> ao público que a Univalores atende (profissionais e clientes de soluções financeiras e de proteção). Spam ou dados falsos invalidam a participação.</p>
                    </details>
                </div>
            </div>
        </section>

        {{-- CTA / Form --}}
        <section id="cadastro-embaixador" class="bg-secondary-500 py-12 text-white lg:py-20">
            <div class="ui-container w-full space-y-4">
                <header class="space-y-4 text-center">
                    <h2 class="text-4xl font-normal -tracking-wide">Seja embaixador Univalores Indica</h2>
                    <p class="text-lg font-light">Preencha os dados. Em breve entramos em contato para formalizar seu cadastro e enviar o regulamento.</p>
                </header>
                <div class="mx-auto max-w-4xl">
                    <div id="buzzlead-root"></div>
                </div>
            </div>
        </section>

        <section class="border-t border-base-200 py-16 text-center text-sm text-base-900/70">
            <a href="{{ url('/') }}" class="text-primary-500 underline hover:text-primary-500/90">← Voltar para a página principal</a>
        </section>
    </main>

    @include('partials.site-footer', ['cadastroHref' => url('/indica') . '#cadastro-embaixador'])
@endsection

@push('scripts')
    <script>
        window.campaignId = 'YQWD';
    </script>
    <script src="https://static.buzzlead.com.br/widget.js"></script>
@endpush
