const albums = document.querySelectorAll(".albums");

function handleIntersection(entries, observer) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("animate");
            observer.unobserve(entry.target);
        }
    });
}

const observer = new IntersectionObserver(handleIntersection, {
    root: null,
    rootMargin: "0px",
    threshold: 0.2, // Pas dit aan afhankelijk van wanneer je wilt dat de animatie wordt geactiveerd
});

albums.forEach((album, index) => {
    album.classList.remove("animate");
    let delay = 0;

    if (index % 1 === 1) {
        // Als het album een oneven index heeft, laat het van rechts komen
        delay = 500 * (Math.floor(index / 2) + 1);
        album.style.marginRight = "0"; // Voeg hier eventueel andere rechts gerelateerde stijlen toe
    } else {
        // Als het album een even index heeft, laat het van links komen
        delay = 500 * Math.floor(index / 2);
        album.style.marginLeft = "0"; // Voeg hier eventueel andere links gerelateerde stijlen toe
    }

    setTimeout(() => {
        observer.observe(album);
    }, delay);
});





