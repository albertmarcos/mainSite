<div>
    @livewire('hero-section')
    @livewire('about-section')
    @livewire('arch-section')
    @livewire('steps-section')
    @livewire('stats-section')
    @livewire('download-section')
</div>
<script>
    ScrollReveal().reveal('.code-reveal', {
        delay: 100,
        distance: '100px',
        duration: 3000,
        interval: 0,
        opacity: 1,
        origin: 'bottom',
        reset: true,
    });
    ScrollReveal().reveal('.card-about-reveal', {
        delay: 100,
        distance: '500px',
        duration: 2500,
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        interval: 0,
        opacity: 1,
        origin: 'left',
    }
    );
    ScrollReveal().reveal('.title-section-reveal');
    ScrollReveal().reveal('.title-arch-reveal',{
        delay: 400,
        distance: '300px',
        duration: 1500,
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        interval: 0,
        opacity: 0,
        origin: 'bottom',
        reset: true,
    }
    );
    ScrollReveal().reveal('.icon-social-reveal',{
        delay: 800,
        distance: '300px',
        duration: 1500,
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        interval: 0,
        opacity: 0,
        origin: 'left',
        reset: true,
    });
    ScrollReveal().reveal('.text-arch-reveal',{
        delay: 800,
        distance: '200px',
        duration: 1500,
        interval: 0,
        opacity: 0,
        origin: 'bottom',
        reset: true,
    }
    )
    ScrollReveal().reveal('.img-arch-reveal', {
        delay: 500,
        distance: '300px',
        duration: 1500,
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        interval: 0,
        opacity: 0,
        origin: 'right',
        scale: 1,
        reset: true,
    });
</script>

