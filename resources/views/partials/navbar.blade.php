<header id="navbar" class="fixed left-0 right-0 top-0 z-50 border-b border-transparent transition-all duration-500">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 md:py-5">

        {{-- Logo --}}
        <a href="#home" class="group flex items-center gap-2">

            <span
                class="relative flex h-8 w-8 items-center justify-center rounded-lg bg-grad-primary text-sm font-bold text-white">

                JG

            </span>

            <span class="hidden text-sm font-medium tracking-tight text-foreground/90 md:inline">

                {{ config('portfolio.personal.name') }}

            </span>

        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden items-center gap-1 md:flex">

            @foreach(config('portfolio.navigation') as $link)

                <a href="{{ $link['href'] }}"
                    class="rounded-full px-4 py-2 text-sm text-muted-foreground transition-colors hover:text-foreground">

                    {{ $link['label'] }}

                </a>

            @endforeach

        </nav>

        {{-- Desktop Right --}}
        <div class="hidden items-center gap-2 md:flex">

            <button data-theme-toggle
                class="relative inline-flex h-9 w-9 items-center justify-center rounded-full border border-border bg-white/[0.03] text-foreground transition hover:bg-white/[0.06] hover:border-border-strong">
            </button>

            <a href="#contact" data-magnetic
                class="rounded-full border border-border bg-white/[0.03] px-4 py-2 text-sm font-medium text-foreground transition hover:border-border-strong hover:bg-white/[0.06]">

                Let's Talk

            </a>

        </div>

        {{-- Mobile Menu Button --}}
        <button id="menu-button" class="rounded-md p-2 text-foreground md:hidden">

            <i class="ph ph-list text-xl"></i>

        </button>

    </div>

</header>

<div id="mobile-menu" class="fixed inset-0 z-[60] hidden bg-background md:hidden">

    <div class="flex items-center justify-between border-b border-border px-6 py-4">

        <span class="text-sm font-medium">
            Menu
        </span>

        <button id="close-menu" class="p-2">

            <i class="ph ph-x text-xl"></i>

        </button>

    </div>

    <nav class="flex h-full flex-col items-start justify-center gap-3 px-8">

        @foreach(config('portfolio.navigation') as $link)

            <a href="{{ $link['href'] }}" class="mobile-link text-4xl font-semibold tracking-tight text-foreground">

                {{ $link['label'] }}

            </a>

        @endforeach

    </nav>

</div>