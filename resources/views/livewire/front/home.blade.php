<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.front', ['title' => 'front.home.title'])]
class extends Component {}; ?>

<div>

<!-- ═══════════════════════════════════════════
     NAV
══════════════════════════════════════════════ -->
<header id="nav" class="fixed top-0 left-0 right-0 z-50 flex justify-center pt-4 px-4">
  <div id="nav-inner" class="w-full max-w-3xl flex items-center justify-between px-5 py-2">
    <a href="#" class="flex items-center gap-1 select-none">
      <span class="font-grotesk text-2xl font-light tracking-tight">
        <span class="logo-dot">dot</span><span class="logo-it font-medium">IT</span>
      </span>
      <span class="w-1.5 h-1.5 rounded-full" style="background:var(--purple-core);margin-bottom:2px;margin-left:1px;"></span>
    </a>

    <nav class="hidden md:flex items-center gap-8 text-sm font-light text-neutral-600">
      <a href="#services" class="hover:text-black transition-colors">Services</a>
      <a href="#work"     class="hover:text-black transition-colors">Work</a>
      <a href="#about"    class="hover:text-black transition-colors">About</a>
      <a href="#contact"  class="hover:text-black transition-colors">Contact</a>
    </nav>

    <button onclick="openModal()" class="btn-primary hidden md:flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium">
      Let's Talk
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>

    <button id="mob-toggle" class="md:hidden flex flex-col gap-1.5 p-2" onclick="toggleMobileMenu()">
      <span class="block w-5 h-px bg-black transition-all" id="bar1"></span>
      <span class="block w-5 h-px bg-black transition-all" id="bar2"></span>
    </button>
  </div>
</header>

<!-- Mobile Menu -->
<div id="mob-menu" class="fixed inset-0 z-40 bg-white/95 backdrop-blur-xl flex flex-col items-center justify-center gap-8 text-2xl font-light pointer-events-none opacity-0 transition-opacity duration-300">
  <a href="#services" onclick="closeMobileMenu()" class="hover:text-neutral-500 transition-colors">Services</a>
  <a href="#work"     onclick="closeMobileMenu()" class="hover:text-neutral-500 transition-colors">Work</a>
  <a href="#about"    onclick="closeMobileMenu()" class="hover:text-neutral-500 transition-colors">About</a>
  <a href="#contact"  onclick="closeMobileMenu()" class="hover:text-neutral-500 transition-colors">Contact</a>
  <button onclick="openModal(); closeMobileMenu();" class="btn-primary px-8 py-3 rounded-full text-base mt-4">Let's Talk</button>
</div>


<!-- ═══════════════════════════════════════════
     HERO
