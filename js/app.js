function pageTransition() {
    var timeline = gsap.timeline();
    timeline.to(".pageTransition", {
        duration: 0.5,
        height: "100%",
        top: "0%",
    });

    timeline.to(".pageTransition", {
        duration: 0.5,
        height: "100%",
        top: "100%",
        delay: 0.2,
    });

    timeline.set(".pageTransition", {
        top: "-100%",
    });
}

function contentAnimation() {
    var timeline = gsap.timeline();
    timeline.from(".heading, .subheading, .crawlerContainer, .north, .south, .nav, .stationName", {
        duration: 0.5,
        y: 30,
        opacity: 0,
        stagger: {
            amount: 0.4,
        },
        delay: 0.4,
    });
}

function delay(n) {
    n = n || 2000;
    return new Promise(done => {
        setTimeout(() => {
            done();
        }, n);
    });
}

barba.init({
    sync: true,
    prefetchIgnore: true,
    transitions: [{
        async leave(data) {
            const done = this.async();

            pageTransition();
            await delay(500);
            done();
        },

        async enter(data) {
            contentAnimation();
        },

        async once(data) {
            contentAnimation();
        },
    }]
})