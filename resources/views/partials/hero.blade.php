<section id="home" class="relative min-h-screen w-full overflow-hidden pt-28 md:pt-36">

    {{-- Background --}}
    <div class="pointer-events-none absolute inset-0 -z-10">

        <div class="animate-blob absolute -left-40 -top-40 h-[520px] w-[520px] rounded-full opacity-40 blur-[120px]"
            style="background: radial-gradient(circle,#5b8cff 0%,transparent 65%);">
        </div>

        <div class="animate-blob absolute -bottom-40 -right-24 h-[560px] w-[560px] rounded-full opacity-30 blur-[140px]"
            style="background: radial-gradient(circle,#7c5cff 0%,transparent 65%); animation-delay:-8s;">
        </div>

        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(255,255,255,.04),transparent_50%)]">
        </div>

        <div class="absolute inset-0 opacity-[0.035]" style="
                background-image:
                linear-gradient(rgba(255,255,255,.6) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.6) 1px, transparent 1px);
                background-size:48px 48px;
                mask-image: radial-gradient(ellipse at center, black 40%, transparent 75%);
            ">
        </div>

    </div>

    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 pb-24 md:pb-40 lg:grid-cols-12 lg:gap-8">

        {{-- LEFT --}}
        <div class="lg:col-span-7">

            <div
                class="hero-available inline-flex items-center gap-2 rounded-full border border-border bg-white/[0.03] px-3 py-1.5 text-xs text-muted-foreground">

                <span class="relative flex h-1.5 w-1.5">

                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>

                    <span class="relative inline-flex h-1.5 w-1.5 rounded-full bg-emerald-400"></span>

                </span>

                {{ config('portfolio.hero.availability') }}

            </div>

            <h1
                class="hero-title mt-6 text-[clamp(2.75rem,8vw,6.5rem)] font-semibold leading-[0.95] tracking-[-0.04em]">

                {{ config('portfolio.hero.first_name') }}

                <br>

                <span class="text-gradient">
                    {{ config('portfolio.hero.last_name') }}.
                </span>

            </h1>

            <p class="hero-description mt-6 max-w-xl text-base leading-relaxed text-muted-foreground md:text-lg">

                {{ config('portfolio.hero.description') }}

            </p>

            {{-- Buttons --}}
            <div class="hero-buttons mt-10 flex flex-wrap items-center gap-3">

                <a href="{{ config('portfolio.hero.project_button') }}" data-magnetic class="group rounded-full">

                    <span
                        class="relative inline-flex items-center gap-2 rounded-full bg-grad-primary px-6 py-3 text-sm font-medium text-white glow-primary">

                        View Projects

                        <i class="ph ph-arrow-right font-bold transition-transform group-hover:translate-x-0.5"></i>

                    </span>

                </a>

                <a href="{{ asset(config('portfolio.hero.resume')) }}" target="_blank" data-magnetic
                    class="rounded-full">

                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-border bg-white/[0.03] px-6 py-3 text-sm font-medium text-foreground transition hover:border-border-strong hover:bg-white/[0.06]">

                        <i class="ph ph-download-simple"></i>

                        Download Resume

                    </span>

                </a>

            </div>

            {{-- Stats --}}
            <div class="hero-stats mt-14 grid max-w-lg grid-cols-3 gap-6 border-t border-border pt-6">

                @foreach(config('portfolio.hero.stats') as $stat)

                    <div>

                        <div class="text-2xl font-semibold tracking-tight">

                            {{ $stat['key'] }}

                        </div>

                        <div class="text-xs text-muted-foreground">

                            {{ $stat['value'] }}

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        {{-- RIGHT --}}
        <div class="relative lg:col-span-5">

            <div class="hero-orbit relative mx-auto aspect-square w-full max-w-md">

                {{-- Rings --}}
                @foreach([100, 78, 56, 34] as $index => $size)
                    <div class="gsap-ring absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full border border-border"
                        style="width:{{ $size }}%; height:{{ $size }}%;">

                        <div class="gsap-dot-wrapper absolute inset-0">
                            <span
                                class="gsap-dot absolute -top-1 left-1/2 h-2 w-2 -translate-x-1/2 rounded-full {{ $index % 2 ? 'bg-accent-violet' : 'bg-accent-blue' }} shadow-[0_0_12px_rgba(91,140,255,0.8)]">
                            </span>
                        </div>
                    </div>
                @endforeach

                {{-- Core --}}
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                    <div class="animate-float-slow flex h-32 w-32 items-center justify-center rounded-full border border-border bg-card/60 backdrop-blur-xl">
                        <div class="absolute inset-2 rounded-full bg-grad-primary opacity-90 blur-2xl"></div>
                        <div class="relative flex h-20 w-20 items-center justify-center rounded-full bg-background text-2xl font-bold">
                            <span class="text-gradient">
                                {{ strtoupper(substr(config('portfolio.personal.name'), 0, 1)) }}{{ strtoupper(substr(strrchr(config('portfolio.personal.name'), ' '), 1, 1)) }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Tech Stack --}}
                @php
                    // Map items to different radii (percentages of the container)
                    $radii = [50, 39, 28, 17, 50, 39];
                    // Initial angles to space them out
                    $angles = [0, 72, 144, 216, 288, 45];
                @endphp

                @foreach(config('portfolio.hero.tech_stack') as $index => $tech)
                    <div class="gsap-tech-wrapper absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 h-0 w-0"
                        data-radius="{{ $radii[$index % count($radii)] }}"
                        data-angle="{{ $angles[$index % count($angles)] }}"
                        data-reverse="{{ $index % 2 == 0 ? 'true' : 'false' }}">

                        <div
                            class="gsap-tech-item absolute -translate-x-1/2 -translate-y-1/2 rounded-full border border-border bg-card/80 px-3 py-1.5 text-xs text-foreground/90 backdrop-blur-md whitespace-nowrap shadow-lg">
                            {{ $tech }}
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>

    {{-- Scroll --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-muted-foreground">

        <div class="flex flex-col items-center gap-2 text-[10px] uppercase tracking-[0.3em]">

            Scroll

            <i class="ph ph-arrow-down animate-bounce"></i>

        </div>

    </div>

</section>