══════════════════════════════════════════════ -->
<section id="hero" class="relative min-h-screen flex flex-col overflow-hidden pt-20">

  <div class="orb orb-purple w-96 h-96 top-[-6rem] left-[-6rem] pulse-orb"></div>
  <div class="orb orb-rose   w-80 h-80 bottom-10 right-[-4rem] pulse-orb" style="animation-delay:-2s;"></div>
  <div class="orb orb-gray   w-72 h-72 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>

  <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-12 items-center relative z-10 flex-1 py-16">

    <!-- Left copy -->
    <div>
      <div class="pill pill-purple mb-6 reveal">Digital craftsmen</div>

      <h1 class="font-grotesk text-5xl md:text-6xl lg:text-7xl font-light leading-tight tracking-tight mb-6 reveal delay-100">
        We build things<br />
        <span class="grad-text font-medium">the web runs on</span>
      </h1>

      <p class="text-lg text-neutral-500 font-light leading-relaxed max-w-md mb-10 reveal delay-200">
        dotIT is a boutique studio crafting web software, APIs, and games — where precision engineering meets inventive design.
      </p>

      <div class="flex flex-wrap gap-4 reveal delay-300">
        <a href="#work" class="btn-primary px-7 py-3.5 rounded-full text-sm">See our work</a>
        <a href="#services" class="btn-ghost px-7 py-3.5 rounded-full text-sm font-medium text-neutral-700">Explore services</a>
      </div>

      <div class="flex gap-10 mt-14 reveal delay-400">
        <div>
          <div class="text-3xl font-light grad-text font-grotesk">40+</div>
          <div class="text-xs text-neutral-400 mt-1 uppercase tracking-widest">Projects</div>
        </div>
        <div class="w-px bg-neutral-200"></div>
        <div>
          <div class="text-3xl font-light grad-text font-grotesk">8yr</div>
          <div class="text-xs text-neutral-400 mt-1 uppercase tracking-widest">Experience</div>
        </div>
        <div class="w-px bg-neutral-200"></div>
        <div>
          <div class="text-3xl font-light grad-text font-grotesk">98%</div>
          <div class="text-xs text-neutral-400 mt-1 uppercase tracking-widest">Satisfaction</div>
        </div>
      </div>
    </div>

    <!-- Right 3D scene -->
    <div class="relative h-[480px] scene-3d parallax-slow hidden md:block">
      <div class="absolute top-4 right-8 tesseract-scene" style="perspective:600px;">
        <div class="tesseract-wrap">
          <svg width="220" height="220" viewBox="-110 -110 220 220" style="overflow:visible;">
            <defs>
              <radialGradient id="tg1" cx="50%" cy="50%" r="60%">
                <stop offset="0%" stop-color="oklch(60% 0.16 220)" stop-opacity="0.15"/>
                <stop offset="100%" stop-color="oklch(52% 0.18 220)" stop-opacity="0"/>
              </radialGradient>
            </defs>
            <circle cx="0" cy="0" r="90" fill="url(#tg1)"/>
            <polygon points="-80,80 80,80 80,-80 -80,-80" fill="none" stroke="oklch(60% 0.16 220)" stroke-width="0.8" opacity="0.25"/>
            <polygon points="-50,50 50,50 50,-50 -50,-50" fill="none" stroke="oklch(55% 0.22 5)" stroke-width="0.8" opacity="0.25"/>
            <line x1="-80" y1="-80" x2="-80" y2="80"  stroke="oklch(60% 0.16 220)" stroke-width="0.8" opacity="0.35"/>
            <line x1="80"  y1="-80" x2="80"  y2="80"  stroke="oklch(60% 0.16 220)" stroke-width="0.8" opacity="0.35"/>
            <line x1="-80" y1="-80" x2="80"  y2="-80" stroke="oklch(60% 0.16 220)" stroke-width="0.8" opacity="0.35"/>
            <line x1="-80" y1="80"  x2="80"  y2="80"  stroke="oklch(60% 0.16 220)" stroke-width="0.8" opacity="0.35"/>
            <line x1="-50" y1="-50" x2="-50" y2="50"  stroke="oklch(55% 0.22 5)" stroke-width="0.8" opacity="0.45"/>
            <line x1="50"  y1="-50" x2="50"  y2="50"  stroke="oklch(55% 0.22 5)" stroke-width="0.8" opacity="0.45"/>
            <line x1="-50" y1="-50" x2="50"  y2="-50" stroke="oklch(55% 0.22 5)" stroke-width="0.8" opacity="0.45"/>
            <line x1="-50" y1="50"  x2="50"  y2="50"  stroke="oklch(55% 0.22 5)" stroke-width="0.8" opacity="0.45"/>
            <line x1="-80" y1="-80" x2="-50" y2="-50" stroke="oklch(62% 0.16 220)" stroke-width="0.7" opacity="0.55"/>
            <line x1="80"  y1="-80" x2="50"  y2="-50" stroke="oklch(62% 0.16 220)" stroke-width="0.7" opacity="0.55"/>
            <line x1="80"  y1="80"  x2="50"  y2="50"  stroke="oklch(62% 0.16 220)" stroke-width="0.7" opacity="0.55"/>
            <line x1="-80" y1="80"  x2="-50" y2="50"  stroke="oklch(62% 0.16 220)" stroke-width="0.7" opacity="0.55"/>
            <circle cx="-80" cy="-80" r="2.5" fill="oklch(60% 0.16 220)" opacity="0.7"/>
            <circle cx="80"  cy="-80" r="2.5" fill="oklch(60% 0.16 220)" opacity="0.7"/>
            <circle cx="80"  cy="80"  r="2.5" fill="oklch(60% 0.16 220)" opacity="0.7"/>
            <circle cx="-80" cy="80"  r="2.5" fill="oklch(60% 0.16 220)" opacity="0.7"/>
            <circle cx="-50" cy="-50" r="2" fill="oklch(55% 0.22 5)" opacity="0.8"/>
            <circle cx="50"  cy="-50" r="2" fill="oklch(55% 0.22 5)" opacity="0.8"/>
            <circle cx="50"  cy="50"  r="2" fill="oklch(55% 0.22 5)" opacity="0.8"/>
            <circle cx="-50" cy="50"  r="2" fill="oklch(55% 0.22 5)" opacity="0.8"/>
            <line x1="-80" y1="-80" x2="50"  y2="50"  stroke="oklch(62% 0.16 220)" stroke-width="0.5" opacity="0.12" stroke-dasharray="3,4"/>
            <line x1="80"  y1="-80" x2="-50" y2="50"  stroke="oklch(60% 0.18 5)"   stroke-width="0.5" opacity="0.12" stroke-dasharray="3,4"/>
            <line x1="-80" y1="80"  x2="50"  y2="-50" stroke="oklch(60% 0.18 5)"   stroke-width="0.5" opacity="0.12" stroke-dasharray="3,4"/>
            <line x1="80"  y1="80"  x2="-50" y2="-50" stroke="oklch(62% 0.16 220)" stroke-width="0.5" opacity="0.12" stroke-dasharray="3,4"/>
          </svg>
        </div>
      </div>

      <!-- Glass card: Web Software -->
      <div class="glass absolute top-24 left-0 w-64 rounded-2xl p-5 float-b tilt-card reveal delay-100">
        <div class="tilt-card-inner">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:oklch(94% 0.04 220);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--purple-core)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <div class="text-sm font-medium text-neutral-800 mb-1">Web Software</div>
          <div class="text-xs text-neutral-400 font-light">Scalable apps & platforms built for performance</div>
        </div>
      </div>

      <!-- Glass card: Ecommerce -->
      <div class="glass absolute bottom-28 left-16 w-60 rounded-2xl p-5 float-c tilt-card reveal delay-200">
        <div class="tilt-card-inner">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:oklch(96% 0.03 5);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--rose-core)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </div>
          <div class="text-sm font-medium text-neutral-800 mb-1">Ecommerce</div>
          <div class="text-xs text-neutral-400 font-light">Custom shops, carts &amp; payment integrations</div>
        </div>
      </div>

      <!-- Glass card: Games -->
      <div class="glass absolute top-52 right-4 w-60 rounded-2xl p-5 float-a tilt-card reveal delay-300" style="animation-delay:-3s;">
        <div class="tilt-card-inner">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:linear-gradient(135deg,oklch(94% 0.04 220),oklch(96% 0.03 5));">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--purple-core)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12h4M8 10v4"/><circle cx="15" cy="11" r="1" fill="var(--rose-core)" stroke="none"/><circle cx="17" cy="13" r="1" fill="var(--rose-core)" stroke="none"/><path d="M2 8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8z"/></svg>
          </div>
          <div class="text-sm font-medium text-neutral-800 mb-1">Game Development</div>
          <div class="text-xs text-neutral-400 font-light">Browser, desktop &amp; mobile games with flair</div>
        </div>
      </div>

      <div class="absolute inset-0 opacity-20" style="background-image:radial-gradient(circle,oklch(50% 0.25 295 / 0.5) 1px,transparent 1px);background-size:28px 28px;"></div>
    </div>
  </div>

  <!-- Tech marquee -->
  <div class="relative py-4 overflow-hidden z-10" style="margin-top:auto;">
    <div class="marquee-inner flex items-center gap-16 whitespace-nowrap w-max">
      <span class="tech-logo">TypeScript</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Node.js</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">React</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">PostgreSQL</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Unity</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">WebGL</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">GraphQL</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Rust</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Docker</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Unreal Engine</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Tailwind CSS</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">WebSockets</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">TypeScript</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Node.js</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">React</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">PostgreSQL</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Unity</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">WebGL</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">GraphQL</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Rust</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Docker</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Unreal Engine</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">Tailwind CSS</span><span class="text-neutral-300">·</span>
      <span class="tech-logo">WebSockets</span><span class="text-neutral-300">·</span>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="flex flex-col items-center gap-2 opacity-40 z-10 pb-10">
    <span class="text-xs tracking-widest uppercase text-neutral-500">Scroll</span>
    <div class="w-px h-6 bg-neutral-400 animate-pulse"></div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     SERVICES
