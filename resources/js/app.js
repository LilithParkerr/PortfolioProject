import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('projects-carousel');
    const cards = document.querySelectorAll('.project-card');
    const filters = document.querySelectorAll('.project-filter');
    const previousButton = document.getElementById('projects-prev');
    const nextButton = document.getElementById('projects-next');

    if (!carousel) {
        return;
    }

    // Category filters
    filters.forEach((filter) => {
        filter.addEventListener('click', () => {
            const category = filter.dataset.category;

            // Update active button
            filters.forEach((button) => {
                button.classList.remove('bg-pink-300', 'text-black');
                button.classList.add(
                    'border',
                    'border-purple-800',
                    'text-gray-300'
                );
            });

            filter.classList.remove(
                'border',
                'border-purple-800',
                'text-gray-300'
            );

            filter.classList.add('bg-pink-300', 'text-black');

            // Show/hide projects
            cards.forEach((card) => {
                if (
                    category === 'all' ||
                    card.dataset.category === category
                ) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            // Return carousel to the beginning
            carousel.scrollTo({
                left: 0,
                behavior: 'smooth'
            });
        });
    });

    // Previous arrow
    previousButton?.addEventListener('click', () => {
        carousel.scrollBy({
            left: -400,
            behavior: 'smooth'
        });
    });

    // Next arrow
    nextButton?.addEventListener('click', () => {
        carousel.scrollBy({
            left: 400,
            behavior: 'smooth'
        });
    });

    window.addEventListener('load', () => {
    if (window.location.hash) {
        history.replaceState(
            null,
            '',
            window.location.pathname + window.location.search
        );

        window.scrollTo({
            top: 0,
            behavior: 'instant'
        });
    }
});
});