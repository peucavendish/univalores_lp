@extends('layouts.site')

@section('title', 'Cotação consórcio e seguro — Indicado Univalores Indica')
@section('meta_description',
    'Você foi indicado: deixe seus dados para cotação de consórcio ou seguro de vida com a Univalores. Formulário focado em atendimento e proposta; programa de embaixadores na página Univalores Indica.')

@php
    $u = 'https://univalores.com.br';
@endphp

@section('content')
    @include('partials.site-header', ['headerNav' => 'indicado'])

    <main id="main-indicado" class="flex w-full grow flex-col">
        {{-- Hero (mesma base visual de /indica) --}}
        <section data-header-scheme="dark" class="relative min-h-screen bg-secondary-500 text-white" aria-label="Cotação para indicado — consórcio e seguro de vida">
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
                                Univalores Indica · você foi indicado
                            </p>

                            <h1 class="mt-6 max-w-6xl font-semibold tracking-tight text-white" style="font-size: clamp(54px, 7.2vw, 116px); line-height: 0.95;">
                                Cotação<br><span class="text-primary-500">consórcio</span> ou <span class="text-primary-500">seguro de vida</span>
                            </h1>
                            <p class="mt-4" style="font-size: clamp(30px, 2.8vw, 46px); line-height: 1.04;">
                                <span class="text-white/95">Deixe seus dados ao lado</span>
                            </p>

                            <p class="mt-6 max-w-4xl text-white/84" style="font-size: clamp(20px, 1.7vw, 30px); line-height: 1.26;">
                                O foco desta página é <strong class="font-semibold text-white">um só</strong>: o time da Univalores usar suas informações para <strong class="font-semibold text-white">entrar em contato e montar sua cotação</strong> de consórcio ou de seguro de vida, com apoio de administradoras e seguradoras parceiras.
                            </p>

                            <br><div class="mt-7 flex flex-wrap gap-x-12 gap-y-3 sm:gap-x-14">
                                <span class="inline-flex items-center rounded-full border border-white/20 bg-white/8 px-5 py-2.5 text-white/90" style="font-size: clamp(14px, 1vw, 18px);">
                                    Formulário para cotação e retorno
                                </span>
                                <span class="inline-flex items-center rounded-full border border-primary-500/40 bg-primary-500/16 px-5 py-2.5 text-primary-500" style="font-size: clamp(14px, 1vw, 18px);">
                                    Sem compromisso de contratar
                                </span>
                            </div>

                            <br><div class="mt-9 flex flex-wrap items-center gap-4 lg:mt-11">
                                <x-univalores.cta href="#cadastro-indicado" label="Preencher para cotar" class="px-9 py-4 text-[17px]" />
                                <a href="#produtos-iniciais"
                                    class="ui-button inline-flex items-center justify-center gap-1 rounded-3xl bg-white/12 px-9 py-4 text-[17px] text-white duration-500 hover:bg-white/20">
                                    O que posso cotar
                                </a>
                            </div>
                            <p class="mt-6 max-w-2xl text-base leading-relaxed text-white/78 sm:text-lg">
                                Quer <strong class="text-white">indicar outras pessoas</strong> (programa para embaixadores)? Isso é em outra página:
                                <a href="{{ url('/indica') }}#cadastro-embaixador" class="font-semibold text-primary-400 underline decoration-primary-400/50 underline-offset-2 transition hover:text-primary-300">Univalores Indica — cadastro de embaixador</a>.
                            </p>
                        </div>

                        <div id="cadastro-indicado" class="scroll-mt-28 w-full min-w-0">
                            <div class="rounded-2xl bg-white/5 p-4 ring-1 ring-white/10 sm:p-6 lg:p-8">
                                <div id="buzzlead-form"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- O programa (indicado) --}}
        <section id="programa" data-header-scheme="light" class="scroll-mt-28 py-16 lg:py-24">
            <div class="ui-container grid w-full gap-8 lg:grid-cols-2 lg:items-start lg:gap-10">
                <div class="space-y-6">
                    <h2 class="text-4xl font-normal -tracking-wide">Indicação → <span class="text-primary-500">cotação</span></h2>
                    <p class="text-lg leading-relaxed">
                        Um embaixador do <strong>Univalores Indica</strong> encaminhou seu interesse. <strong>Aqui o assunto é cotação</strong>: você informa dados para o time da Univalores <strong>estudar perfil</strong>, <strong>alinhar produto</strong> (consórcio ou seguro de vida neste primeiro momento) e <strong>devolver uma proposta</strong> com clareza — sem obrigação de fechar.
                    </p>
                    <p class="text-lg leading-relaxed">
                        <strong class="text-secondary-500">Este formulário não é cadastro de embaixador.</strong> Quem quer participar do programa para indicar terceiros faz o cadastro em <a href="{{ url('/indica') }}#cadastro-embaixador" class="font-semibold text-primary-500 underline decoration-primary-500/40 underline-offset-2 hover:decoration-primary-500">Univalores Indica</a>.
                    </p>
                    <ul class="space-y-3 text-lg">
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Dados para <strong>contato e cotação</strong> de consórcio ou seguro de vida</li>
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Atendimento pela operação Univalores, com vínculo à indicação recebida</li>
                        <li class="flex gap-3"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-primary-500"></span> Curadoria com <strong>administradoras e seguradoras</strong> parceiras</li>
                    </ul>
                </div>
                <div class="space-y-6">
                    <h3 class="text-4xl font-normal -tracking-wide">A Univalores na <span class="text-primary-500">prática</span></h3>
                    <p class="text-lg leading-relaxed">
                        A Univalores é uma <strong>assessoria com hub de soluções 360°</strong>: trabalhamos com <strong>diversas administradoras de consórcio</strong>, <strong>seguradoras</strong>, <strong>instituições financeiras</strong> e demais fornecedores — com curadoria, independência e suporte técnico para montar a melhor proposta ao seu perfil.
                    </p>
                    <p class="text-lg leading-relaxed">
                        No site institucional você vê o portfólio completo — seguros, consórcio, investimentos, crédito, câmbio, previdência, financiamento, home equity e mais — sempre com acesso às principais parceiras do mercado.
                    </p>
                    <p class="text-lg leading-relaxed">
                        <a href="{{ $u }}" class="font-semibold text-primary-500 underline decoration-primary-500/40 underline-offset-2 hover:decoration-primary-500" rel="noopener noreferrer">univalores.com.br</a> — conheça a estrutura, o time e as frentes de atuação.
                    </p>
                </div>
            </div>
        </section>

        {{-- CTA embaixador --}}
        <section id="ser-embaixador" data-header-scheme="light" class="scroll-mt-28 border-y border-base-200 bg-base-100 py-12 lg:py-16">
            <div class="ui-container">
                <div class="flex flex-col items-start justify-between gap-6 rounded-3xl bg-secondary-500 px-8 py-8 text-white shadow-[0_10px_40px_-20px_rgba(10,10,18,0.2)] sm:flex-row sm:items-center sm:px-10 lg:py-10">
                    <div class="max-w-2xl space-y-2">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-primary-200">Não é o seu foco agora?</p>
                        <h2 class="text-2xl font-semibold tracking-tight sm:text-3xl">Quer indicar pessoas, não cotar?</h2>
                        <p class="text-base leading-relaxed text-white/85 sm:text-lg">
                            O cadastro ao lado é para <strong class="text-white">cotação como cliente</strong>. O programa <strong class="text-white">Univalores Indica</strong> para embaixadores — quem indica contatos — tem fluxo e formulário próprios na página principal.
                        </p>
                    </div>
                    <a href="{{ url('/indica') }}#cadastro-embaixador"
                        class="ui-button inline-flex shrink-0 items-center justify-center rounded-3xl border-2 border-white/30 bg-primary-500 px-8 py-4 text-base font-semibold text-white transition hover:bg-primary hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-300">
                        Ir para Univalores Indica
                    </a>
                </div>
            </div>
        </section>

        {{-- Produtos iniciais (igual /indica) --}}
        <section id="produtos-iniciais" data-header-scheme="light" class="scroll-mt-28 bg-base-100 py-16 text-base-900 lg:py-24">
            <div class="ui-container w-full">
                <div class="rounded-3xl bg-transparent p-8 lg:p-12">
                    <p class="text-base uppercase tracking-[0.16em] text-primary-500">Neste primeiro contato</p>
                    <h2 class="mt-3 text-3xl font-semibold leading-tight sm:text-4xl lg:text-5xl">
                        O que você pode cotar por aqui
                    </h2>
                    <p class="mt-6 max-w-3xl text-xl leading-relaxed text-base-900/80 lg:text-2xl">
                        Ao deixar seus dados no formulário, você dá início à <strong class="font-semibold text-secondary-500">cotação</strong> nestas linhas — com apoio da assessoria e acesso a
                        <strong class="font-semibold text-primary-500">administradoras de consórcio</strong> e
                        <strong class="font-semibold text-primary-500">seguradoras</strong> parceiras. Outras soluções da Univalores podem entrar na conversa depois, conforme necessidade.
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

        {{-- Cotação: para que servem os dados --}}
        <section id="cotacao" data-header-scheme="light" class="scroll-mt-28 bg-base-200 py-16 text-base-900 lg:py-24">
            <div class="ui-container w-full">
                <div class="grid gap-10 lg:grid-cols-2 lg:items-start lg:gap-14">
                    <div class="space-y-5">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-primary-500">Seus dados</p>
                        <h2 class="text-4xl font-semibold -tracking-wide text-secondary-500 lg:text-5xl">
                            Tudo para a cotação e o retorno do time
                        </h2>
                        <p class="text-lg leading-relaxed text-base-900/80">
                            O formulário ao lado existe para você <strong class="text-secondary-500">informar quem é você</strong>, <strong class="text-secondary-500">como contatá-lo</strong> e <strong class="text-secondary-500">o que pretende cotar</strong> (consórcio, seguro de vida ou ambos). Com isso, a Univalores organiza o próximo passo: conversa, simulações e proposta — sempre no ritmo que fizer sentido para você.
                        </p>
                    </div>
                    <ul class="space-y-4 text-lg">
                        @foreach ([
                            ['t' => 'Dados de contato', 'd' => 'telefone, e-mail e demais campos para o assessor retornar com a cotação.'],
                            ['t' => 'Perfil e necessidade', 'd' => 'linha (veículo, imóvel, proteção familiar etc.) para direcionar administradora ou seguradora.'],
                            ['t' => 'Sem misturar papéis', 'd' => 'esta página não é o cadastro de embaixador; quem quer indicar terceiros usa a página Univalores Indica.'],
                        ] as $row)
                            <li class="rounded-2xl border border-secondary-500/10 bg-white p-5 shadow-sm">
                                <h3 class="font-semibold text-secondary-500">{{ $row['t'] }}</h3>
                                <p class="mt-2 text-base leading-relaxed text-base-900/80">{{ $row['d'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        {{-- Confiança / assessoria --}}
        <section id="confianca" data-header-scheme="dark" class="scroll-mt-28 bg-secondary-500 py-16 text-white lg:py-24">
            <div class="ui-container w-full">
                <div class="mx-auto max-w-4xl text-center">
                    <h2 class="text-3xl font-normal -tracking-wide sm:text-4xl">Por trás da sua cotação</h2>
                    <p class="mt-5 text-lg font-light leading-relaxed text-white/90">
                        A Univalores é uma assessoria que reúne <strong class="text-white">administradoras de consórcio</strong>, <strong class="text-white">seguradoras</strong>, <strong class="text-white">instituições financeiras</strong> e outros parceiros — com curadoria e suporte para montar a proposta certa. O que importa nesta página é <strong class="text-white">você receber uma cotação clara</strong>; detalhes do programa para quem indica ficam na página <a href="{{ url('/indica') }}" class="font-semibold text-primary-300 underline decoration-primary-300/50 underline-offset-2 hover:text-primary-200">Univalores Indica</a>.
                    </p>
                </div>
            </div>
        </section>

        {{-- Como funciona (visão indicado) --}}
        <section id="como-funciona" data-header-scheme="light" class="scroll-mt-28 bg-base-100 py-16 lg:py-24">
            <div class="ui-container w-full">
                <header class="mb-12 max-w-3xl">
                    <h2 class="text-4xl font-normal -tracking-wide">Como funciona</h2>
                    <p class="mt-4 text-lg">Do formulário à cotação — em quatro passos.</p>
                </header>
                <ol class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ([
                        ['n' => '1', 't' => 'Você preenche o formulário', 'd' => 'Informa dados para contato e o que deseja cotar: consórcio, seguro de vida ou os dois.'],
                        ['n' => '2', 't' => 'O time organiza o retorno', 'd' => 'A operação localiza sua indicação e prepara a conversa com contexto (embaixador + necessidade).'],
                        ['n' => '3', 't' => 'Cotação e simulação', 'd' => 'Apresentamos opções com administradoras e seguradoras parceiras, alinhadas ao seu perfil.'],
                        ['n' => '4', 't' => 'Você decide', 'd' => 'Recebe a proposta e avalia com calma. Contratar é opcional. Quer ser embaixador? Use a página Univalores Indica.'],
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

        {{-- Info cadastro indicado --}}
        <section id="info-cadastro-indicado" data-header-scheme="light" class="scroll-mt-28 py-16 lg:py-24">
            <div class="ui-container w-full">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-start">
                    <div>
                        <h2 class="text-4xl font-normal -tracking-wide">Quem pode <span class="text-primary-500">preencher</span>?</h2>
                        <p class="mt-4 text-lg leading-relaxed">
                            Este formulário é para quem foi <strong>indicado por um embaixador</strong> e quer <strong>cotação de consórcio ou seguro de vida</strong> com a Univalores. É preciso ter <strong>18 anos ou mais</strong> e informar dados verdadeiros para contato e montagem da proposta.
                        </p>
                    </div>
                    <ul class="space-y-4 text-lg">
                        @foreach ([
                            'Quem quer cotar consórcio (veículo, imóvel etc.) ou seguro de vida com apoio da assessoria.',
                            'Quem autoriza o contato após o embaixador ter compartilhado o interesse pelo programa Indica.',
                            'Quem entende que esta página não é cadastro de embaixador — quem quer indicar outras pessoas usa a página Univalores Indica.',
                            'Quem também quiser ser embaixador deve usar o cadastro próprio em Univalores Indica (além deste, se fizer sentido).',
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
        <section id="faq-indicado" data-header-scheme="light" class="scroll-mt-28 py-16 lg:py-24">
            <div class="ui-container grid w-full gap-10 lg:grid-cols-5">
                <h2 class="text-4xl font-semibold -tracking-wide lg:col-span-2">Dúvidas <wbr>frequentes</h2>
                <div class="space-y-4 lg:col-span-3">
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Sou obrigado a contratar algo?</summary>
                        <p class="mt-3 text-base leading-relaxed">Não. O cadastro é para <strong>contato e apresentação</strong>; a contratação é independente e voluntária.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">O que a Univalores faz com meus dados?</summary>
                        <p class="mt-3 text-base leading-relaxed">Usamos as informações para <strong>retornar o contato</strong> e <strong>montar a cotação</strong> de consórcio e/ou seguro de vida, com apoio de parceiros (administradoras, seguradoras etc.). Veja também o site institucional <a href="{{ $u }}" class="font-semibold text-primary-600 underline" rel="noopener noreferrer">univalores.com.br</a> para conhecer a assessoria por completo.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Fui indicado por um embaixador. Isso muda minha cotação?</summary>
                        <p class="mt-3 text-base leading-relaxed">O embaixador apenas <strong>encaminha seu interesse</strong>; a cotação e a proposta seguem o mesmo padrão de atendimento da Univalores. Regras do programa para quem indica estão na página <a href="{{ url('/indica') }}" class="font-semibold text-primary-600 underline">Univalores Indica</a>, separada deste formulário de cliente.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Meus dados estão seguros?</summary>
                        <p class="mt-3 text-base leading-relaxed">O uso segue a política de privacidade e a finalidade de contato e cotação pela Univalores, em linha com a legislação aplicável.</p>
                    </details>
                    <details class="rounded-lg bg-transparent px-6 py-4 open:bg-base-200/50">
                        <summary class="cursor-pointer text-xl font-normal">Quero ser embaixador (indicar pessoas)</summary>
                        <p class="mt-3 text-base leading-relaxed">Use o cadastro de embaixador em <a href="{{ url('/indica') }}#cadastro-embaixador" class="font-semibold text-primary-600 underline">Univalores Indica</a>. Este formulário é focado em <strong>cotação para você como cliente</strong>.</p>
                    </details>
                </div>
            </div>
        </section>

        <section data-header-scheme="light" class="border-t border-base-200 py-16 text-center text-sm text-base-900/70">
            <div class="flex flex-col items-center justify-center gap-4 sm:flex-row sm:flex-wrap sm:gap-3">
                <a href="#main-indicado"
                    class="ui-button inline-flex items-center justify-center gap-2 rounded-3xl border-2 border-primary-500 bg-primary-500 px-6 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-primary hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500">
                    <svg class="h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                    Voltar ao topo
                </a>
                <a href="{{ url('/indica') }}#cadastro-embaixador" class="inline-flex items-center justify-center rounded-3xl border-2 border-secondary-500/20 bg-transparent px-6 py-3 text-base font-medium text-secondary-500 transition hover:border-primary-500/40 hover:text-primary-500">
                    Quero ser embaixador (Indica)
                </a>
                <a href="{{ $u }}" class="inline-flex items-center justify-center rounded-3xl border-2 border-secondary-500/20 bg-transparent px-6 py-3 text-base font-medium text-secondary-500 transition hover:border-primary-500/40 hover:text-primary-500" rel="noopener noreferrer">
                    Site Univalores
                </a>
            </div>
        </section>
    </main>

    <a href="#cadastro-indicado"
        class="fixed bottom-6 right-6 z-40 flex h-14 w-14 items-center justify-center rounded-full border border-white/25 bg-primary-500 text-white shadow-[0_8px_30px_-8px_rgba(230,148,0,0.55)] transition hover:bg-primary hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500 sm:bottom-8 sm:right-8 lg:bottom-10"
        aria-label="Ir ao formulário de cotação">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </a>

    @include('partials.site-footer', ['cadastroHref' => url('/indica/cadastro') . '#cadastro-indicado'])
@endsection

@push('scripts')
    <script>
        window.campaignId = 'YQWD';
    </script>
    <script src="https://static.buzzlead.com.br/form-widget.js"></script>
    <script src="https://static.buzzlead.com.br/tracker.js"></script>
@endpush