══════════════════════════════════════════════ -->
<section id="services" class="py-32 bg-strip-1 relative overflow-hidden">
  <div class="orb orb-purple w-[28rem] h-[28rem] bottom-0 right-[-8rem] opacity-50"></div>

  <div class="container mx-auto px-6 md:px-12 relative z-10">

    <div class="mb-16">
      <div class="pill pill-rose mb-4 reveal">What we do</div>
      <h2 class="font-grotesk text-4xl md:text-5xl font-light tracking-tight reveal delay-100">
        Three disciplines.<br /><span class="grad-text">One team.</span>
      </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">

      <div class="svc-card glass rounded-3xl p-8 reveal delay-100">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background:linear-gradient(135deg,oklch(94% 0.06 220),oklch(90% 0.08 220));">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/><path d="M7 8l3 2.5L7 13"/><path d="M13 13h4"/></svg>
        </div>
        <div class="pill pill-purple mb-4">01</div>
        <h3 class="text-xl font-medium mb-3 font-grotesk">Web Software</h3>
        <p class="text-sm text-neutral-500 font-light leading-relaxed mb-6">
          Full-stack web applications built for scale. From internal tools to customer-facing platforms — clean code, fast loads, real security.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">React / Next.js</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Node.js</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">SaaS platforms</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Dashboards</span>
        </div>
      </div>

      <div class="svc-card glass rounded-3xl p-8 reveal delay-200" style="background:linear-gradient(145deg,rgba(40,130,215,0.06),rgba(255,255,255,0.55));">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background:linear-gradient(135deg,oklch(96% 0.03 5),oklch(92% 0.07 5));">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--rose-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
        </div>
        <div class="pill pill-rose mb-4">02</div>
        <h3 class="text-xl font-medium mb-3 font-grotesk">Ecommerce</h3>
        <p class="text-sm text-neutral-500 font-light leading-relaxed mb-6">
          Beautiful, conversion-focused online stores and marketplaces. Custom checkout flows, payment gateways, and inventory systems built to scale.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Custom shops</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Payments</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Marketplaces</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Headless CMS</span>
        </div>
      </div>

      <div class="svc-card glass rounded-3xl p-8 reveal delay-300">
        <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background:linear-gradient(135deg,oklch(94% 0.06 220),oklch(96% 0.03 5));">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 12h4M8 10v4"/><circle cx="15" cy="11" r="1.2" fill="var(--rose-core)" stroke="none"/><circle cx="17.2" cy="13" r="1.2" fill="var(--rose-core)" stroke="none"/><path d="M2 8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8z"/></svg>
        </div>
        <div class="pill pill-purple mb-4">03</div>
        <h3 class="text-xl font-medium mb-3 font-grotesk">Game Development</h3>
        <p class="text-sm text-neutral-500 font-light leading-relaxed mb-6">
          Browser-based, desktop, and mobile games. We combine solid engineering with creative design to make experiences players remember.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Unity / Unreal</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">WebGL</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Mobile games</span>
          <span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">Game design</span>
        </div>
      </div>

    </div>

    <!-- Process row -->
    <div class="mt-20 reveal">
      <div class="divider mb-6"></div>
      <h3 class="font-grotesk text-2xl font-light mb-10 text-neutral-700">How we work</h3>
      <div class="grid md:grid-cols-4 gap-0 relative">
        <div class="hidden md:block absolute top-5 left-[12.5%] right-[12.5%] h-px bg-gradient-to-r from-transparent via-neutral-200 to-transparent opacity-40"></div>
        <div class="text-center px-4 reveal delay-100">
          <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-4 font-grotesk text-sm font-medium text-white" style="background:var(--purple-core);">01</div>
          <div class="text-sm font-medium mb-1">Discover</div>
          <div class="text-xs text-neutral-400 font-light">Deep dive into your goals and constraints</div>
        </div>
        <div class="text-center px-4 reveal delay-200">
          <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-4 font-grotesk text-sm font-medium text-white" style="background:linear-gradient(135deg,var(--purple-core),var(--rose-core));">02</div>
          <div class="text-sm font-medium mb-1">Design</div>
          <div class="text-xs text-neutral-400 font-light">Wireframes to high-fidelity, user-tested</div>
        </div>
        <div class="text-center px-4 reveal delay-300">
          <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-4 font-grotesk text-sm font-medium text-white" style="background:linear-gradient(135deg,var(--rose-core),var(--purple-core));">03</div>
          <div class="text-sm font-medium mb-1">Build</div>
          <div class="text-xs text-neutral-400 font-light">Iterative sprints with weekly reviews</div>
        </div>
        <div class="text-center px-4 reveal delay-400">
          <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-4 font-grotesk text-sm font-medium text-white" style="background:var(--rose-core);">04</div>
          <div class="text-sm font-medium mb-1">Launch</div>
          <div class="text-xs text-neutral-400 font-light">Deploy, monitor, and keep improving</div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════
     WORK / PROJECTS
══════════════════════════════════════════════ -->
<section id="work" class="py-24 relative overflow-hidden">
  <div class="orb orb-rose w-[32rem] h-[32rem] top-0 left-[-10rem] opacity-30"></div>
  <div class="orb orb-purple w-[24rem] h-[24rem] bottom-0 right-[-6rem] opacity-20"></div>

  <div class="container mx-auto px-6 md:px-12 relative z-10">
    <div class="mb-12">
      <div class="pill pill-purple mb-4 reveal">Selected work</div>
      <h2 class="font-grotesk text-4xl md:text-5xl font-light tracking-tight reveal delay-100">
        Our <span class="grad-text">work</span>
      </h2>
    </div>

    <div class="flex flex-col lg:flex-row gap-10 items-start">

      <!-- Project grid -->
      <div class="flex-1 min-w-0">
        <div class="grid grid-cols-2 gap-3" id="proj-grid"></div>
      </div>

      <!-- Sticky device screens -->
      <div class="lg:w-[480px] flex-shrink-0">
        <div class="sticky top-24 flex flex-row items-end justify-center gap-6" style="padding-bottom:52px;position:relative;">

          <div class="laptop-3d flex-shrink-0" style="width:300px;">
            <div id="laptop-screen" style="width:100%;aspect-ratio:16/10;border-radius:10px;overflow:hidden;background:#070710;box-shadow:0 8px 40px rgba(20,110,200,0.18),0 0 0 1px rgba(255,255,255,0.08);transition:opacity 0.4s ease;">
              <div class="w-full h-full" style="background:linear-gradient(145deg,oklch(88% 0.11 220),oklch(85% 0.09 220));">
                <svg viewBox="0 0 300 188" class="w-full h-full" opacity="0.85">
                  <rect width="300" height="188" fill="rgba(20,110,200,0.06)"/>
                  <rect x="0" y="0" width="300" height="22" fill="rgba(0,0,0,0.18)"/>
                  <circle cx="12" cy="11" r="4" fill="rgba(255,80,80,0.6)"/>
                  <circle cx="26" cy="11" r="4" fill="rgba(255,180,0,0.6)"/>
                  <circle cx="40" cy="11" r="4" fill="rgba(40,200,80,0.6)"/>
                  <rect x="0" y="22" width="55" height="166" fill="rgba(0,0,0,0.12)"/>
                  <rect x="8" y="32" width="38" height="6" rx="3" fill="rgba(255,255,255,0.25)"/>
                  <rect x="8" y="46" width="32" height="4" rx="2" fill="rgba(255,255,255,0.12)"/>
                  <rect x="8" y="56" width="36" height="4" rx="2" fill="rgba(255,255,255,0.10)"/>
                  <rect x="64" y="30" width="220" height="30" rx="4" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.12)" stroke-width="0.6"/>
                  <rect x="64" y="70" width="100" height="64" rx="4" fill="rgba(50,140,220,0.18)" stroke="rgba(70,160,230,0.22)" stroke-width="0.6"/>
                  <rect x="172" y="70" width="108" height="64" rx="4" fill="rgba(200,80,110,0.14)" stroke="rgba(200,80,110,0.22)" stroke-width="0.6"/>
                  <rect x="64" y="142" width="216" height="24" rx="3" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.10)" stroke-width="0.6"/>
                </svg>
              </div>
            </div>
          </div>

          <div class="phone-3d flex-shrink-0" style="width:110px;align-self:flex-end;">
            <div id="phone-screen" style="width:100%;aspect-ratio:9/19.5;border-radius:22px;overflow:hidden;background:#020204;box-shadow:0 8px 40px rgba(20,110,200,0.15),0 0 0 1px rgba(255,255,255,0.08);transition:opacity 0.4s ease;">
              <div style="width:100%;height:100%;background:linear-gradient(160deg,oklch(20% 0.15 220),oklch(15% 0.10 215));">
                <svg viewBox="0 0 110 240" class="w-full h-full" opacity="0.9">
                  <rect width="110" height="240" fill="rgba(20,100,200,0.12)"/>
                  <circle cx="55" cy="72" r="30" fill="rgba(50,140,220,0.22)" stroke="rgba(70,160,230,0.3)" stroke-width="0.8"/>
                  <circle cx="55" cy="72" r="17" fill="rgba(200,80,110,0.18)" stroke="rgba(200,80,110,0.3)" stroke-width="0.8"/>
                  <rect x="14" y="116" width="84" height="6" rx="3" fill="rgba(255,255,255,0.22)"/>
                  <rect x="22" y="128" width="66" height="4" rx="2" fill="rgba(255,255,255,0.10)"/>
                  <rect x="14" y="146" width="38" height="38" rx="7" fill="rgba(50,140,220,0.22)" stroke="rgba(70,160,230,0.28)" stroke-width="0.8"/>
                  <rect x="58" y="146" width="38" height="38" rx="7" fill="rgba(200,80,110,0.18)" stroke="rgba(200,80,110,0.28)" stroke-width="0.8"/>
                  <rect x="14" y="196" width="84" height="28" rx="7" fill="rgba(50,140,220,0.32)" stroke="rgba(70,160,230,0.4)" stroke-width="0.8"/>
                  <rect x="30" y="207" width="52" height="4" rx="2" fill="rgba(255,255,255,0.55)"/>
                </svg>
              </div>
            </div>
          </div>

          <div id="active-proj-label" class="glass rounded-full px-4 py-2 text-xs font-medium text-neutral-600" style="position:absolute;bottom:-40px;left:50%;transform:translateX(-50%);white-space:nowrap;">
            Hover a project to preview
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════
     ABOUT
