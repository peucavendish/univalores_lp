@php
    $home = url('/');
    $cadastroHref = $cadastroHref ?? $home . '#cadastro';
@endphp
<footer class="border-t border-secondary-500/20">
    <section class="bg-secondary-500 py-12 text-white lg:py-20">
        <div class="ui-container flex w-full max-lg:flex-col max-lg:gap-8 lg:gap-8">
            <div class="w-40 flex-none text-white lg:w-96">
                @include('partials.logo-univalores')
            </div>
            <div
                class="grid grow grid-cols-1 *:py-7 max-lg:divide-y max-lg:divide-neutral-500/70 lg:grid-cols-4 lg:gap-8 lg:*:py-0">
                <nav class="space-y-6">
                    <a class="flex items-center gap-5" href="https://www.instagram.com/univalores_oficial" target="_blank"
                        rel="noopener noreferrer">
                        <svg class="h-7 w-7 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z" />
                            <path fill="currentColor"
                                d="M17.687 7.625a1.312 1.312 0 1 1 0-2.625 1.312 1.312 0 0 1 0 2.625ZM12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z" />
                        </svg>
                        <span class="font-light">Instagram</span>
                    </a>
                    <a class="flex items-center gap-5" href="https://www.linkedin.com/company/univalores-oficial" target="_blank"
                        rel="noopener noreferrer">
                        <svg class="h-7 w-7 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                            <path fill="currentColor"
                                d="M19.82.5H2.294C1.337.5.5 1.19.5 2.135v17.566c0 .951.837 1.799 1.794 1.799h17.521c.963 0 1.685-.854 1.685-1.8V2.136C21.506 1.19 20.778.5 19.82.5ZM7.01 18.005H4V8.65H7.01v9.354ZM5.61 7.228h-.022c-.963 0-1.586-.716-1.586-1.613C4.002 4.7 4.642 4 5.626 4c.984 0 1.587.695 1.608 1.614 0 .897-.624 1.613-1.625 1.613Zm12.395 10.777h-3.009V12.89c0-1.225-.438-2.063-1.526-2.063-.832 0-1.324.563-1.543 1.111-.082.197-.104.465-.104.739v5.328H8.815V8.65h3.008v1.301c.438-.623 1.122-1.52 2.713-1.52 1.975 0 3.469 1.301 3.469 4.108v5.465Z" />
                        </svg>
                        <span class="font-light">Linkedin</span>
                    </a>
                    <a class="flex items-center gap-5" href="https://www.facebook.com/profile.php?id=61575751253741" target="_blank"
                        rel="noopener noreferrer">
                        <svg class="h-7 w-7 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M21.5 11.063c0-5.798-4.702-10.5-10.5-10.5S.5 5.265.5 11.063c0 5.241 3.84 9.585 8.86 10.373V14.1H6.692v-3.037h2.666V8.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036h-2.446v7.337c5.02-.788 8.859-5.132 8.859-10.374Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-light">Facebook</span>
                    </a>
                </nav>
                <nav class="grid grid-cols-5 gap-8 lg:grid-cols-1 lg:px-12">
                    <a href="{{ $home }}"
                        class="col-span-2 flex items-center gap-5 border-b border-white/30 lg:col-span-1"><span>Home</span></a>
                    <a href="{{ url('/indica') }}" class="col-span-2 flex items-center gap-5 border-b border-white/30 lg:col-span-1"><span>Univalores Indica</span></a>
                    <a href="{{ $home }}#sobre" class="col-span-2 flex items-center gap-5 border-b border-white/30 lg:col-span-1"><span>Sobre</span></a>
                    <a href="{{ $home }}#equipe" class="col-span-2 flex items-center gap-5 border-b border-white/30 lg:col-span-1"><span>Equipe</span></a>
                    <a href="{{ $home }}#blog" class="col-span-2 flex items-center gap-5 border-b border-white/30 lg:col-span-1"><span>Blog</span></a>
                    <a href="{{ $home }}#cadastro" class="col-span-2 flex items-center gap-5 border-b border-white/30 lg:col-span-1"><span>Contato</span></a>
                </nav>
                <div class="space-y-8">
                    <div>
                        <h4 class="mb-4 text-2xl">Endereço:</h4>
                        <p class="text-sm">
                            Rua Henrique Monteiro, nº 22, 10º andar, Pinheiros, São Paulo/SP.
                        </p>
                    </div>
                    <div>
                        <h4 class="mb-4 text-2xl font-light">Horário de atendimento:</h4>
                        <p class="text-sm">
                            Segunda a sexta-feira, das 08h às 18h.
                        </p>
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="text-xl">Contato:</h4>
                    <p class="text-sm">Quer saber mais sobre a Univalores? Fale conosco</p>
                    <a class="ui-button group/button inline-flex items-center justify-center gap-1 rounded-3xl bg-primary px-5 py-1.5 text-sm text-white duration-500 hover:bg-primary"
                        href="{{ $cadastroHref }}">
                        <svg class="h-6 w-6 duration-500 group-hover/button:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                        <span>Entrar em contato</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</footer>
