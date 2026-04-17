@extends('layouts.site')

@section('title', 'Univalores Indica — Programa de indicação')
@section('meta_description',
    'Univalores Indica: programa de indicação para embaixadores. Consórcio e seguro de vida no lançamento; tabelas de remuneração por linha e por prêmio. Cadastre-se e saiba mais.')

@php
    $u = 'https://univalores.com.br';
@endphp

@section('content')
    @include('partials.site-header', ['headerNav' => 'indica'])

    <main id="main-indica" class="flex w-full grow flex-col">
        {{-- Hero (mesma base visual da home: fundo mobile/desktop + gradiente + tipografia) --}}
        <section data-header-scheme="dark" class="relative min-h-screen bg-secondary-500 text-white" aria-label="Apresentação do programa Univalores Indica">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center bg-fixed">
                    <div class="absolute inset-0 bg-cover bg-center lg:hidden"
                        style="background-image: linear-gradient(to bottom, rgba(8,8,16,0.78), rgba(10,10,18,0.9)), url('{{ $u }}/storage/midias/banners/banner-barco-mobile.webp')"></div>
                    <div class="absolute inset-0 hidden bg-cover bg-center lg:block"
                        style="background-image: linear-gradient(90deg, rgba(8,8,16,0.9) 0%, rgba(10,10,18,0.76) 45%, rgba(10,10,18,0.9) 100%), url('{{ $u }}/storage/midias/banners/banner-barco.webp')"></div>
                </div>
            </div>
            <div class="relative z-[1] flex min-h-screen items-center py-24 lg:py-32">
                <div class="ui-container w-full">
                    <div class="grid w-full items-start gap-10 lg:grid-cols-2 lg:gap-10 xl:gap-14">
                        <div class="max-w-6xl lg:max-w-none">
                            <p class="text-white/85 uppercase font-semibold" style="font-size: clamp(13px, 1.1vw, 16px); letter-spacing: 0.18em;">
                                Programa de indicação Univalores
                            </p>

                            <h1 class="mt-6 max-w-6xl font-semibold tracking-tight text-white" style="font-size: clamp(54px, 7.2vw, 116px); line-height: 0.95;">
                                Indique.<br>Ganhe at&eacute; <span class="text-primary-500">R$ 600</span>
                            </h1>
                            <p class="mt-4" style="font-size: clamp(30px, 2.8vw, 46px); line-height: 1.04;">
                                <span class="text-primary-500">por indicação válida</span>
                            </p>

                            <p class="mt-6 max-w-4xl text-white/84" style="font-size: clamp(20px, 1.7vw, 30px); line-height: 1.26;">
                                Você indica, a Univalores assessora, e o pagamento acontece com negócio concretizado.
                            </p>

                            <br><div class="mt-7 flex flex-wrap gap-x-12 gap-y-3 sm:gap-x-14">
                                <span class="inline-flex items-center rounded-full border border-white/20 bg-white/8 px-5 py-2.5 text-white/90" style="font-size: clamp(14px, 1vw, 18px);">
                                    Lançamento: consórcio e seguro de vida
                                </span>
                                <span class="inline-flex items-center rounded-full border border-primary-500/40 bg-primary-500/16 px-5 py-2.5 text-primary-500" style="font-size: clamp(14px, 1vw, 18px);">
                                    Tabela de valores transparente
                                </span>
                            </div>

                            <br><div class="mt-9 flex flex-wrap items-center gap-4 lg:mt-11">
                                <x-univalores.cta href="#cadastro-embaixador" label="Quero ser embaixador" class="px-9 py-4 text-[17px]" />
                                <a href="#regras-remuneracao"
                                    class="ui-button inline-flex items-center justify-center gap-1 rounded-3xl bg-white/12 px-9 py-4 text-[17px] text-white duration-500 hover:bg-white/20">
                                    Ver regras e valores
                                </a>
                            </div>
                        </div>

                        <div id="cadastro-embaixador" class="scroll-mt-28 w-full min-w-0">
                            <div class="rounded-2xl bg-white/5 p-4 ring-1 ring-white/10 sm:p-6 lg:p-8">
                                <div id="buzzlead-root"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- O programa --}}
        <section id="programa" data-header-scheme="light" class="scroll-mt-28 py-16 lg:py-24">
            <div class="ui-container grid w-full gap-8 lg:grid-cols-2 lg:items-start lg:gap-10">
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
                <div class="space-y-6">
                    <h3 class="text-4xl font-normal -tracking-wide">Por que <span class="text-primary-500">participar</span>?</h3>
                    <p class="text-lg leading-relaxed">
                        O programa foi desenhado para transformar relacionamento em oportunidade real de renda extra, sem burocracia e com suporte da operação Univalores.
                    </p>
                    <ul class="space-y-3 text-lg">
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Renda extra com indicações que fazem sentido para a sua rede.</li>
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Marca forte, time especializado e operação nos mesmos padrões da Univalores.</li>
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Você ajuda quem você indica a acessar assessoria 360° — seguros, crédito, investimentos e mais.</li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- Produtos iniciais --}}
        <section id="produtos-iniciais" data-header-scheme="light" class="scroll-mt-28 bg-base-100 py-16 text-base-900 lg:py-24">
            <div class="ui-container w-full">
                <div class="rounded-3xl bg-transparent p-8 lg:p-12">
                    <p class="text-base uppercase tracking-[0.16em] text-primary-500">Lançamento inicial</p>
                    <h2 class="mt-3 text-3xl font-semibold leading-tight sm:text-4xl lg:text-5xl">
                        Produtos disponíveis no início do programa
                    </h2>
                    <p class="mt-6 max-w-3xl text-xl leading-relaxed text-base-900/80 lg:text-2xl">
                        O indicado poderá distribuir para os seus indicados os produtos iniciais da operação:
                        <strong class="font-semibold text-primary-500">consórcio</strong> e
                        <strong class="font-semibold text-primary-500">seguro de vida</strong>.
                    </p>
                    <div class="mt-10 grid gap-8 sm:grid-cols-2 sm:gap-10">
                        <article class="rounded-2xl bg-transparent p-5">
                            <span class="inline-flex items-center rounded-full border border-primary-500/35 bg-primary-500/10 px-4 py-1.5 text-sm font-semibold uppercase tracking-[0.12em] text-primary-500">
                                Produto 01
                            </span>
                            <h3 class="mt-4 text-3xl font-semibold text-secondary-500 sm:text-4xl">Consórcio</h3>
                            <p class="mt-4 text-lg leading-relaxed text-base-900/85 sm:text-xl">Solução incrível para planejamento de aquisição com disciplina financeira.</p>
                            <div class="mt-6 grid w-full grid-cols-1 gap-3">
                                <span class="flex min-h-[3rem] w-full items-center justify-center rounded-2xl border border-primary-500/25 bg-primary-500/10 px-4 py-3 text-center text-base font-semibold text-primary-500 shadow-sm">
                                    Lançamento inicial
                                </span>
                            </div>
                        </article>
                        <article class="rounded-2xl bg-transparent p-5">
                            <span class="inline-flex items-center rounded-full border border-primary-500/35 bg-primary-500/10 px-4 py-1.5 text-sm font-semibold uppercase tracking-[0.12em] text-primary-500">
                                Produto 02
                            </span>
                            <h3 class="mt-4 text-3xl font-semibold text-secondary-500 sm:text-4xl">Seguro de vida</h3>
                            <p class="mt-4 text-lg leading-relaxed text-base-900/85 sm:text-xl">Proteção financeira com foco em segurança e previsibilidade familiar.</p>
                            <div class="mt-6 grid w-full grid-cols-1 gap-3">
                                <span class="flex min-h-[3rem] w-full items-center justify-center rounded-2xl border border-primary-500/25 bg-primary-500/10 px-4 py-3 text-center text-base font-semibold text-primary-500 shadow-sm">
                                    Lançamento inicial
                                </span>
                            </div>
                        </article>
                    </div>
                    <div class="mt-9 w-full">
                        <p class="text-lg font-semibold uppercase tracking-[0.14em] text-primary-500">Em breve</p><br>
                        <div class="mt-5 grid w-full grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                            @foreach (['Investimentos', 'Financiamento Imobiliário', 'Home Equity', 'Câmbio', 'Crédito'] as $produto)
                                <span class="flex min-h-[3.25rem] w-full items-center justify-center rounded-2xl border border-secondary-500/15 bg-white px-5 py-3 text-center text-lg font-medium text-secondary-500 shadow-sm">
                                    {{ $produto }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Regras de remuneração (consórcio + seguro) --}}
        <section id="regras-remuneracao" data-header-scheme="light" class="scroll-mt-28 bg-base-200 py-16 text-base-900 lg:py-24" aria-labelledby="regras-remuneracao-titulo">
            <div class="ui-container w-full">
                <header class="mb-12 max-w-3xl lg:mb-14">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-primary-500">Remuneração</p>
                    <h2 id="regras-remuneracao-titulo" class="mt-2 text-4xl font-semibold -tracking-wide text-secondary-500 lg:text-5xl">
                        Regras e valores por produto
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-base-900/75">
                        Pagamentos válidos por <strong class="font-semibold text-secondary-500">indicação com negócio concretizado</strong>.
                    </p>
                </header>

                <div class="grid gap-8 lg:grid-cols-1">
                    {{-- Consórcio --}}
                    <article id="regras-consorcio" class="scroll-mt-28 overflow-hidden rounded-3xl bg-white shadow-[0_10px_40px_-20px_rgba(10,10,18,0.18)] ring-1 ring-secondary-500/10">
                        <header class="flex flex-wrap items-end justify-between gap-3 bg-secondary-500 px-6 py-6 text-white sm:px-8 sm:py-7">
                            <div>
                                <p class="text-[11px] font-semibold uppercase tracking-[0.2em] text-primary-200">Produto 01</p>
                                <h3 class="mt-1.5 text-3xl font-semibold sm:text-4xl">Consórcio</h3>
                                <p class="mt-2 max-w-xl text-sm text-white/75 sm:text-base">Valor pago conforme a linha do consórcio contratada.</p>
                            </div>
                            <span class="rounded-full bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em] text-white/80">3 linhas</span>
                        </header>

                        <div class="px-5 pt-5 sm:px-8 sm:pt-7">
                            <div class="flex items-center justify-between border-b border-base-200 pb-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-base-900/45">
                                <span>Linha</span>
                                <span>Pagamento por indicação</span>
                            </div>
                        </div>

                        <ul class="divide-y divide-base-200 px-5 sm:px-8">
                            @foreach ([
                                ['titulo' => 'Veículos', 'sub' => null, 'valor' => 'R$ 200,00'],
                                ['titulo' => 'Pesados', 'sub' => 'Caminhões, ônibus etc.', 'valor' => 'R$ 400,00'],
                                ['titulo' => 'Imóveis', 'sub' => null, 'valor' => 'R$ 600,00'],
                            ] as $c)
                                <li class="flex flex-wrap items-center justify-between gap-4 py-5">
                                    <div class="min-w-0">
                                        <p class="text-lg font-semibold text-secondary-500">{{ $c['titulo'] }}</p>
                                        @if ($c['sub'])
                                            <p class="mt-0.5 text-sm text-base-900/60">{{ $c['sub'] }}</p>
                                        @endif
                                    </div>
                                    <span class="indica-valor-badge">{{ $c['valor'] }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <p class="border-t border-base-200 bg-base-100/60 px-6 py-4 text-xs text-base-900/60 sm:px-8">
                            Valores pagos por <strong class="font-semibold text-secondary-500">indicação com negócio concretizado</strong>.
                        </p>
                    </article>

                    {{-- Seguro de vida --}}
                    <article id="regras-seguro-vida" class="scroll-mt-28 overflow-hidden rounded-3xl bg-white shadow-[0_10px_40px_-20px_rgba(10,10,18,0.18)] ring-1 ring-secondary-500/10">
                        <header class="flex flex-wrap items-end justify-between gap-3 bg-secondary-500 px-6 py-6 text-white sm:px-8 sm:py-7">
                            <div>
                                <p class="text-[11px] font-semibold uppercase tracking-[0.2em] text-primary-200">Produto 02</p>
                                <h3 class="mt-1.5 text-3xl font-semibold sm:text-4xl">Seguro de vida</h3>
                                <p class="mt-2 max-w-xl text-sm text-white/75 sm:text-base">Pagamento conforme a faixa do prêmio mensal do seguro.</p>
                            </div>
                            <span class="rounded-full bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em] text-white/80">4 faixas</span>
                        </header>

                        <div class="px-5 pt-5 sm:px-8 sm:pt-7">
                            <div class="flex items-center justify-between border-b border-base-200 pb-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-base-900/45">
                                <span>Prêmio mensal</span>
                                <span>Pagamento por indicação</span>
                            </div>
                        </div>

                        <ul class="divide-y divide-base-200 px-5 sm:px-8">
                            @foreach ([
                                ['faixa' => 'Até R$ 150', 'pagamento' => 'R$ 100,00'],
                                ['faixa' => 'R$ 151 a R$ 300', 'pagamento' => 'R$ 200,00'],
                                ['faixa' => 'R$ 301 a R$ 600', 'pagamento' => 'R$ 400,00'],
                                ['faixa' => 'Acima de R$ 600', 'pagamento' => 'R$ 600,00'],
                            ] as $linha)
                                <li class="flex flex-wrap items-center justify-between gap-4 py-5">
                                    <p class="text-lg font-medium text-secondary-500">{{ $linha['faixa'] }}</p>
                                    <span class="indica-valor-badge">{{ $linha['pagamento'] }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <p class="border-t border-base-200 bg-base-100/60 px-6 py-4 text-xs text-base-900/60 sm:px-8">
                            Pagamento por <strong class="font-semibold text-secondary-500">indicação com negócio concretizado</strong>, conforme a faixa do prêmio mensal.
                        </p>
                    </article>
                </div>

                {{-- Remuneração e transparência (após as tabelas; âncora #ganhos) --}}
                <br><div id="ganhos" class="scroll-mt-28 mt-14 rounded-3xl bg-secondary-500 p-8 text-white shadow-[0_10px_40px_-20px_rgba(10,10,18,0.25)] lg:p-12" data-header-scheme="dark">
                    <div class="grid w-full gap-12 lg:grid-cols-2 lg:items-center">
                        <div class="space-y-6">
                            <h2 class="text-4xl font-normal -tracking-wide">Remuneração e transparência</h2>
                            <p class="text-lg font-light leading-relaxed text-white/90">
                                Os valores e gatilhos de pagamento são definidos por <strong>política comercial do programa</strong>, comunicados no seu onboarding e no regulamento. Você sabe o que conta como indicação válida, em qual etapa há pagamento e como receber.
                            </p>
                            <p class="text-lg font-light leading-relaxed text-white/90">
                                Nada de promessa genérica: <strong>embaixadores</strong> trabalham com regras claras e suporte do time Univalores Indica.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-6 lg:gap-8">
                            @foreach ([
                                ['t' => 'Indicação qualificada', 'd' => 'critérios objetivos combinados com o time.'],
                                ['t' => 'Pagamento', 'd' => 'conforme calendário e documentação do programa.'],
                                ['t' => 'Canal direto', 'd' => 'dúvidas e acompanhamento com a operação.'],
                                ['t' => 'Crescimento', 'd' => 'possibilidade de evoluir conforme resultado e parceria.'],
                            ] as $box)
                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <h3 class="font-semibold text-primary-200">{{ $box['t'] }}</h3>
                                    <p class="mt-2 text-base font-light leading-relaxed text-white/90">{{ $box['d'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Como funciona --}}
        <section id="como-funciona" data-header-scheme="light" class="scroll-mt-28 bg-base-100 py-16 lg:py-24">
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
                        <li class="ui-card relative rounded-2xl bg-transparent p-5">
                            <span class="text-sm font-semibold text-primary-500">{{ $step['n'] }}.</span>
                            <h3 class="mt-1 text-xl font-normal">{{ $step['t'] }}</h3>
                            <p class="mt-3 text-base leading-relaxed text-base-900/90 sm:text-lg">{{ $step['d'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        {{-- Embaixadores --}}
        <section id="embaixadores" data-header-scheme="light" class="scroll-mt-28 py-16 lg:py-24">
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
                            <li class="flex gap-4 rounded-xl bg-transparent p-4">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-500/15 text-sm font-semibold text-primary-500">✓</span>
                                <span class="font-light leading-relaxed">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section id="faq-indica" data-header-scheme="light" class="scroll-mt-28 py-16 lg:py-24">
            <div class="ui-container grid w-full gap-10 lg:grid-cols-5">
                <h2 class="text-4xl font-semibold -tracking-wide lg:col-span-2">Dúvidas <wbr>frequentes</h2>
                <div class="space-y-4 lg:col-span-3">
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Preciso ser corretor ou ter SUSEP?</summary>
                        <p class="mt-3 text-base leading-relaxed">Não. O programa é para <strong>embaixadores</strong> que indicam contatos; a Univalores conduz a relação comercial e técnica com o indicado, conforme o modelo de negócio da assessoria.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Quanto eu posso ganhar?</summary>
                        <p class="mt-3 text-base leading-relaxed">Os valores dependem da tabela vigente do <strong>Univalores Indica</strong>, do produto ou da fase da indicação. No cadastro, nosso time apresenta os critérios e exemplos para o seu perfil.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Como faço para receber?</summary>
                        <p class="mt-3 text-base leading-relaxed">Após indicações válidas e aprovadas, o pagamento segue o fluxo contratual e fiscal (dados bancários, nota ou autônomo, conforme aplicável). Tudo é alinhado no onboarding.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Posso indicar qualquer pessoa?</summary>
                        <p class="mt-3 text-base leading-relaxed">Indicações devem ser <strong>reais, consentidas e alinhadas</strong> ao público que a Univalores atende (profissionais e clientes de soluções financeiras e de proteção). Spam ou dados falsos invalidam a participação.</p>
                    </details>
                </div>
            </div>
        </section>

        <section data-header-scheme="light" class="border-t border-base-200 py-16 text-center text-sm text-base-900/70">
            <div class="flex flex-col items-center justify-center gap-4 sm:flex-row sm:flex-wrap sm:gap-3">
                <a href="#main-indica"
                    class="ui-button inline-flex items-center justify-center gap-2 rounded-3xl border-2 border-primary-500 bg-primary-500 px-6 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-primary hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500">
                    <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                    Voltar ao topo
                </a>
                <a href="{{ $u }}" class="inline-flex items-center justify-center rounded-3xl border-2 border-secondary-500/20 bg-transparent px-6 py-3 text-base font-medium text-secondary-500 transition hover:border-primary-500/40 hover:text-primary-500" rel="noopener noreferrer">
                    Site Univalores
                </a>
            </div>
        </section>
    </main>

    <a href="#main-indica"
        class="fixed bottom-6 right-6 z-40 flex h-14 w-14 items-center justify-center rounded-full border border-white/25 bg-primary-500 text-white shadow-[0_8px_30px_-8px_rgba(230,148,0,0.55)] transition hover:bg-primary hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500 sm:bottom-8 sm:right-8 lg:bottom-10"
        aria-label="Voltar ao topo da página Indica">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </a>

    @include('partials.site-footer', ['cadastroHref' => url('/indica') . '#cadastro-embaixador'])
@endsection

@push('scripts')
    <script>
        window.campaignId = 'YQWD';
    </script>
    <script src="https://static.buzzlead.com.br/widget.js"></script>
@endpush
