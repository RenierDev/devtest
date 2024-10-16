document.addEventListener('DOMContentLoaded', () => {
    const sections = ['section1', 'section2', 'section3'];

    sections.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.addEventListener('mouseover', () => {
                element.style.color = 'gray';
            });

            element.addEventListener('mouseout', () => {
                element.style.color = '';
            });
        }
    });
});