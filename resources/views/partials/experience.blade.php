<section id="experience" class="relative mx-auto max-w-7xl px-6 py-32">

    <div class="reveal mb-14">
        <div class="mb-3 flex items-center gap-2 text-xs uppercase tracking-[0.28em] text-muted-foreground">
            <span class="h-px w-8 bg-border"></span>
            04 — Experience & Education
        </div>

        <h2 class="max-w-3xl text-4xl font-semibold tracking-tight md:text-6xl">
            The short story so far.
        </h2>
    </div>

    <div class="relative mx-auto max-w-3xl">

        {{-- Timeline --}}
        <div
            class="absolute bottom-0 left-4 top-0 w-px bg-gradient-to-b from-transparent via-border to-transparent md:left-1/2 md:-translate-x-1/2">
        </div>

        <ul class="space-y-14">

            @foreach (config('portfolio.experience') as $item)

                @php
                    $right = $loop->odd;
                @endphp

                <li class="reveal relative grid grid-cols-[auto_1fr] items-start gap-6 md:grid-cols-2 md:gap-12">

                    {{-- Timeline Dot --}}
                    <span
                        class="absolute left-4 top-2 h-3 w-3 -translate-x-1/2 rounded-full bg-grad-primary shadow-[0_0_16px_rgba(124,92,255,0.7)] md:left-1/2"></span>

                    {{-- Heading --}}
                    <div class="pl-10 md:pl-0 {{ $right ? 'md:order-2 md:pl-12' : 'md:pr-12 md:text-right' }}">

                        <div class="text-xs uppercase tracking-[0.28em] text-accent-blue">
                            {{ $item['year'] }}
                        </div>

                        <h3 class="mt-2 text-xl font-semibold tracking-tight md:text-2xl">
                            {{ $item['title'] }}
                        </h3>

                        <div class="mt-1 text-sm text-muted-foreground">
                            {{ $item['organization'] }}
                        </div>

                    </div>

                    {{-- Desktop Description --}}
                    <div class="hidden md:block {{ $right ? 'md:order-1 md:pr-12 md:text-right' : 'md:pl-12' }}">

                        <p class="text-sm leading-relaxed text-muted-foreground">
                            {{ $item['description'] }}
                        </p>

                    </div>

                    {{-- Mobile Description --}}
                    <p class="col-span-2 pl-10 text-sm leading-relaxed text-muted-foreground md:hidden">
                        {{ $item['description'] }}
                    </p>

                </li>

            @endforeach

        </ul>

    </div>

</section>