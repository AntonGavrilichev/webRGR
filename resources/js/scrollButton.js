const scrollToTopButton = document.getElementById('scrollToTopButton');
// Показать кнопку, когда пользователь прокручивает страницу вниз
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        scrollToTopButton.style.display = 'block';
    } else {
        scrollToTopButton.style.display = 'none';
    }
});
// Плавный скроллинг страницы к началу при клике на кнопку
scrollToTopButton.addEventListener('click', () => {
    window.scroll({
        top: 0,
        behavior: 'smooth'
    });
});
