<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.front', ['title' => 'front.home.title'])]
class extends Component {

}; ?>

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/three.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vanta.dots.js') }}"></script>
@endpush
<script>
const landing = () => {
    return {
        letterIndex: 0,
        letterSwitchTransitionMultiplier: 3,
        switchLandingText: function() {
            const currentLandingText = this.$refs.mainLandingText.querySelector('[data-index="' + this.letterIndex + '"]');

            let nextIndex = this.letterIndex + 1;
            if(nextIndex >= this.$refs.mainLandingText.children.length) {
                nextIndex = 0;
            }

            const nextLandingText = this.$refs.mainLandingText.querySelector('[data-index="' + nextIndex + '"]');

            currentLandingText.querySelectorAll('span').forEach((el, index) => {
                el.classList.add('-translate-y-[20px]');
                el.classList.add('opacity-0');
                el.style.transitionDelay = `${index * 0.03 * this.letterSwitchTransitionMultiplier}s`;
                setTimeout(() => {
                    el.classList.remove('-translate-y-[20px]');
                    el.classList.add('translate-y-[20px]');
                }, (index * 0.03 * this.letterSwitchTransitionMultiplier + 0.5) * 1000);
            });

            nextLandingText.querySelectorAll('span').forEach((el, index) => {
                el.classList.remove('translate-y-[20px]');
                el.classList.remove('opacity-0');
                el.style.transitionDelay = `${index * 0.03 * this.letterSwitchTransitionMultiplier}s`;
            });

            this.letterIndex = nextIndex;
        },
        init: function() {
            VANTA.DOTS({
                el: "#landing",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: '#000000',
                color2: '#000000',
                backgroundColor: '#ffffff',
                size: 6.40,
                spacing: 56.00,
                showLines: false
            });

            document.getElementById('landing').classList.add('opacity-70');

            this.$refs.mainLandingText.querySelectorAll('div').forEach((el, index) => {
                const letterArray = el.innerText.split('');
                el.innerHTML = '';
                el.dataset.index = index;
                letterArray.forEach((letter, letterIndex) => {
                    const span = document.createElement('span');
                    span.innerText = letter;
                    span.classList.add('inline-block', 'opacity-0', 'transform', 'translate-y-[20px]', 'transition-all', 'duration-500');

                    if(index == 0) {
                        span.classList.remove('translate-y-[20px]')
                        span.classList.remove('opacity-0')
                    }

                    span.style.transitionDelay = `${(index * 0.5) + (letterIndex * 0.05)}s`;
                    el.appendChild(span);

                });
            });

            this.$refs.mainLandingText.classList.add('opacity-100');
            this.$refs.mainLandingText.classList.remove('translate-y-[10px]');

            setInterval(() => {
                this.switchLandingText();
            }, 1000 * this.letterSwitchTransitionMultiplier);
        }
    };
};
</script>

<div x-data="landing()" class="flex items-center justify-center w-screen h-screen" >
    <div class="absolute top-0 left-0 z-0 w-full h-full transition-opacity opacity-0 duration-3000 backdrop-blur-md" id="landing"></div>

    <div class="z-10">
        <h1 class="text-[140px] font-bold text-center leading-[100px] mb-20">
            <div class="relative block opacity-0 transform translate-y-[10px] transition-all duration-1000" x-ref="mainLandingText">
                <div class="text-primary text-nowrap">enhance</div>
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 text-emerald-600 top-1/2 left-1/2 text-nowrap">improve</div>
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 text-rose-600 top-1/2 left-1/2 text-nowrap">boost</div>
            </div>
            <div>your business</div>
        </h1>

        <h2 class="text-[30px] font-thin text-center bg-white rounded-full py-2 px-10">we build software that improve your business workflow</h2>

        <div class="text-center">
            <a href="#" class="inline-block px-4 py-2 text-white rounded-full bg-primary">call to action</a>
        </div>
    </div>
</div>