══════════════════════════════════════════════ -->
<section id="about" class="py-32 bg-strip-1 relative overflow-hidden">
  <div class="orb orb-purple w-[36rem] h-[36rem] top-0 right-[-12rem] opacity-35"></div>

  <div class="container mx-auto px-6 md:px-12 relative z-10">
    <div class="grid md:grid-cols-2 gap-16 items-center">

      <!-- 3D visual -->
      <div class="relative h-[420px] scene-3d parallax-fast reveal-left">
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="relative" style="width:320px;height:320px;">
            <div class="absolute inset-0 rounded-full border" style="border-color:oklch(62% 0.22 295 / 0.15);animation:spin-slow 18s linear infinite;"></div>
            <div class="absolute inset-8 rounded-full border" style="border-color:oklch(55% 0.22 5 / 0.20);animation:spin-slow 12s linear infinite reverse;border-style:dashed;"></div>
            <div class="absolute inset-16 rounded-full border" style="border-color:oklch(62% 0.22 295 / 0.30);animation:spin-slow 8s linear infinite;"></div>

            <div class="absolute" style="inset:-4px;animation:spin-slow 6s linear infinite;">
              <div class="absolute w-3 h-3 rounded-full top-0 left-1/2 -translate-x-1/2 -translate-y-1/2" style="background:var(--purple-core);box-shadow:0 0 12px var(--purple-core);"></div>
            </div>
            <div class="absolute" style="inset:-4px;animation:spin-slow 10s linear infinite reverse;">
              <div class="absolute w-2.5 h-2.5 rounded-full bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2" style="background:var(--rose-core);box-shadow:0 0 10px var(--rose-core);"></div>
            </div>

            <div class="absolute inset-0 flex items-center justify-center">
              <div class="glass-purple rounded-2xl p-6 text-center float-a" style="backdrop-filter:blur(20px);">
                <div class="font-grotesk text-3xl font-light grad-text mb-1">dot</div>
                <div class="text-xs text-neutral-400 tracking-widest uppercase">IT</div>
              </div>
            </div>

            <div class="glass absolute rounded-xl px-3 py-1.5 text-xs font-medium" style="top:8%;right:-20%;background:rgba(255,255,255,0.7);">
              <span style="color:var(--purple-core);">&#123; API &#125;</span>
            </div>
            <div class="glass absolute rounded-xl px-3 py-1.5 text-xs font-medium" style="bottom:12%;left:-18%;background:rgba(255,255,255,0.7);">
              <span style="color:var(--rose-core);">Game Loop</span>
            </div>
            <div class="glass absolute rounded-xl px-3 py-1.5 text-xs font-medium" style="bottom:8%;right:-14%;background:rgba(255,255,255,0.7);">
              <span style="color:var(--purple-core);">&lt;/&gt; Web</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Copy -->
      <div>
        <div class="pill pill-rose mb-4 reveal">About dotIT</div>
        <h2 class="font-grotesk text-4xl font-light leading-tight tracking-tight mb-6 reveal delay-100">
          Small team.<br /><span class="grad-text">Outsized results.</span>
        </h2>
        <p class="text-neutral-500 font-light leading-relaxed mb-6 reveal delay-200">
          We're a tight-knit team of engineers and designers who believe the best digital products come from the intersection of technical rigor and creative thinking. No bloated processes — just focused craft.
        </p>
        <p class="text-neutral-500 font-light leading-relaxed mb-8 reveal delay-300">
          Whether you need a production-ready web app, a well-architected API, or a game that keeps players coming back — we scope it clearly, build it properly, and stand behind it.
        </p>

        <div class="space-y-3 reveal delay-400">
          <div class="flex items-center gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:oklch(94% 0.06 220);">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="var(--purple-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="text-sm text-neutral-600 font-light">Direct access to senior engineers — no middlemen</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:oklch(96% 0.03 5);">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="var(--rose-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="text-sm text-neutral-600 font-light">End-to-end ownership from spec to deployment</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:oklch(94% 0.06 220);">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="var(--purple-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="text-sm text-neutral-600 font-light">Games and software under the same roof — unified vision</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background:oklch(96% 0.03 5);">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="var(--rose-core)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="text-sm text-neutral-600 font-light">Transparent pricing — no surprise invoices</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     STATS
══════════════════════════════════════════════ -->
<section class="py-24 relative overflow-hidden bg-strip-2">
  <div class="container mx-auto px-6 md:px-12">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center reveal delay-100">
        <div class="font-grotesk text-5xl font-light grad-text mb-2 count-up" data-target="40">0</div>
        <div class="text-xs text-neutral-400 uppercase tracking-widest">Projects delivered</div>
      </div>
      <div class="text-center reveal delay-200">
        <div class="font-grotesk text-5xl font-light grad-text mb-2 count-up" data-target="8">0</div>
        <div class="text-xs text-neutral-400 uppercase tracking-widest">Years of craft</div>
      </div>
      <div class="text-center reveal delay-300">
        <div class="font-grotesk text-5xl font-light grad-text mb-2 count-up" data-target="12">0</div>
        <div class="text-xs text-neutral-400 uppercase tracking-widest">Games shipped</div>
      </div>
      <div class="text-center reveal delay-400">
        <div class="font-grotesk text-5xl font-light grad-text mb-2 count-up" data-target="98">0</div>
        <div class="text-xs text-neutral-400 uppercase tracking-widest">% client satisfaction</div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     CONTACT
