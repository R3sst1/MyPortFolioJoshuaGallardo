<section id="projects" class="relative mx-auto max-w-7xl px-6 py-32">

    <div class="reveal mb-14 flex flex-wrap items-end justify-between gap-6">

        <div>

            <div class="mb-3 flex items-center gap-2 text-xs uppercase tracking-[0.28em] text-muted-foreground">

                <span class="h-px w-8 bg-border"></span>

                03 — Selected Work

            </div>

            <h2 class="max-w-3xl text-4xl font-semibold tracking-tight md:text-6xl">

                A small, honest catalogue.

            </h2>

        </div>

        <p class="max-w-sm text-sm text-muted-foreground">

            Academic capstones and personal experiments — each one taught me something worth carrying forward.

        </p>

    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-6 lg:auto-rows-[minmax(240px,auto)]">

        @php
            $featured = config('portfolio.projects.featured');
        @endphp

        {{-- Featured Project --}}
        <a href="{{ $featured['live'] }}"
            class="reveal project-card group relative flex h-full flex-col overflow-hidden rounded-3xl border border-border bg-card/60 p-8 transition-all duration-500 hover:-translate-y-1 hover:border-border-strong lg:col-span-4 lg:row-span-2">

            <div class="project-glow pointer-events-none absolute -inset-px rounded-3xl opacity-0 transition-opacity duration-500">
            </div>

            <div class="pointer-events-none absolute -right-24 -top-40 h-[420px] w-[420px] rounded-full opacity-30 blur-3xl transition-opacity duration-700 group-hover:opacity-50"
                style="background: radial-gradient(circle,#7c5cff,transparent 60%)">
            </div>

            <div class="relative flex items-center gap-2 text-xs uppercase tracking-[0.28em] text-muted-foreground">

                <i class="ph-fill ph-star text-accent-blue"></i>

                Featured Project

            </div>

            <h3 class="relative mt-4 text-3xl font-semibold leading-tight tracking-tight md:text-5xl">

                {{ $featured['title'] }}

            </h3>

            <p class="relative mt-4 max-w-2xl text-base leading-relaxed text-muted-foreground">

                {{ $featured['description'] }}

            </p>

            {{-- Preview --}}
            <div class="relative mt-auto pt-10">

                <div class="relative aspect-[16/8] overflow-hidden rounded-2xl border border-border bg-background">

                    <div class="absolute inset-0 bg-grad-primary opacity-[0.08]"></div>

                    {{-- Replace this later with screenshots --}}

                    <div class="flex h-full items-center justify-center">

                        <span class="text-muted-foreground">

                            Project Screenshot

                        </span>

                    </div>

                </div>

            </div>

            <div class="relative mt-6 flex flex-wrap items-center justify-between gap-4">

                <div class="flex flex-wrap gap-2">

                    @foreach($featured['stack'] as $tech)

                        <span
                            class="rounded-full border border-border bg-background/40 px-3 py-1 text-xs text-muted-foreground">

                            {{ $tech }}

                        </span>

                    @endforeach

                </div>

                <div class="flex items-center gap-2 text-sm">

                    View Case Study

                    <i class="ph ph-arrow-up-right"></i>

                </div>

            </div>

        </a>

        {{-- Other Projects --}}
        @foreach(config('portfolio.projects.items') as $project)

            <a href="{{ $project['link'] }}"
                class="reveal project-card group relative flex h-full flex-col justify-between overflow-hidden rounded-3xl border border-border bg-card/60 p-6 transition-all duration-500 hover:-translate-y-1 hover:border-border-strong lg:col-span-2">

                <div class="project-glow pointer-events-none absolute -inset-px rounded-3xl opacity-0 transition-opacity duration-500">
                </div>

                <div class="relative">

                    <div class="mb-3 text-[10px] uppercase tracking-[0.28em] text-muted-foreground">

                        {{ $project['tag'] }}

                    </div>

                    <h3 class="text-xl font-semibold tracking-tight">

                        {{ $project['title'] }}

                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-muted-foreground">

                        {{ $project['description'] }}

                    </p>

                </div>

                <div class="relative mt-6 flex items-center justify-between">

                    <div class="flex flex-wrap gap-1.5">

                        @foreach($project['stack'] as $tech)

                            <span class="rounded-full border border-border px-2.5 py-0.5 text-[10px] text-muted-foreground">

                                {{ $tech }}

                            </span>

                        @endforeach

                    </div>

                    <div class="flex items-center gap-2">

                        <i class="ph ph-github-logo"></i>

                        <i class="ph ph-arrow-up-right transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:translate-x-0.5"></i>

                    </div>

                </div>

            </a>

        @endforeach

    </div>

</section>