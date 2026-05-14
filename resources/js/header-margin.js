function adjustMainMargin() {
    const header = document.getElementById('header');
    const main = document.querySelector('main');

    if (header && main) {
        const headerHeight = header.offsetHeight;
        main.style.marginTop = headerHeight + 'px';
    }
}

// Запускаем при загрузке DOM
document.addEventListener('DOMContentLoaded', adjustMainMargin);

// Запускаем при изменении размера окна
window.addEventListener('resize', adjustMainMargin);