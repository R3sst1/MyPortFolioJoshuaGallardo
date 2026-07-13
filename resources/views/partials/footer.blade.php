<footer class="relative border-t border-border">

    <div class="reveal-line absolute -top-px left-0 right-0 h-px origin-left bg-grad-primary"></div>

    <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 py-14 md:flex-row md:items-end md:justify-between">

        <div>

            <h2 class="text-4xl font-semibold tracking-tight md:text-6xl">
                <span class="text-gradient">
                    {{ config('portfolio.personal.name') }}
                </span>
            </h2>

            <p class="mt-2 max-w-md text-sm text-muted-foreground">
                {{ config('portfolio.footer.description') }}
            </p>

        </div>

        <div class="flex flex-col items-start gap-6 md:items-end">

            <div class="flex gap-3">

                @foreach(config('portfolio.socials') as $social)

                    <a
                        href="{{ $social['url'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ $social['name'] }}"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-border text-muted-foreground transition hover:border-border-strong hover:text-foreground">

                        @switch($social['icon'])

                            @case('github')
                                <i class="ph ph-github-logo text-lg"></i>
                                @break

                            @case('linkedin')
                                <i class="ph ph-linkedin-logo text-lg"></i>
                                @break

                            @case('facebook')
                                <i class="ph ph-facebook-logo text-lg"></i>
                                @break

                        @endswitch

                    </a>

                @endforeach

            </div>

            <div class="text-xs text-muted-foreground">
                © {{ now()->year }}
                {{ config('portfolio.personal.name') }}.
                {{ config('portfolio.footer.copyright') }}
            </div>

        </div>

    </div>

</footer>