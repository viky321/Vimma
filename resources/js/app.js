import './bootstrap';

document.addEventListener("DOMContentLoaded", function() {
    
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {

    const status = document.querySelector('meta[name="flash-status"]');

    if (status) {
        alert(status.getAttribute('content'));
    }
});
