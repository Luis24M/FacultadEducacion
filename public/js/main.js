document.querySelectorAll('.btn-nav').forEach(tab => {
    tab.addEventListener('click', function() {
        const target = this.getAttribute('data-target');

        document.querySelectorAll('.btn-nav').forEach(t => {
            t.classList.remove('active');
        });
        this.classList.add('active');

        document.querySelectorAll('.contenido').forEach(content => {
            content.classList.remove('active');
            content.style.display = 'none';
        });

        const activeContent = document.getElementById(target);
        activeContent.style.display = 'block';
        setTimeout(() => {
            activeContent.classList.add('active');
        }, 10);
    });
});



function contador(elemento, objetivo, duracion) {
    let inicio = 0;
    const incremento = objetivo / duracion * 100;
    const intervalo = setInterval(() => {
        inicio += incremento;
        if (inicio >= objetivo) {
            elemento.textContent = objetivo;
            clearInterval(intervalo);
        } else {
            elemento.textContent = Math.floor(inicio);
        }
    }, 50);
}
document.addEventListener('DOMContentLoaded', () => {
    const contadores = document.querySelectorAll('.contenedor-numero .numero');
    contadores.forEach(span => {
        const objetivo = parseInt(span.getAttribute('data-objetivo'), 10);
        const duracion = 5000;
        contador(span, objetivo, duracion);
    });
});