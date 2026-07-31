export default function Home() {
    return {
        active: 0,
        loaded: false,
        scrolled: false,
        revealed: [],
        countersStarted: false,
        servicesDropdown: false,
        openSidebar: false,

        slides: [
            '/images/west-h-img1.png',
            '/images/west-h-img2.png',
            '/images/west-h-img3.png',
            '/images/west-h-img4.png',
            '/images/west-h-img5.png',
        ],

        stats: {
            experience: 0,
            coverage: 0,
            support: 0,
        },





        init() {


            this.$watch('openSidebar', value => {
                document.body.style.overflow = value ? 'hidden' : '';
            });

            this.revealed = [];
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 50;
            });






            setInterval(() => {
                this.active = (this.active + 1) % this.slides.length;
            }, 5000);

            setTimeout(() => {
                this.loaded = true;
            }, 300);

            setTimeout(() => {
                this.observeReveal();
            }, 150);
        },

        observeReveal() {
            const elements = this.$el.querySelectorAll('[data-reveal]');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const index = Number(entry.target.dataset.reveal);
                        this.revealed[index] = true;

                        if (index === 30 && !this.countersStarted) {
                            this.countersStarted = true;
                            this.startCounters();
                        }

                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
            });

            elements.forEach((el) => observer.observe(el));
        },

        isRevealed(index) {
            return !!this.revealed[index];
        },

        animateValue(key, end, duration = 1200) {
            const start = 0;
            const startTime = performance.now();

            const update = (currentTime) => {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                this.stats[key] = Math.floor(start + (end - start) * progress);

                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    this.stats[key] = end;
                }
            };

            requestAnimationFrame(update);
        },

        startCounters() {
            this.animateValue('experience', 10, 1000);
            this.animateValue('coverage', 100, 1200);
            this.animateValue('support', 24, 1000);
        },





    };

}

