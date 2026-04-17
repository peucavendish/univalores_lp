@extends('layouts.site')

@php
    $u = 'https://univalores.com.br';
    $partners = [
        ['src' => 'avenue.webp', 'alt' => 'Avenue'],
        ['src' => 'azos.webp', 'alt' => 'Azos'],
        ['src' => 'brasilprev.webp', 'alt' => 'Brasilprev'],
        ['src' => 'btg-pactual.webp', 'alt' => 'BTG Pactual'],
        ['src' => 'centauro.webp', 'alt' => 'Centauro'],
        ['src' => 'c6.webp', 'alt' => 'C6 Bank'],
        ['src' => 'metlife.webp', 'alt' => 'MetLife'],
        ['src' => 'omint.webp', 'alt' => 'Omint'],
        ['src' => 'porto.webp', 'alt' => 'Porto'],
        ['src' => 'prudential.webp', 'alt' => 'Prudential'],
        ['src' => 'zurich.webp', 'alt' => 'Zurich'],
        ['src' => 'icatu.webp', 'alt' => 'Icatu'],
        ['src' => 'itau.webp', 'alt' => 'Itaú'],
        ['src' => 'ihb.webp', 'alt' => 'IHB Brazil'],
        ['src' => 'mag.webp', 'alt' => 'Mag'],
        ['src' => 'xp.webp', 'alt' => 'XP'],
    ];
    $testimonials = [
        [
            'text' => 'Já conto com o apoio da Univalores há praticamente 5 anos, e isso ajudou muito a alavancar os negócios da nossa empresa. Com um atendimento sempre rápido, eficaz, cordial e com muito conhecimento técnico, a Univalores nos ajuda desde o início com os clientes até o fechamento.',
            'name' => 'Marcus Tremonti',
            'co' => 'MVT Seguros - Corretora de Seguros e Previdência Ltda',
        ],
        [
            'text' => 'A Univalores agrega um grande valor ao meu trabalho de consultor, criando uma comunidade forte para troca de experiências e dando acesso às melhores soluções de mercado!',
            'name' => 'Joe Ruas',
            'co' => 'JR Treinamento em Finanças',
        ],
        [
            'text' => 'Com a recente parceria com a Univalores, já ficou claro que conseguirei atender de forma mais ampla e com mais opções de crédito, seguros e investimentos, contando sempre com profissionais atenciosos e gabaritados.',
            'name' => 'Marcos Roberto',
            'co' => 'Rio Plan Corretora de Seguros Ltda',
        ],
        [
            'text' => 'Ser parceira da Univalores é um privilégio que vai muito além do suporte recebido. O relacionamento no dia a dia é leve, construtivo e repleto de oportunidades que ampliam meu conhecimento e minha rede de conexões. Essa parceria me permite oferecer ainda mais valor aos meus clientes, com um portfólio mais completo de soluções.',
            'name' => 'Flávia Bastos',
            'co' => 'FMDV Soluções e Intermediações Ltda',
        ],
        [
            'text' => 'A parceria entre a Aprouve e a Univalores é pautada por confiança, colaboração e valores em comum. A equipe da Univalores está sempre próxima, compreendendo nossas necessidades e entregando soluções que impactam positivamente nosso dia a dia.',
            'name' => 'Michael Alves',
            'co' => 'Aprouve Consultoria em Seguros',
        ],
        [
            'text' => 'Retornei ao mercado de corretagem em julho de 2024 e encontrei no ambiente da Univalores toda a estrutura e o direcionamento necessários para construir meu negócio com solidez. Desde os treinamentos de alto nível, passando pelo acesso a fornecedores estratégicos até a visão de negócio que amplia horizontes, tudo tem feito a diferença.',
            'name' => 'Johnny Assis',
            'co' => 'Johnny F. Assis Corretagem de Seguros Ltda',
        ],
        [
            'text' => 'A Univalores é uma estrutura completa de soluções para o planejador financeiro. A atenção e a competência de toda a equipe são os diferenciais da parceria que faço questão de manter para o meu modelo de negócio.',
            'name' => 'Cynthia Guimarães',
            'co' => 'Cynthia Guimarães Planejamento Financeiro Ltda',
        ],
    ];
    $team = [
        ['img' => '01K5A1A7FFGJSCJ129DZKFAMGY.webp', 'name' => 'Pedro  Pisani', 'role' => 'Crédito'],
        ['img' => '01K34JZYVD48YZARWP4YNENRX7.png', 'name' => 'Derlyan Carriel', 'role' => 'Comercial'],
        ['img' => '01K34KAA184DNGJZXDJEH0HDR0.png', 'name' => 'Paula Julien', 'role' => 'Consórcio'],
        ['img' => '01K34KFMPDV7543QR558EC53DD.png', 'name' => 'Tânia Pinheiro', 'role' => 'Coordenadora Crédito'],
        ['img' => '01K34KRWG96AGJBZWET18CGEKH.png', 'name' => 'Carla Ferreira', 'role' => 'Financiamento e Home Equity'],
        ['img' => '01K34KHGQ50YM173HB4ZG8FXXA.png', 'name' => 'Lorena Morão', 'role' => 'Coordenadora Treinamento'],
        ['img' => '01K34K1HY6RAZ2583571JCBCR6.png', 'name' => 'Rafael Carranca', 'role' => 'Comercial'],
        ['img' => '01K34KTA6QX011CPCM1RB635H3.png', 'name' => 'Leandro Marchioretto', 'role' => 'Câmbio'],
        ['img' => '01K34KNZHKQWATDSGD80H7J1H1.png', 'name' => 'Marta Rocha', 'role' => 'Cadastro'],
        ['img' => '01K34JZ3HPRW1BC1ZXZETYNW98.png', 'name' => 'Marcos André', 'role' => 'Comercial'],
        ['img' => '01K34K3B82DG85R72JA24E95NZ.png', 'name' => 'Emerson Soares', 'role' => 'Diretor Executivo'],
        ['img' => '01K34KVQ546HAF30TKZTA2K4M6.png', 'name' => 'Giovanni D’Angelo', 'role' => 'Wealth Management'],
        ['img' => '01K34KK48KTH6G0PYZ3CKZA5D0.png', 'name' => 'Eliane Pinheiro', 'role' => 'Coordenadora Operacional'],
        ['img' => '01K34KX5RPN944TDPHVF3KPDP2.png', 'name' => 'Lucas Zanetti', 'role' => 'Corporate'],
        ['img' => '01K59RKA6YZ03B3EY50MKGMKE1.png', 'name' => 'Gabriel Batista', 'role' => 'Vida'],
        ['img' => '01K34K45ZFYWHDX8FMWDEQXRW1.png', 'name' => 'Rogério Araújo', 'role' => 'Expansão e Mentoria'],
        ['img' => '01K34K67VBXJXDAZ0EFRKJJHFY.png', 'name' => 'Carlos Caporal', 'role' => 'Expansão e Mentoria'],
        ['img' => '01K34KBTSA6ZHASEJR42DC3P4P.png', 'name' => 'Pedro Felicio', 'role' => 'Crédito'],
        ['img' => '01K59SX8T5NX4TA5ENG109X8H6.png', 'name' => 'Carlos Okada', 'role' => 'Vida e Treinamento'],
        ['img' => '01K34KMMJWQ3KHBTHQDJ5V6SQF.png', 'name' => 'Rafael Santos', 'role' => 'Gestão de Carteira'],
        ['img' => '01K59RB4134A9WGHGGS5XRK05H.webp', 'name' => 'Alexandro Melo', 'role' => 'Corporate'],
        ['img' => '01K34KE7YHPQFHRF0MAJ5E73MN.png', 'name' => 'Yasmim Ogihara', 'role' => 'Financiamento e HE'],
        ['img' => '01K34K80PMMYJDM5Y5QMKKSKNP.png', 'name' => 'Marcelo Cantiere', 'role' => 'Expansão e Mentoria'],
    ];
    $states = [
        'AC' => 'Acre',
        'AL' => 'Alagoas',
        'AP' => 'Amapá',
        'AM' => 'Amazonas',
        'BA' => 'Bahia',
        'CE' => 'Ceará',
        'DF' => 'Distrito Federal',
        'ES' => 'Espirito Santo',
        'GO' => 'Goiás',
        'MA' => 'Maranhão',
        'MS' => 'Mato Grosso do Sul',
        'MT' => 'Mato Grosso',
        'MG' => 'Minas Gerais',
        'PA' => 'Pará',
        'PB' => 'Paraíba',
        'PR' => 'Paraná',
        'PE' => 'Pernambuco',
        'PI' => 'Piauí',
        'RJ' => 'Rio de Janeiro',
        'RN' => 'Rio Grande do Norte',
        'RS' => 'Rio Grande do Sul',
        'RO' => 'Rondônia',
        'RR' => 'Roraima',
        'SC' => 'Santa Catarina',
        'SP' => 'São Paulo',
        'SE' => 'Sergipe',
        'TO' => 'Tocantins',
    ];
