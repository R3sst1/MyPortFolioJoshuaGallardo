<section id="skills" class="relative mx-auto max-w-7xl px-6 py-32">

    <div class="reveal mb-14">
        <div class="mb-3 flex items-center gap-2 text-xs uppercase tracking-[0.28em] text-muted-foreground">
            <span class="h-px w-8 bg-border"></span>
            02 — Skills
        </div>

        <h2 class="max-w-3xl text-4xl font-semibold tracking-tight md:text-6xl">
            A modest toolkit, used with intent.
        </h2>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

        @foreach (config('portfolio.skills') as $group)

            <div class="reveal">

                <div
                    class="group skill-card relative h-full overflow-hidden rounded-2xl border border-border bg-card/60 p-6 transition-all duration-500 hover:-translate-y-1 hover:border-border-strong">

                    <div
                        class="skill-glow pointer-events-none absolute -inset-px rounded-2xl opacity-0 transition-opacity duration-500">
                    </div>

                    <div class="relative">

                        <div class="mb-1 flex items-baseline justify-between">

                            <h3 class="text-lg font-semibold tracking-tight text-foreground">
                                {{ $group['title'] }}
                            </h3>

                            <span class="text-xs text-muted-foreground">
                                {{ count($group['items']) }}
                            </span>

                        </div>

                        <div class="mb-5 h-px w-full bg-border"></div>

                        <ul class="flex flex-wrap gap-2">

                            @foreach ($group['items'] as $item)

                                <li
                                    class="rounded-full border border-border bg-background/40 px-3 py-1.5 text-xs text-foreground/85 transition hover:border-border-strong hover:text-foreground">

                                    {{ $item }}

                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    {{-- Marquee --}}
    <div class="reveal">

        <div class="relative mt-20 overflow-hidden border-y border-border py-8">

            <div
                class="pointer-events-none absolute inset-y-0 left-0 z-10 w-24 bg-gradient-to-r from-background to-transparent">
            </div>

            <div
                class="pointer-events-none absolute inset-y-0 right-0 z-10 w-24 bg-gradient-to-l from-background to-transparent">
            </div>

            <div class="flex w-max text-2xl font-medium text-muted-foreground md:text-3xl hover:[animation-play-state:paused]" style="animation: marquee 30s linear infinite;">

                @for ($i = 0; $i < 2; $i++)

                    <div class="flex gap-16 whitespace-nowrap pr-16">

                        @foreach (config('portfolio.marquee_skills') as $skill)

                            <span class="flex items-center gap-16">

                                {{ $skill }}

                                <span class="text-accent-blue">✦</span>

                            </span>

                        @endforeach

                    </div>

                @endfor

            </div>

        </div>

    </div>

</section>