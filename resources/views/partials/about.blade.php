<section id="about" class="relative mx-auto max-w-7xl px-6 py-32">

    <div class="reveal mb-14 flex items-end justify-between gap-6">
        <div>
            <div class="mb-3 flex items-center gap-2 text-xs uppercase tracking-[0.28em] text-muted-foreground">
                <span class="h-px w-8 bg-border"></span>
                01 — About
            </div>

            <h2 class="max-w-3xl text-4xl font-semibold tracking-tight md:text-6xl">
                A quiet obsession with details, craft, and clean code.
            </h2>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-10 lg:grid-cols-12">

        {{-- Left Card --}}
        <div class="reveal lg:col-span-5">

            <div class="group relative aspect-[4/5] w-full overflow-hidden rounded-2xl border border-border bg-card">

                <div class="absolute inset-0 bg-grad-primary opacity-20 transition-opacity duration-500 group-hover:opacity-30"></div>

                <div class="absolute inset-0 flex items-center justify-center text-[9rem] font-semibold tracking-tighter text-white/[0.06]">
                    JG
                </div>

                <div class="absolute inset-x-0 bottom-0 p-6">

                    <div class="rounded-xl border border-border bg-background/60 p-4 backdrop-blur-xl">

                        <div class="flex items-center gap-3 text-sm">
                            <i class="ph ph-map-pin text-accent-blue"></i>
                            <span class="text-foreground">
                                Based in the Philippines
                            </span>
                        </div>

                        <div class="mt-2 flex items-center gap-3 text-sm">
                            <i class="ph ph-graduation-cap text-accent-violet"></i>
                            <span class="text-foreground">
                                BSIT Graduate — 2026
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Right Side --}}
        <div class="space-y-6 lg:col-span-7">

            <div class="reveal">
                <p class="text-lg leading-relaxed text-foreground/90 md:text-xl">
                    I'm Joshua —
                    a fresh
                    <span class="font-medium text-gradient">
                        BSIT graduate
                    </span>
                    obsessed with building software that feels considered,
                    responsive, and quietly premium.
                    I'm early in my career,
                    but not early in my curiosity.
                </p>
            </div>

            <div class="reveal">
                <p class="text-base leading-relaxed text-muted-foreground">
                    My work sits at the intersection of engineering and design.
                    I care about typography,
                    micro-interactions,
                    page speed,
                    and the small choices that turn a working product into one people actually enjoy using.
                    My daily stack leans on
                    <span class="text-foreground">
                        Laravel, Livewire, PHP, JavaScript, Tailwind,
                    </span>
                    and AI-assisted workflows to ship faster without cutting corners.
                </p>
            </div>

            @php
                $cards = [
                    [
                        'title' => 'What I care about',
                        'description' => 'Clarity, performance, and interfaces that feel effortless.'
                    ],
                    [
                        'title' => 'How I work',
                        'description' => 'Small components, honest naming, and shipping in small waves.'
                    ],
                    [
                        'title' => "What I'm learning",
                        'description' => 'System design, testing patterns, and product intuition.'
                    ],
                    [
                        'title' => "Where I'm headed",
                        'description' => 'Building tools alongside senior engineers and designers.'
                    ]
                ];
            @endphp

            <div class="reveal">
                <div class="grid gap-3 sm:grid-cols-2">

                    @foreach($cards as $card)

                        <div class="rounded-xl border border-border bg-card/60 p-5">

                            <div class="mb-1.5 flex items-center gap-2 text-sm font-medium text-foreground">

                                <i class="ph-fill ph-sparkle text-accent-blue"></i>

                                <span>
                                    {{ $card['title'] }}
                                </span>

                            </div>

                            <p class="text-sm text-muted-foreground">
                                {{ $card['description'] }}
                            </p>

                        </div>

                    @endforeach

                </div>
            </div>

        </div>

    </div>

</section>