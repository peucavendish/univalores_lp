@extends('layouts.site')

@section('title', 'Cadastro de indicado — Univalores')
@section('meta_description', 'Cadastro de indicado do programa Univalores Indica.')

@section('content')
    @include('partials.site-header', ['headerNav' => 'indica'])

    <main id="main-indicado" class="flex w-full grow flex-col">
        <section class="bg-secondary-500 py-16 text-white lg:py-24">
            <div class="ui-container w-full space-y-4 text-center">
                <h1 class="text-4xl font-normal -tracking-wide lg:text-5xl">Cadastro de indicado</h1>
                <p class="mx-auto max-w-2xl text-lg text-white/90">
                    Preencha o formulario para que o time da Univalores possa entrar em contato com voce.
                </p>
            </div>
        </section>

        <section id="cadastro-indicado" class="py-12 lg:py-20">
            <div class="ui-container w-full">
                <div class="mx-auto max-w-4xl">
                    <div id="buzzlead-form"></div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.site-footer', ['cadastroHref' => url('/indica/cadastro') . '#cadastro-indicado'])
@endsection

@push('scripts')
    <script>
        window.campaignId = 'YQWD';
    </script>
    <script src="https://static.buzzlead.com.br/form-widget.js"></script>
    <script src="https://static.buzzlead.com.br/tracker.js"></script>
@endpush