@endphp

@section('content')
    @include('partials.site-header')

    <main id="main" class="flex w-full grow flex-col">
        {{-- Hero --}}
        <div id="hero-carousel" data-header-scheme="dark" class="relative min-h-screen bg-secondary-500 text-white">
            <div class="absolute inset-0 overflow-hidden">
                <div data-hero-slide class="hero-slide hero-slide--active absolute inset-0 bg-cover bg-center bg-fixed">
                    <div class="absolute inset-0 bg-cover bg-center lg:hidden"
                        style="background-image: linear-gradient(to bottom, rgba(24,24,36,0.55), rgba(24,24,36,0.78)), url('{{ $u }}/storage/midias/banners/banner-barco-mobile.webp')"></div>
                    <div class="absolute inset-0 hidden bg-cover bg-center lg:block"
                        style="background-image: linear-gradient(to bottom, rgba(24,24,36,0.55), rgba(24,24,36,0.78)), url('{{ $u }}/storage/midias/banners/banner-barco.webp')"></div>
                </div>
                <div data-hero-slide class="hero-slide absolute inset-0 bg-cover bg-center bg-fixed">
                    <div class="absolute inset-0 bg-cover bg-center lg:hidden"
                        style="background-image: linear-gradient(to bottom, rgba(24,24,36,0.55), rgba(24,24,36,0.78)), url('{{ $u }}/storage/midias/banners/01K3446TNV2W54JVRFCGJ3Y2JZ.png')"></div>
                    <div class="absolute inset-0 hidden bg-cover bg-center lg:block"
                        style="background-image: linear-gradient(to bottom, rgba(24,24,36,0.55), rgba(24,24,36,0.78)), url('{{ $u }}/storage/midias/banners/01K3446TNP0C52JBEBAC6JV6GF.png')"></div>
                </div>
            </div>

            <div class="relative z-[1] flex min-h-screen flex-col justify-end pb-12 pt-32 lg:justify-center lg:pb-20 lg:pt-40">
                <div class="ui-container w-full">
                    <div data-hero-copy class="space-y-6 max-lg:text-center">
                        <h2 class="text-[3.5rem] max-lg:text-[2.75rem] font-normal leading-none -tracking-wide text-balance">Mais comissão, menos burocracia.</h2>
                        <div class="max-w-xl text-2xl max-lg:mx-auto max-lg:text-xl">
                            <p>Conheça a assessoria mais completa do mercado, feita para profissionais que querem chegar cada vez mais longe.</p>
                        </div>
                        <x-univalores.cta href="#cadastro" />
                    </div>
                    <div data-hero-copy class="hidden space-y-6 max-lg:text-center">
                        <h2 class="text-[3.5rem] max-lg:text-[2.75rem] font-normal leading-none -tracking-wide text-balance">Uma assessoria, diversas soluções.</h2>
                        <div class="max-w-xl text-2xl max-lg:mx-auto max-lg:text-xl">
                            <p>Conheça o hub de soluções 360° desenvolvido especialmente para potencializar o seu desempenho.</p>
                        </div>
                        <x-univalores.cta href="#cadastro" />
                    </div>
                    <div class="mt-10 flex justify-center gap-2 lg:justify-start">
                        <button type="button" data-hero-dot class="h-2.5 w-2.5 rounded-full bg-white transition-all" aria-label="Slide 1"></button>
                        <button type="button" data-hero-dot class="h-2.5 w-2.5 rounded-full bg-white/40 transition-all" aria-label="Slide 2"></button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hub 360 --}}
        <section data-header-scheme="light" class="py-12 lg:py-20">
            <div class="ui-container w-full space-y-5">
                <h2 class="text-4xl leading-tight font-normal -tracking-wide lg:flex lg:flex-col">
                    <span>Oferecemos o que você precisa para ir mais longe,</span>
                    <span>com estrutura e performance, sem burocracia.</span>
                </h2>
                <p class="text-lg">Com a Univalores, você cresce com segurança e consistência, contando com um Hub de soluções 360°.</p>
                <div class="grid gap-8 lg:grid-cols-5">
                    @foreach ([
                        ['t' => 'Universo Univalores', 'd' => 'Um sistema para você acompanhar suas vendas, comissões e muito mais.'],
                        ['t' => 'Cubix', 'd' => 'Um diagnóstico de necessidades inteligente na hora da abordagem.'],
                        ['t' => 'Especialização', 'd' => 'Atendimento técnico, profissionais capacitados, consultivos e direto ao ponto.'],
                        ['t' => 'Eficiência', 'd' => 'Suporte que funciona de verdade. Você pede, a gente entrega.'],
                        ['t' => 'Treinamentos', 'd' => 'Capacitação constante e campanhas que valorizam seu desempenho.'],
                    ] as $card)
                        <div
                            class="group space-y-4 rounded-2xl bg-base-200 p-5 shadow transition-colors duration-500 hover:bg-primary-500 hover:text-white">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-primary-500 text-primary-500 group-hover:border-white group-hover:text-white">
                                <span class="text-lg leading-none">◆</span>
                            </div>
                            <h3 class="text-xl font-normal">{{ $card['t'] }}</h3>
                            <p class="text-sm">{{ $card['d'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Para quem --}}
        <section data-header-scheme="light" class="py-12 lg:py-20" id="sobre">
            <div class="ui-container w-full">
                <div class="relative grid grid-cols-1 items-start gap-8 lg:grid-cols-7">
                    <header class="space-y-6 lg:sticky lg:top-24 lg:col-span-5">
                        <h2 class="text-4xl font-normal -tracking-wide">Para quem é a Univalores?</h2>
                        <div class="space-y-4 text-lg">
                            <p>A Univalores é para quem atua ou quer atuar de forma estratégica nos mercados financeiros, de consórcios e de seguros.</p>
                            <p>Se você busca autonomia, suporte de verdade e acesso a soluções completas para seus clientes, este ecossistema é para você.</p>
                        </div>
                        <x-univalores.cta href="#cadastro" variant="outline" />
                    </header>
                    <div class="space-y-6 lg:col-span-2">
                        @foreach ([
                            'Corretores de seguros que querem ampliar sua oferta e elevar seus resultados.',
                            'Consultores e planejadores financeiros em busca de estrutura, inteligência e liberdade comercial.',
                            'Profissionais em transição de carreira, como ex-bancários e ex-agentes autônomos, que querem empreender com solidez e apoio técnico.',
                            'Empreendedores com rede de relacionamento ativo, que desejam gerar negócios com previsibilidade e escala.',
                        ] as $txt)
                            <div class="flex h-48 items-center gap-4 rounded-2xl bg-base-200 p-4 shadow">
                                <span class="flex h-7 w-7 shrink-0 rounded-full bg-primary-500/20 ring-2 ring-primary-500"></span>
                                <p class="text-lg font-normal">{{ $txt }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Números --}}
        <section data-header-scheme="light" class="bg-base-200 py-12 lg:py-20">
            <div class="ui-container w-full">
                <div class="relative grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <header class="space-y-4 lg:sticky lg:top-24">
                        <h2 class="text-4xl font-normal -tracking-wide">A Univalores</h2>
                        <p class="text-lg">Conheça alguns dos números que contam um pouco mais da nossa história.</p>
                        <x-univalores.cta href="#cadastro" variant="outline" />
                    </header>
                    <div class="space-y-5">
                        @foreach ([
                            ['t' => '+ de 15 anos', 'p' => 'de experiência no mercado'],
                            ['t' => '+ de 100 milhões', 'p' => 'de reais em prêmios de seguro de vida'],
                            ['t' => '+ de 1 bilhão', 'p' => 'de reais em crédito comercializado'],
                            ['t' => '+ de 450', 'p' => 'consultores e assessores ativos'],
                        ] as $stat)
                            <div class="rounded-lg border p-4 text-lg font-light">
                                <h3 class="text-xl font-semibold">{{ $stat['t'] }}</h3>
                                <p>{{ $stat['p'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Parceiros --}}
        <div data-header-scheme="light" class="ui-container w-full py-6">
            <div class="grid w-full grid-cols-1 items-center gap-4 lg:grid-cols-4">
                <p class="text-lg font-light">
                    Aliada a nomes de peso do mercado, a Univalores entrega confiança, suporte técnico e acesso às melhores soluções para quem quer empreender com solidez.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-6 lg:col-span-3 lg:justify-between">
                    @foreach ($partners as $p)
                        <img src="{{ $u }}/storage/midias/parceiros/{{ $p['src'] }}" alt="{{ $p['alt'] }}" loading="lazy" width="138"
                            height="90" class="h-10 w-auto max-w-[120px] object-contain grayscale transition-all hover:grayscale-0" />
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Grupo Alta Vista --}}
        <section data-header-scheme="dark" class="max-lg:min-h-[50rem] bg-secondary-500 py-12 text-white lg:py-20">
            <div class="ui-container grid h-full w-full items-center gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="max-lg:text-center space-y-8">
                    <h3 class="text-3xl font-normal">Parte de um grupo sólido, com visão de longo prazo.</h3>
                    <div class="space-y-5 text-lg font-light">
                        <p>A Univalores integra o Grupo Alta Vista — uma holding com mais de 15 anos de atuação nos mercados de seguros, crédito, câmbio, investimentos, previdência e proteção patrimonial.</p>
                        <p>Atualmente, o grupo reúne mais de 300 profissionais ativos em todo o país, com estrutura robusta, governança estratégica e presença nacional.</p>
                        <p>Ser parte do Grupo Alta Vista significa contar com mais que suporte técnico: é ter ao seu lado um parceiro com capital intelectual, solidez institucional e compromisso com o seu crescimento sustentável.</p>
                    </div>
                    <a href="#cadastro"
                        class="ui-button inline-flex items-center justify-center gap-1 rounded-3xl border-2 border-transparent bg-primary px-5 py-1.5 text-white duration-500 hover:bg-primary">
                        <x-univalores.chevron class="h-6 w-6" />
                        <span>Quero fazer parte</span>
                    </a>
                </div>
                <div class="relative flex items-center justify-center py-12">
                    <img class="w-full max-w-64" src="{{ $u }}/static/img/alta-vista.svg" width="617" height="229" alt="Grupo Alta Vista">
                    <div class="ui-altavista-balloon left-6 top-6 max-lg:left-2">+ de 10 filias pelo Brasil</div>
                    <div class="ui-altavista-balloon right-0 top-20 max-lg:right-2">+ de 300 profissionais</div>
                    <div class="ui-altavista-balloon left-8 top-[82%] max-lg:left-2">Top 10 Assessorias Financeiras</div>
                    <div class="ui-altavista-balloon right-8 top-0 max-lg:right-2">+ de 16 bilhões sob assessoria</div>
                </div>
            </div>
        </section>

        {{-- Depoimentos --}}
        <section data-header-scheme="light" class="bg-base-200 py-12 lg:py-20">
            <div class="ui-container w-full">
                <header class="space-y-4 text-center">
                    <h2 class="text-4xl font-normal -tracking-wide">Você não precisa confiar na gente...</h2>
                    <p class="text-xl font-light">Confie em quem é parceiro Univalores e transformou a atuação profissional com a gente!</p>
                    <x-univalores.cta class="mx-auto" href="#cadastro" variant="outline" />
                </header>
            </div>
            <div class="mt-12 w-full overflow-x-auto px-7 pb-4 lg:px-0">
                <div class="mx-auto flex max-w-7xl gap-6">
                    @foreach ($testimonials as $tm)
                        <div class="flex w-[min(100vw-3rem,380px)] shrink-0 flex-col rounded-lg bg-white p-5 shadow lg:h-44">
                            <p class="mb-3 line-clamp-6 grow text-xs lg:text-sm">{{ $tm['text'] }}</p>
                            <div class="flex flex-col gap-1 text-sm lg:flex-row lg:items-center lg:gap-3">
                                <span class="hidden h-5 w-5 shrink-0 rounded-full bg-primary lg:block"></span>
                                <span class="font-bold">{{ $tm['name'] }}</span>
                                <span class="font-light">{{ $tm['co'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Impulsiona + vídeo --}}
        <section data-header-scheme="dark" class="relative bg-black py-12 text-white lg:py-20">
            <div class="ui-container grid w-full grid-cols-1 items-center gap-8 lg:grid-cols-2">
                <div class="relative z-[1] space-y-6">
                    <h2 class="text-4xl font-normal -tracking-wide">Somos uma assessoria que te impulsiona</h2>
                    <ul class="space-y-2">
                        @foreach ([
                            'Top 10 assessorias do Brasil em 2024',
                            'Programas de premiação para assessorados',
                            'Campeões do Galo de Ouro (MAG)',
                            'Premiados no GeT (MetLife)',
                            'Destaque no Top Prudential',
                            'Reconhecimento como Elite em Administradoras de Consórcios',
                        ] as $line)
                            <li class="flex items-start gap-3 py-2 font-light">
                                <svg class="mt-0.5 h-8 w-8 shrink-0 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                                <span class="text-lg">{{ $line }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <x-univalores.cta href="#cadastro" />
                </div>
                <video src="{{ $u }}/static/videos/cubix.mp4" muted loop playsinline autoplay class="relative z-0 max-h-[420px] w-full object-contain lg:absolute lg:right-0 lg:top-0 lg:h-full lg:max-h-none lg:w-1/2"></video>
            </div>
        </section>

        {{-- Univalores Day --}}
        <section data-header-scheme="light" class="py-12 lg:py-20">
            <div class="ui-container grid w-full grid-cols-1 items-center gap-8 lg:grid-cols-5 lg:gap-24">
                <div class="space-y-6 lg:col-span-2">
                    <h2 class="text-4xl font-normal -tracking-wide">Reconhecemos quem entrega e faz a diferença!</h2>
                    <p class="text-2xl font-light">O Univalores Day é a nossa convenção anual pensada para reconhecer e premiar os destaques do ano.</p>
                    <x-univalores.cta href="#cadastro" variant="outline" />
                </div>
                <div class="grid gap-6 sm:grid-cols-2 lg:col-span-3">
                    @foreach ([['y' => '2021', 'ext' => 'png'], ['y' => '2022', 'ext' => 'png'], ['y' => '2023', 'ext' => 'webp'], ['y' => '2024', 'ext' => 'webp']] as $g)
                        <div class="space-y-3 rounded-xl bg-secondary-500/5 p-5 text-left shadow">
                            <img src="{{ $u }}/storage/midias/galerias/{{ $g['y'] }}.{{ $g['ext'] }}" class="h-72 w-full rounded-xl object-cover object-center" alt="Univalores Day {{ $g['y'] }}" loading="lazy" />
                            <div class="text-xl font-light">Univalores Day</div>
                            <div class="text-sm font-bold">{{ $g['y'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Equipe --}}
        <section data-header-scheme="light" class="py-12 lg:py-20" id="equipe">
            <div class="ui-container grid w-full grid-cols-1 items-center gap-8 lg:grid-cols-5 lg:gap-24">
                <div class="space-y-5 lg:order-last lg:col-span-2">
                    <h2 class="text-4xl font-normal -tracking-wide">Nosso time de especialistas</h2>
                    <p class="text-2xl font-light">Mais de 50 colaboradores, de diversas áreas, para que você deixe toda a burocracia com a gente!</p>
                    <x-univalores.cta href="#cadastro" variant="outline" />
                </div>
                <div class="grid gap-6 sm:grid-cols-2 lg:col-span-3">
                    @foreach ($team as $m)
                        <div class="overflow-hidden rounded-xl shadow">
                            <img class="h-72 w-full object-cover object-center" src="{{ $u }}/storage/midias/colaboradores/{{ $m['img'] }}" alt="{{ $m['name'] }}" loading="lazy" />
                            <div class="bg-secondary-500/5 px-6 py-4">
                                <div class="text-xl font-light">{{ $m['name'] }}</div>
                                <div class="text-sm font-bold">{{ $m['role'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section data-header-scheme="light" class="py-12 lg:py-20">
            <div class="ui-container grid w-full grid-cols-1 items-start gap-8 lg:grid-cols-5">
                <h2 class="text-4xl font-semibold -tracking-wide">Perguntas <wbr>Frequentes</h2>
                <div class="space-y-6 lg:col-span-4">
                    <details class="faq-panel cursor-pointer rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="flex items-center gap-3 text-2xl font-normal">O que é a Univalores?</summary>
                        <div class="mt-4 space-y-3 text-base leading-relaxed">
                            <p>A Univalores é um <strong>hub de soluções com assessoria 360°</strong>, voltado a <strong>corretores de seguros, planejadores financeiros, empreendedores com rede de relacionamento ativo e profissionais do mercado em transição de carreira</strong>.</p>
                            <p>Atuamos com independência, inteligência comercial e estrutura completa — oferecendo <strong>tecnologia proprietária, curadoria de produtos, suporte técnico e conteúdo estratégico</strong> para que cada parceiro desenvolva seu próprio modelo de negócio, com liberdade e protagonismo.</p>
                        </div>
                    </details>
                    <details class="faq-panel cursor-pointer rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="flex items-center gap-3 text-2xl font-normal">Quais soluções a Univalores oferece?</summary>
                        <div class="mt-4 space-y-3 text-base leading-relaxed">
                            <p>A Univalores atua com um portfólio completo de soluções para pessoas físicas e empresas, oferecendo apoio em diferentes momentos da vida financeira dos clientes.</p>
                            <p>Nossas frentes incluem: <strong>seguros de vida, planejamento patrimonial, previdência, consórcios, investimentos nacionais e internacionais, imóveis no exterior, home equity, financiamento imobiliário, câmbio e soluções Corporate (focadas em planejamento e proteção para empresas).</strong></p>
                            <p>Tudo isso com acesso às principais seguradoras, instituições financeiras e plataformas de investimento do mercado — sempre com curadoria, independência e suporte especializado para cada parceiro.</p>
                        </div>
                    </details>
                    <details class="faq-panel cursor-pointer rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="flex items-center gap-3 text-2xl font-normal">Como posso me tornar um parceiro da Univalores?</summary>
                        <div class="mt-4 space-y-3 text-base leading-relaxed">
                            <p>O primeiro passo é preencher o formulário de contato. A partir disso, nossa equipe entra em contato para entender seu perfil, apresentar nosso modelo de atuação e orientar sobre o processo de credenciamento.</p>
                            <p>A parceria com a Univalores é totalmente gratuita, e todo o onboarding é acompanhado por especialistas — com suporte técnico, orientação comercial e acesso às ferramentas que você precisa para começar a atuar com segurança e consistência.</p>
                        </div>
                    </details>
                    <details class="faq-panel cursor-pointer rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="flex items-center gap-3 text-2xl font-normal">Preciso ser corretor com SUSEP para atuar com a Univalores?</summary>
                        <div class="mt-4 space-y-3 text-base leading-relaxed">
                            <p>Você não precisa ter registro na SUSEP para iniciar sua atuação com a Univalores.</p>
                            <p>Trabalhamos com diferentes perfis de parceiros — desde corretores habilitados até profissionais que estão em transição de carreira. Para quem ainda não possui registro, oferecemos apoio e direcionamento para estruturar sua operação da forma adequada, com segurança e dentro das normas vigentes.</p>
                        </div>
                    </details>
                    <details class="faq-panel cursor-pointer rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="flex items-center gap-3 text-2xl font-normal">Qual a diferença da Univalores para outras assessorias ou plataformas?</summary>
                        <div class="mt-4 space-y-3 text-base leading-relaxed">
                            <p>A Univalores vai além da intermediação de produtos. Atuamos com <strong>estrutura tecnológica própria</strong>, <strong>curadoria estratégica</strong>, <strong>tecnologia de diagnóstico</strong>, <strong>gestão de carteira</strong>, <strong>treinamentos contínuos</strong> e <strong>suporte técnico consultivo</strong> — tudo com foco em resultado, consistência e liberdade para que cada parceiro desenvolva seu próprio modelo de atuação.</p>
                            <p>Nossa entrega é <strong>personalizada e orientada à performance do profissional</strong>, respeitando o momento de cada parceiro e o que ele busca construir.</p>
                            <p><strong>Esse modelo está reunido no Universo Univalores</strong> — um ecossistema completo de ferramentas e estratégias para quem deseja crescer com inteligência no mercado financeiro e de seguros.</p>
                        </div>
                    </details>
                    <details class="faq-panel cursor-pointer rounded-lg border border-transparent bg-secondary-500/5 px-6 py-4 shadow open:border-primary-500">
                        <summary class="flex items-center gap-3 text-2xl font-normal">Qual estrutura tecnológica a Univalores oferece?</summary>
                        <div class="mt-4 space-y-3 text-base leading-relaxed">
                            <p>O <strong>Universo Univalores</strong> integra diversas funcionalidades desenvolvidas com inteligência artificial para apoiar os parceiros em toda a jornada de atuação.</p>
                            <ul class="list-disc space-y-2 pl-6">
                                <li><strong>Diagnóstico de perfil e identificação de oportunidades para o cliente</strong>, por meio do Cubix;</li>
                                <li><strong>Consolidação automática da produção e das comissões</strong>, mesmo com múltiplos fornecedores;</li>
                                <li><strong>Geração de conteúdos de marketing personalizados</strong>, de acordo com o perfil do parceiro e do cliente;</li>
                                <li><strong>Acesso a trilhas de capacitação e conteúdos exclusivos</strong> diretamente na plataforma;</li>
                                <li><strong>Suporte completo em planejamento financeiro e gestão comercial.</strong></li>
                            </ul>
                            <p>Tudo isso reunido em um ecossistema próprio, pensado para ampliar a produtividade, a visão estratégica e o posicionamento profissional de cada parceiro.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        {{-- Formulário --}}
        <section data-header-scheme="dark" class="bg-secondary-500 py-12 text-white lg:py-20" id="cadastro">
            <div class="ui-container w-full space-y-4">
                <header class="space-y-4 text-center">
                    <h2 class="text-4xl font-normal -tracking-wide">Você está pronto para crescer com previsão e segurança?</h2>
                    <p class="text-lg font-light">Aqui, seu crescimento é nosso compromisso</p>
                </header>
                <div class="mx-auto max-w-4xl">
                    <div id="form-sucesso" class="hidden flex items-center gap-4 rounded-2xl bg-secondary-400 p-6 shadow">
                        <svg class="h-16 w-16 shrink-0 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                        <span class="text-xl">Sua mensagem foi enviada com sucesso. Em breve, entraremos em contato!</span>
                    </div>
                    <form id="form-contato" class="grid gap-8 lg:grid-cols-2">
                        <label class="block text-sm font-medium">Nome:
                            <input name="nome" type="text" required class="mt-1 w-full rounded-lg bg-secondary-400 px-4 py-4 text-lg text-white outline-none ring-white/20 focus:ring-2" /></label>
                        <label class="block text-sm font-medium">E-mail:
                            <input name="email" type="email" required class="mt-1 w-full rounded-lg bg-secondary-400 px-4 py-4 text-lg text-white outline-none ring-white/20 focus:ring-2" /></label>
                        <label class="block text-sm font-medium">Telefone:
                            <input name="telefone" type="tel" class="mt-1 w-full rounded-lg bg-secondary-400 px-4 py-4 text-lg text-white outline-none ring-white/20 focus:ring-2" /></label>
                        <label class="block text-sm font-medium">CNPJ:
                            <input name="cnpj" type="text" class="mt-1 w-full rounded-lg bg-secondary-400 px-4 py-4 text-lg text-white outline-none ring-white/20 focus:ring-2" /></label>
                        <label class="block text-sm font-medium">Cidade:
                            <input name="cidade" type="text" class="mt-1 w-full rounded-lg bg-secondary-400 px-4 py-4 text-lg text-white outline-none ring-white/20 focus:ring-2" /></label>
                        <label class="block text-sm font-medium">Estado:
                            <select name="estado" class="mt-1 w-full rounded-lg bg-secondary-400 px-4 py-4 text-lg text-white outline-none ring-white/20 focus:ring-2 [&>option]:bg-secondary-400">
                                @foreach ($states as $code => $label)
                                    <option value="{{ $code }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </label>
                        <button type="submit"
                            class="ui-button col-span-full flex items-center justify-center gap-2 rounded-md border-2 border-transparent bg-primary px-6 py-4 text-lg text-white duration-500 hover:bg-primary lg:col-span-2">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section data-header-scheme="light" class="py-16 text-center text-sm text-base-900/70" id="blog">
            <p>Conteúdo do blog pode ser ligado aqui no futuro. <a href="https://univalores.com.br/blog" class="text-primary-500 underline" target="_blank" rel="noopener">Ver blog na Univalores</a></p>
        </section>
    </main>

    @include('partials.site-footer')
@endsection
