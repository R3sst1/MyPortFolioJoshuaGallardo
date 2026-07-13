<section id="contact" class="relative mx-auto max-w-7xl px-6 py-32">

    <div class="pointer-events-none absolute inset-x-0 top-40 -z-10 flex justify-center">
        <div class="h-[420px] w-[720px] rounded-full opacity-30 blur-[140px]"
            style="background: radial-gradient(circle,#5b8cff,transparent 60%)">
        </div>
    </div>

    <div class="reveal mb-14 text-center">

        <div
            class="mb-3 flex items-center justify-center gap-2 text-xs uppercase tracking-[0.28em] text-muted-foreground">
            <span class="h-px w-8 bg-border"></span>
            05 — Contact
            <span class="h-px w-8 bg-border"></span>
        </div>

        <h2 class="mx-auto max-w-3xl text-4xl font-semibold tracking-tight md:text-6xl">
            Let's build something
            <span class="text-gradient">
                worth shipping.
            </span>
        </h2>

        <p class="mx-auto mt-4 max-w-xl text-muted-foreground">
            I'm open to junior developer opportunities, internships,
            freelance work, and exciting collaborations.
            If you'd like to work together, I'd love to hear from you.
        </p>

    </div>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-5">

        {{-- Left Card --}}
        <div class="reveal lg:col-span-2">

            <div class="flex h-full flex-col justify-between rounded-3xl border border-border bg-card/60 p-8">

                <div>

                    <div class="text-xs uppercase tracking-[0.28em] text-muted-foreground">
                        Direct
                    </div>

                    <a href="mailto:joshuagallardo6588@gmail.com"
                        class="mt-3 flex items-center gap-3 text-lg font-medium tracking-tight transition hover:text-accent-blue md:text-xl">

                        <i class="ph ph-envelope-simple text-lg"></i>

                        joshuagallardo6588@gmail.com

                    </a>

                    <div class="mt-8 text-xs uppercase tracking-[0.28em] text-muted-foreground">
                        Location
                    </div>

                    <div class="mt-3 text-lg">
                        Philippines · Open to Remote
                    </div>

                </div>

                <div class="mt-10">

                    <div class="mb-3 text-xs uppercase tracking-[0.28em] text-muted-foreground">
                        Elsewhere
                    </div>

                    <div class="flex flex-wrap gap-2">

                        <a href="#"
                            class="group inline-flex items-center gap-2 rounded-full border border-border bg-background/40 px-4 py-2 text-sm transition hover:border-border-strong hover:bg-white/[0.05]">

                            <i class="ph ph-github-logo"></i>

                            GitHub

                            <i class="ph ph-arrow-up-right transition group-hover:-translate-y-0.5"></i>

                        </a>

                        <a href="#"
                            class="group inline-flex items-center gap-2 rounded-full border border-border bg-background/40 px-4 py-2 text-sm transition hover:border-border-strong hover:bg-white/[0.05]">

                            <i class="ph ph-linkedin-logo"></i>

                            LinkedIn

                            <i class="ph ph-arrow-up-right transition group-hover:-translate-y-0.5"></i>

                        </a>

                        <a href="#"
                            class="group inline-flex items-center gap-2 rounded-full border border-border bg-background/40 px-4 py-2 text-sm transition hover:border-border-strong hover:bg-white/[0.05]">

                            <i class="ph ph-facebook-logo"></i>

                            Facebook

                            <i class="ph ph-arrow-up-right transition group-hover:-translate-y-0.5"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- Contact Form --}}
        <div class="reveal lg:col-span-3">

            <form action="{{ route('contact.send') }}" method="POST"
                class="overflow-hidden rounded-3xl border border-border bg-card/60 p-8 backdrop-blur-xl">

                @csrf

                @if(session('success'))
                    <div class="mb-6 rounded-xl border border-green-500/30 bg-green-500/10 p-4 text-sm text-green-400">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 rounded-xl border border-red-500/30 bg-red-500/10 p-4 text-sm text-red-400">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 rounded-xl border border-red-500/30 bg-red-500/10 p-4 text-sm text-red-400">
                        <ul class="space-y-1 list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                    <div>

                        <label class="mb-2 block text-xs uppercase tracking-[0.28em] text-muted-foreground">
                            Your Name
                        </label>

                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your full name"
                            required
                            class="w-full rounded-xl border border-border bg-background/60 px-4 py-3 text-sm outline-none transition focus:border-accent-blue">

                    </div>

                    <div>

                        <label class="mb-2 block text-xs uppercase tracking-[0.28em] text-muted-foreground">
                            Email Address
                        </label>

                        <input type="email" name="email" value="{{ old('email') }}" placeholder="your@email.com"
                            required
                            class="w-full rounded-xl border border-border bg-background/60 px-4 py-3 text-sm outline-none transition focus:border-accent-blue">

                    </div>

                </div>

                <div class="mt-5">

                    <label class="mb-2 block text-xs uppercase tracking-[0.28em] text-muted-foreground">
                        Subject
                    </label>

                    <input type="text" name="subject" value="{{ old('subject') }}"
                        placeholder="Job opportunity, freelance project, or collaboration" required
                        class="w-full rounded-xl border border-border bg-background/60 px-4 py-3 text-sm outline-none transition focus:border-accent-blue">

                </div>

                <div class="mt-5">

                    <label class="mb-2 block text-xs uppercase tracking-[0.28em] text-muted-foreground">
                        Message
                    </label>

                    <textarea name="message" rows="6" required
                        placeholder="Tell me about your project, team, or opportunity..."
                        class="w-full resize-none rounded-xl border border-border bg-background/60 px-4 py-3 text-sm outline-none transition focus:border-accent-blue">{{ old('message') }}</textarea>

                </div>

                <div class="mt-6 flex flex-col items-start justify-between gap-4 md:flex-row md:items-center">

                    <p class="text-xs text-muted-foreground">
                        Your message will be sent directly to
                        <span class="text-foreground">
                            joshuagallardo6588@gmail.com
                        </span>.
                    </p>

                    <button type="submit"
                        class="rounded-full bg-grad-primary px-7 py-3 text-sm font-medium text-white transition hover:scale-105">

                        <span class="inline-flex items-center gap-2">

                            Let's Talk

                            <i class="ph-fill ph-paper-plane-tilt"></i>

                        </span>

                    </button>

                </div>

            </form>

        </div>

    </div>

</section>