══════════════════════════════════════════════ -->
<section id="contact" class="py-32 bg-strip-1 relative overflow-hidden">
  <div class="orb orb-purple w-[34rem] h-[34rem] bottom-[-8rem] left-1/2 -translate-x-1/2 opacity-30"></div>

  <div class="container mx-auto px-6 md:px-12 relative z-10">
    <div class="max-w-2xl mx-auto text-center mb-16">
      <div class="pill pill-rose mb-4 reveal mx-auto" style="width:fit-content;">Start a project</div>
      <h2 class="font-grotesk text-4xl md:text-5xl font-light tracking-tight mb-6 reveal delay-100">
        Got something<br /><span class="grad-text">in mind?</span>
      </h2>
      <p class="text-neutral-500 font-light leading-relaxed reveal delay-200">
        Tell us what you're building. We'll get back within 24 hours with a no-pressure first look at how we'd approach it.
      </p>
    </div>

    <div class="max-w-xl mx-auto glass rounded-3xl p-8 md:p-10 reveal">
      <form onsubmit="submitForm(event)">
        <div class="grid md:grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block text-xs text-neutral-500 mb-1.5 font-medium uppercase tracking-wider">Name</label>
            <input type="text" placeholder="Your name" class="form-input w-full rounded-xl px-4 py-3 text-sm font-light" required />
          </div>
          <div>
            <label class="block text-xs text-neutral-500 mb-1.5 font-medium uppercase tracking-wider">Email</label>
            <input type="email" placeholder="you@company.com" class="form-input w-full rounded-xl px-4 py-3 text-sm font-light" required />
          </div>
        </div>
        <div class="mb-4">
          <label class="block text-xs text-neutral-500 mb-1.5 font-medium uppercase tracking-wider">What do you need?</label>
          <div class="flex flex-wrap gap-2">
            <button type="button" class="service-tag pill pill-purple cursor-pointer" onclick="toggleTag(this)">Web Software</button>
            <button type="button" class="service-tag pill cursor-pointer" style="background:oklch(94% 0.04 220);color:var(--purple-core);border:1px solid oklch(88% 0.06 220);" onclick="toggleTag(this)">API</button>
            <button type="button" class="service-tag pill cursor-pointer" style="background:oklch(96% 0.03 5);color:var(--rose-core);border:1px solid oklch(88% 0.07 5);" onclick="toggleTag(this)">Game</button>
          </div>
        </div>
        <div class="mb-6">
          <label class="block text-xs text-neutral-500 mb-1.5 font-medium uppercase tracking-wider">Tell us more</label>
          <textarea rows="4" placeholder="Describe your project idea, timeline, or any constraints..." class="form-input w-full rounded-xl px-4 py-3 text-sm font-light resize-none"></textarea>
        </div>
        <button type="submit" class="btn-primary w-full py-3.5 rounded-xl text-sm font-medium flex items-center justify-center gap-2">
          Send message
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </form>
      <div id="form-success" class="hidden text-center py-6">
        <div class="text-3xl mb-3">🎉</div>
        <div class="font-medium mb-1">Message sent!</div>
        <div class="text-sm text-neutral-400 font-light">We'll be in touch within 24 hours.</div>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════ -->
<footer class="py-16 border-t border-neutral-100 relative z-10">
  <div class="container mx-auto px-6 md:px-12">
    <div class="grid md:grid-cols-4 gap-10 mb-12">
      <div class="md:col-span-2">
        <a href="#" class="flex items-center gap-1 mb-4">
          <span class="font-grotesk text-2xl font-light tracking-tight">
            <span class="logo-dot">dot</span><span class="logo-it font-medium">IT</span>
          </span>
          <span class="w-1.5 h-1.5 rounded-full" style="background:var(--purple-core);margin-bottom:2px;margin-left:1px;"></span>
        </a>
        <p class="text-sm text-neutral-400 font-light leading-relaxed max-w-xs">
          A boutique studio crafting web software, APIs, and games. Precision engineering with creative soul.
        </p>
        <div class="flex gap-4 mt-6">
          <a href="#" class="w-9 h-9 glass rounded-full flex items-center justify-center hover:border-neutral-300 transition-colors">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="#" class="w-9 h-9 glass rounded-full flex items-center justify-center hover:border-neutral-300 transition-colors">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
          </a>
          <a href="#" class="w-9 h-9 glass rounded-full flex items-center justify-center hover:border-neutral-300 transition-colors">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
          </a>
        </div>
      </div>
      <div>
        <div class="text-xs font-medium uppercase tracking-widest text-neutral-400 mb-4">Services</div>
        <div class="space-y-2.5">
          <a href="#services" class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">Web Software</a>
          <a href="#services" class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">API Development</a>
          <a href="#services" class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">Game Development</a>
          <a href="#services" class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">Design & Strategy</a>
        </div>
      </div>
      <div>
        <div class="text-xs font-medium uppercase tracking-widest text-neutral-400 mb-4">Company</div>
        <div class="space-y-2.5">
          <a href="#about"   class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">About</a>
          <a href="#work"    class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">Work</a>
          <a href="#contact" class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">Contact</a>
          <a href="#"        class="block text-sm text-neutral-500 font-light hover:text-black transition-colors">Privacy Policy</a>
        </div>
      </div>
    </div>
    <div class="border-t border-neutral-100 pt-6 flex flex-col md:flex-row items-center justify-between gap-2">
      <div class="text-xs text-neutral-400 font-light">© 2026 dotIT. All rights reserved.</div>
      <div class="text-xs text-neutral-300 font-light">Built by dotIT — naturally.</div>
    </div>
  </div>
</footer>


<!-- ═══════════════════════════════════════════
     CONTACT MODAL
══════════════════════════════════════════════ -->
<div id="modal-overlay" onclick="closeModal(event)">
  <div id="modal-box" class="glass w-full max-w-lg mx-4 rounded-3xl p-8 md:p-10 relative" style="background:rgba(255,255,255,0.88);" onclick="event.stopPropagation()">
    <button onclick="closeModal()" class="absolute top-5 right-5 w-8 h-8 rounded-full glass flex items-center justify-center text-neutral-400 hover:text-neutral-800 transition-colors">
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 1l10 10M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
    </button>
    <div class="mb-6">
      <div class="font-grotesk text-2xl font-light mb-1">Let's build something</div>
      <div class="text-sm text-neutral-400 font-light">Drop us a line — we respond fast.</div>
    </div>
    <form onsubmit="submitModal(event)" class="space-y-4">
      <input type="text" placeholder="Your name" class="form-input w-full rounded-xl px-4 py-3 text-sm font-light" required />
      <input type="email" placeholder="Email address" class="form-input w-full rounded-xl px-4 py-3 text-sm font-light" required />
      <textarea rows="3" placeholder="What are you working on?" class="form-input w-full rounded-xl px-4 py-3 text-sm font-light resize-none"></textarea>
      <button type="submit" class="btn-primary w-full py-3.5 rounded-xl text-sm font-medium flex items-center justify-center gap-2">
        Send it →
      </button>
    </form>
  </div>
