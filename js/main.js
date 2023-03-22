ScrollReveal({
    origin: 'top',
    distance: '1000px',
    duration: 600
}).reveal(`
#navBar
`)

ScrollReveal({
    origin: 'left',
    distance: '1000px',
    duration: 1200
}).reveal(`
#leftAnimation
`)

ScrollReveal({
    origin: 'right',
    distance: '1000px',
    duration: 1200
}).reveal(`
#form,
#rightAnimation
`)

ScrollReveal({
    origin: 'bottom',
    distance: '1000px',
    duration: 800
}).reveal(`
.animateCardShortBottom
`)