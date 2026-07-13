<div id="preloader" class="fixed inset-0 z-[10000] flex flex-col items-center justify-center bg-background">

    {{-- Background Glow --}}
    <div class="absolute inset-0 opacity-40">

        <div class="absolute left-1/2 top-1/2 h-[600px] w-[600px] -translate-x-1/2 -translate-y-1/2 rounded-full blur-3xl"
            style="background: radial-gradient(circle, rgba(91,140,255,.25), transparent 60%);">
        </div>

    </div>

    {{-- Content --}}
    <div class="relative z-10 text-center">

        <h1 class="preloader-title text-4xl font-semibold tracking-tight md:text-6xl">

            {{ config('portfolio.hero.first_name') }}

            <span class="text-gradient">

                {{ config('portfolio.hero.last_name') }}

            </span>

        </h1>

        <p class="preloader-subtitle mt-3 text-sm tracking-wide text-muted-foreground md:text-base">

            Building Digital Experiences

        </p>

    </div>

    {{-- Progress --}}
    <div class="relative z-10 mt-14 w-[min(420px,72vw)]">

        <div class="h-[2px] w-full overflow-hidden rounded-full bg-white/5">

            <div id="preloader-bar" class="h-full bg-grad-primary"
                style="width:0%; box-shadow:0 0 12px rgba(124,92,255,.6);">
            </div>

        </div>

        <div class="mt-3 flex justify-between text-xs font-mono text-muted-foreground">

            <span>

                LOADING

            </span>

            <span id="preloader-count">

                000%

            </span>

        </div>

    </div>

</div>