</div>


<!-- ═══════════════════════════════════════════
     PROJECT MODAL
══════════════════════════════════════════════ -->
<div id="proj-modal-overlay" class="fixed inset-0 z-50 flex items-center justify-center" style="background:rgba(10,5,20,0.5);backdrop-filter:blur(10px);opacity:0;pointer-events:none;transition:opacity 0.3s ease;">
  <div id="proj-modal-box" class="glass w-full max-w-lg mx-4 rounded-3xl p-8 relative" style="background:rgba(255,255,255,0.90);transform:translateY(24px) scale(0.97);transition:transform 0.35s cubic-bezier(.22,.68,0,1.2);" onclick="event.stopPropagation()">
    <button onclick="closeProjModal()" class="absolute top-5 right-5 w-8 h-8 rounded-full glass flex items-center justify-center text-neutral-400 hover:text-neutral-800 transition-colors">
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 1l10 10M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
    </button>
    <div id="proj-modal-content"></div>
  </div>
</div>


<!-- ═══════════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════════════ -->
<script>
  /* ─── Nav scroll ─── */
  const nav = document.getElementById('nav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });

  /* ─── Mobile menu ─── */
  let menuOpen = false;
  function toggleMobileMenu() {
    menuOpen = !menuOpen;
    const menu = document.getElementById('mob-menu');
    const b1 = document.getElementById('bar1');
    const b2 = document.getElementById('bar2');
    menu.style.opacity = menuOpen ? '1' : '0';
    menu.style.pointerEvents = menuOpen ? 'all' : 'none';
    b1.style.transform = menuOpen ? 'rotate(45deg) translate(3px,3px)' : '';
    b2.style.transform = menuOpen ? 'rotate(-45deg) translate(3px,-3px)' : '';
  }
  function closeMobileMenu() {
    menuOpen = false;
    const menu = document.getElementById('mob-menu');
    menu.style.opacity = '0';
    menu.style.pointerEvents = 'none';
    document.getElementById('bar1').style.transform = '';
    document.getElementById('bar2').style.transform = '';
  }

  /* ─── Scroll reveal ─── */
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => observer.observe(el));

  /* ─── Parallax ─── */
  const parallaxSlow = document.querySelectorAll('.parallax-slow');
  const parallaxFast = document.querySelectorAll('.parallax-fast');
  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    parallaxSlow.forEach(el => { el.style.transform = `translateY(${scrollY * 0.06}px)`; });
    parallaxFast.forEach(el => { el.style.transform = `translateY(${scrollY * -0.04}px)`; });
  }, { passive: true });

  /* ─── 3D Card tilt ─── */
  document.querySelectorAll('.tilt-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const dx = (e.clientX - rect.left - rect.width / 2)  / (rect.width / 2);
      const dy = (e.clientY - rect.top  - rect.height / 2) / (rect.height / 2);
      card.style.transform = `perspective(600px) rotateY(${dx * 7}deg) rotateX(${-dy * 7}deg)`;
    });
    card.addEventListener('mouseleave', () => { card.style.transform = ''; });
  });

  /* ─── Count-up ─── */
  const countEls = document.querySelectorAll('.count-up');
  const countObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const el = e.target;
        const target = parseInt(el.dataset.target);
        let current = 0;
        const step = Math.ceil(target / 50);
        const interval = setInterval(() => {
          current = Math.min(current + step, target);
          el.textContent = current + (target === 98 ? '%' : target >= 10 ? '+' : '');
          if (current >= target) clearInterval(interval);
        }, 30);
        countObs.unobserve(el);
      }
    });
  }, { threshold: 0.5 });
  countEls.forEach(el => countObs.observe(el));

  /* ─── Contact modal ─── */
  function openModal() {
    document.getElementById('modal-overlay').classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function closeModal(e) {
    if (!e || e.target === document.getElementById('modal-overlay')) {
      document.getElementById('modal-overlay').classList.remove('open');
      document.body.style.overflow = '';
    }
  }
  function submitModal(e) {
    e.preventDefault();
    closeModal();
    showToast("Message sent! We'll reply within 24h. 🚀");
  }

  /* ─── Projects data ─── */
  const projects = {
    nexus: {
      label: 'Web Software', pill: 'pill-purple', year: '2024',
      title: 'Nexus Analytics',
      desc: 'A real-time analytics dashboard built for a European logistics company. Processing 50k+ events per day through WebSocket streaming with sub-100ms UI updates.',
      stack: ['React', 'Node.js', 'TimescaleDB', 'WebSockets', 'Docker'],
      laptopBg: 'linear-gradient(145deg,oklch(88% 0.11 220),oklch(85% 0.09 220))',
      phoneBg:  'linear-gradient(160deg,oklch(86% 0.09 220),oklch(82% 0.07 220))',
    },
    quanta: {
      label: 'Ecommerce', pill: 'pill-rose', year: '2024',
      title: 'Quanta Shop',
      desc: 'A comprehensive ecommerce platform for a fashion brand with custom checkout, inventory, and Stripe payment integration.',
      stack: ['Next.js', 'Stripe', 'PostgreSQL', 'Sanity CMS', 'Vercel'],
      laptopBg: 'linear-gradient(145deg,oklch(92% 0.06 5),oklch(88% 0.09 350))',
      phoneBg:  'linear-gradient(160deg,oklch(90% 0.07 5),oklch(86% 0.10 355))',
    },
    voidrunner: {
      label: 'Game', pill: 'pill-purple', year: '2025',
      title: 'Void Runner',
      desc: 'A browser-native space shooter powered by WebGL and a custom ECS architecture. Procedural level generation and full gamepad support.',
      stack: ['WebGL', 'TypeScript', 'Three.js', 'Node.js', 'SQLite'],
      laptopBg: 'linear-gradient(145deg,oklch(15% 0.10 295),oklch(20% 0.15 310))',
      phoneBg:  'linear-gradient(160deg,oklch(18% 0.12 300),oklch(14% 0.08 290))',
    },
  };

  const allProjects = [
    { id: 'nexus',      label: 'Web App',    year: '2024', color: 'purple', title: 'Nexus Analytics',   laptopBg: 'linear-gradient(145deg,oklch(88% 0.11 220),oklch(85% 0.09 220))', phoneBg: 'linear-gradient(160deg,oklch(86% 0.09 220),oklch(82% 0.07 220))' },
    { id: 'quanta',     label: 'Ecommerce',  year: '2024', color: 'rose',   title: 'Quanta Shop',       laptopBg: 'linear-gradient(145deg,oklch(92% 0.06 5),oklch(88% 0.09 350))',   phoneBg: 'linear-gradient(160deg,oklch(90% 0.07 5),oklch(86% 0.10 355))' },
    { id: 'voidrunner', label: 'Game',       year: '2025', color: 'purple', title: 'Void Runner',       laptopBg: 'linear-gradient(145deg,oklch(15% 0.10 295),oklch(20% 0.15 310))', phoneBg: 'linear-gradient(160deg,oklch(18% 0.12 300),oklch(14% 0.08 290))' },
    { id: 'prism',      label: 'API',        year: '2024', color: 'rose',   title: 'Prism API',         laptopBg: 'linear-gradient(145deg,oklch(90% 0.08 350),oklch(86% 0.12 5))',   phoneBg: 'linear-gradient(160deg,oklch(88% 0.09 5),oklch(84% 0.11 355))' },
    { id: 'terra',      label: 'Web App',    year: '2023', color: 'purple', title: 'Terra CMS',         laptopBg: 'linear-gradient(145deg,oklch(86% 0.10 280),oklch(82% 0.10 220))', phoneBg: 'linear-gradient(160deg,oklch(84% 0.11 285),oklch(80% 0.13 295))' },
    { id: 'blaze',      label: 'Game',       year: '2025', color: 'rose',   title: 'Blaze Kart',        laptopBg: 'linear-gradient(145deg,oklch(92% 0.08 20),oklch(88% 0.12 10))',   phoneBg: 'linear-gradient(160deg,oklch(90% 0.09 15),oklch(86% 0.11 5))' },
    { id: 'pulse',      label: 'Ecommerce',  year: '2024', color: 'purple', title: 'Pulse Market',      laptopBg: 'linear-gradient(145deg,oklch(87% 0.12 300),oklch(83% 0.14 310))', phoneBg: 'linear-gradient(160deg,oklch(85% 0.13 305),oklch(81% 0.12 295))' },
    { id: 'orbit',      label: 'Web App',    year: '2023', color: 'rose',   title: 'Orbit SaaS',        laptopBg: 'linear-gradient(145deg,oklch(93% 0.05 10),oklch(89% 0.08 5))',    phoneBg: 'linear-gradient(160deg,oklch(91% 0.06 10),oklch(87% 0.07 355))' },
    { id: 'nova',       label: 'API',        year: '2024', color: 'purple', title: 'Nova Auth SDK',     laptopBg: 'linear-gradient(145deg,oklch(89% 0.09 220),oklch(85% 0.13 300))', phoneBg: 'linear-gradient(160deg,oklch(87% 0.10 220),oklch(83% 0.11 285))' },
    { id: 'echo',       label: 'Game',       year: '2024', color: 'rose',   title: 'Echo Chamber',      laptopBg: 'linear-gradient(145deg,oklch(20% 0.08 270),oklch(16% 0.06 285))', phoneBg: 'linear-gradient(160deg,oklch(22% 0.09 275),oklch(18% 0.07 265))' },
    { id: 'forge',      label: 'Web App',    year: '2023', color: 'purple', title: 'Forge DevTools',    laptopBg: 'linear-gradient(145deg,oklch(85% 0.10 220),oklch(81% 0.10 220))', phoneBg: 'linear-gradient(160deg,oklch(83% 0.10 220),oklch(79% 0.09 220))' },
    { id: 'lux',        label: 'Ecommerce',  year: '2025', color: 'rose',   title: 'Lux Cosmetics',     laptopBg: 'linear-gradient(145deg,oklch(94% 0.04 350),oklch(90% 0.06 5))',   phoneBg: 'linear-gradient(160deg,oklch(92% 0.05 355),oklch(88% 0.07 5))' },
    { id: 'arc',        label: 'API',        year: '2024', color: 'purple', title: 'Arc Webhooks',      laptopBg: 'linear-gradient(145deg,oklch(88% 0.12 290),oklch(84% 0.14 300))', phoneBg: 'linear-gradient(160deg,oklch(86% 0.10 220),oklch(82% 0.12 285))' },
    { id: 'drift',      label: 'Game',       year: '2025', color: 'rose',   title: 'Drift Protocol',    laptopBg: 'linear-gradient(145deg,oklch(14% 0.12 310),oklch(10% 0.09 300))', phoneBg: 'linear-gradient(160deg,oklch(16% 0.13 315),oklch(12% 0.10 305))' },
    { id: 'kora',       label: 'Web App',    year: '2023', color: 'purple', title: 'Kora Finance',      laptopBg: 'linear-gradient(145deg,oklch(90% 0.08 220),oklch(86% 0.10 220))', phoneBg: 'linear-gradient(160deg,oklch(88% 0.10 290),oklch(84% 0.09 220))' },
    { id: 'sway',       label: 'Ecommerce',  year: '2024', color: 'rose',   title: 'Sway Apparel',      laptopBg: 'linear-gradient(145deg,oklch(92% 0.07 5),oklch(88% 0.10 15))',    phoneBg: 'linear-gradient(160deg,oklch(90% 0.08 10),oklch(86% 0.09 5))' },
    { id: 'mesh',       label: 'API',        year: '2025', color: 'purple', title: 'Mesh RPC',          laptopBg: 'linear-gradient(145deg,oklch(87% 0.10 220),oklch(83% 0.10 220))', phoneBg: 'linear-gradient(160deg,oklch(85% 0.10 220),oklch(81% 0.09 220))' },
    { id: 'flare',      label: 'Game',       year: '2024', color: 'rose',   title: 'Solar Flare',       laptopBg: 'linear-gradient(145deg,oklch(93% 0.06 30),oklch(89% 0.09 20))',   phoneBg: 'linear-gradient(160deg,oklch(91% 0.07 25),oklch(87% 0.08 15))' },
    { id: 'coda',       label: 'Web App',    year: '2023', color: 'purple', title: 'Coda Notes',        laptopBg: 'linear-gradient(145deg,oklch(89% 0.09 220),oklch(85% 0.13 298))', phoneBg: 'linear-gradient(160deg,oklch(87% 0.12 290),oklch(83% 0.12 282))' },
    { id: 'wren',       label: 'Ecommerce',  year: '2025', color: 'rose',   title: 'Wren Plants',       laptopBg: 'linear-gradient(145deg,oklch(90% 0.09 140),oklch(86% 0.12 150))', phoneBg: 'linear-gradient(160deg,oklch(88% 0.10 145),oklch(84% 0.11 135))' },
    { id: 'pix',        label: 'Game',       year: '2025', color: 'purple', title: 'Pixel Dungeon X',   laptopBg: 'linear-gradient(145deg,oklch(16% 0.09 300),oklch(12% 0.07 290))', phoneBg: 'linear-gradient(160deg,oklch(18% 0.10 305),oklch(14% 0.08 295))' },
  ];

  /* ─── Build project grid ─── */
  const grid = document.getElementById('proj-grid');
  allProjects.forEach((p, i) => {
    const sq = document.createElement('div');
    sq.className = 'proj-square reveal';
    sq.style.transitionDelay = (i % 4) * 0.07 + 's';
    sq.style.minHeight = '90px';
    sq.style.background = i % 2 === 0 ? 'rgba(246,245,250,0.9)' : 'rgba(250,248,252,0.9)';
    sq.innerHTML = `<div style="padding:18px 16px;font-size:0.875rem;font-weight:500;color:#111;line-height:1.3;">${p.title}</div>`;
    sq.addEventListener('mouseenter', () => activateProject(p, sq));
    sq.addEventListener('click', () => openProjectModal(p.id));
    grid.appendChild(sq);
  });

  document.querySelectorAll('.proj-square').forEach(el => observer.observe(el));

  /* ─── Activate project on hover ─── */
  let activeSquare = null;
  function activateProject(p, sq) {
    if (activeSquare) activeSquare.classList.remove('active');
    sq.classList.add('active');
    activeSquare = sq;
    document.getElementById('active-proj-label').textContent = p.title;

    const laptopScreen = document.getElementById('laptop-screen');
    laptopScreen.style.opacity = '0';
    setTimeout(() => {
      laptopScreen.innerHTML = `<div class="w-full h-full" style="background:${p.laptopBg};">
        <svg viewBox="0 0 320 200" class="w-full h-full" opacity="0.75">
          <rect width="320" height="200" fill="rgba(0,0,0,0.05)"/>
          <rect x="20" y="20" width="280" height="155" rx="5" fill="rgba(255,255,255,0.08)" stroke="rgba(255,255,255,0.18)" stroke-width="0.8"/>
          <rect x="30" y="30" width="70" height="6" rx="3" fill="rgba(255,255,255,0.35)"/>
          <rect x="30" y="43" width="45" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
          <rect x="30" y="58" width="78" height="55" rx="4" fill="rgba(255,255,255,0.08)" stroke="rgba(255,255,255,0.2)" stroke-width="0.8"/>
          <rect x="116" y="58" width="78" height="55" rx="4" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.15)" stroke-width="0.8"/>
          <rect x="202" y="58" width="86" height="55" rx="4" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)" stroke-width="0.8"/>
          <rect x="30" y="124" width="258" height="28" rx="3" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.12)" stroke-width="0.8"/>
          <text x="160" y="90" text-anchor="middle" fill="rgba(255,255,255,0.5)" font-size="9" font-family="Inter,sans-serif">${p.title}</text>
        </svg>
      </div>`;
      laptopScreen.style.transition = 'opacity 0.45s ease';
      laptopScreen.style.opacity = '1';
    }, 200);

    const phoneScreen = document.getElementById('phone-screen');
    phoneScreen.style.opacity = '0';
    setTimeout(() => {
      phoneScreen.innerHTML = `<div class="w-full h-full" style="background:${p.phoneBg};">
        <svg viewBox="0 0 130 280" class="w-full h-full" opacity="0.9">
          <rect width="130" height="280" fill="rgba(0,0,0,0.06)"/>
          <rect x="10" y="35" width="110" height="8" rx="4" fill="rgba(255,255,255,0.25)"/>
          <rect x="20" y="50" width="90" height="5" rx="2.5" fill="rgba(255,255,255,0.12)"/>
          <rect x="10" y="70" width="110" height="75" rx="8" fill="rgba(255,255,255,0.08)" stroke="rgba(255,255,255,0.18)" stroke-width="0.8"/>
          <text x="65" y="112" text-anchor="middle" fill="rgba(255,255,255,0.45)" font-size="8" font-family="Inter,sans-serif">${p.title}</text>
          <rect x="10" y="156" width="52" height="52" rx="7" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.15)" stroke-width="0.8"/>
          <rect x="68" y="156" width="52" height="52" rx="7" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.12)" stroke-width="0.8"/>
          <rect x="10" y="218" width="110" height="32" rx="7" fill="rgba(255,255,255,0.15)" stroke="rgba(255,255,255,0.25)" stroke-width="0.8"/>
          <rect x="35" y="230" width="60" height="4" rx="2" fill="rgba(255,255,255,0.5)"/>
        </svg>
      </div>`;
      phoneScreen.style.transition = 'opacity 0.45s ease';
      phoneScreen.style.opacity = '1';
    }, 200);
  }

  /* ─── Project modal ─── */
  function openProjectModal(id) {
    const p = projects[id] || allProjects.find(x => x.id === id);
    if (!p) return;
    const isRose = (p.pill === 'pill-rose') || (p.color === 'rose');
    document.getElementById('proj-modal-content').innerHTML = `
      <div class="mb-2 flex items-center gap-2">
        <span class="pill ${isRose ? 'pill-rose' : 'pill-purple'}">${p.label}</span>
        <span class="text-xs text-neutral-400">${p.year}</span>
      </div>
      <h3 class="font-grotesk text-2xl font-medium mb-3">${p.title}</h3>
      <p class="text-sm text-neutral-500 font-light leading-relaxed mb-5">${p.desc || ''}</p>
      ${p.stack ? `<div class="mb-6"><div class="text-xs text-neutral-400 uppercase tracking-widest mb-2">Stack</div><div class="flex flex-wrap gap-2">${p.stack.map(s => `<span class="text-xs px-3 py-1 rounded-full bg-neutral-100 text-neutral-500">${s}</span>`).join('')}</div></div>` : ''}
      <button onclick="closeProjModal(); openModal();" class="btn-primary w-full py-3 rounded-xl text-sm font-medium">Build something similar →</button>
    `;
    const overlay = document.getElementById('proj-modal-overlay');
    const box = document.getElementById('proj-modal-box');
    overlay.style.opacity = '1';
    overlay.style.pointerEvents = 'all';
    box.style.transform = 'translateY(0) scale(1)';
    document.body.style.overflow = 'hidden';
  }

  function closeProjModal(e) {
    if (e && e.target !== document.getElementById('proj-modal-overlay')) return;
    const overlay = document.getElementById('proj-modal-overlay');
    const box = document.getElementById('proj-modal-box');
    overlay.style.opacity = '0';
    overlay.style.pointerEvents = 'none';
    box.style.transform = 'translateY(24px) scale(0.97)';
    document.body.style.overflow = '';
  }
  document.getElementById('proj-modal-overlay').addEventListener('click', closeProjModal);

  /* ─── Contact form ─── */
  function submitForm(e) {
    e.preventDefault();
    document.querySelector('#contact form').style.display = 'none';
    document.getElementById('form-success').classList.remove('hidden');
  }

  /* ─── Tag toggle ─── */
  function toggleTag(el) {
    el.style.opacity = el.style.opacity === '0.45' ? '1' : '0.45';
  }

  /* ─── Toast ─── */
  function showToast(msg) {
    const t = document.createElement('div');
    t.className = 'glass fixed bottom-8 left-1/2 -translate-x-1/2 z-[2000] px-6 py-3 rounded-full text-sm font-medium shadow-xl';
    t.style.background = 'rgba(255,255,255,0.92)';
    t.textContent = msg;
    document.body.appendChild(t);
    setTimeout(() => { t.style.opacity = '0'; t.style.transition = 'opacity 0.4s'; }, 2400);
    setTimeout(() => t.remove(), 2900);
  }

  /* ─── Keyboard close ─── */
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      closeModal();
      closeProjModal();
      document.body.style.overflow = '';
    }
  });
</script>

</div>
