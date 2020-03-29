var btn = document.getElementById('btn-click');
var btn2 = document.getElementById('btn-click2');

if(btn && btn2){
    btn.onclick = function() {
        var morphing = anime({
            targets: '.polymorph',
            points: [
                { value: '216.46,107.78 0,107.78 0,0 21.45,0 69.18,74.92'},
                { value: '216.46,107.78 0,107.78 0,0 0,0 35.05,88.52'}
            ],
            easing: 'easeOutQuad',
            duration: 1200,
            loop: false
        });

        anime({
            targets: '.blip',
            opacity: 1,
            duration: 1500,
            translateY: 150
        });

        anime({
            targets: '#btn-click',
            opacity: 0,
            duration: 500
        });

        var promise = morphing.finished.then(() => {

            btn2.onclick = function() {
                var morphing = anime({
                    targets: '.polymorph',
                    points: [
                        { value: '216.46,107.78 0,107.78 0,0 21.45,0 69.18,74.92'},
                        { value: '216.46,107.78 0,107.78 0,0 21.45,0 216.46,0'}
                    ],
                    easing: 'easeOutQuad',
                    duration: 1200,
                    loop: false
                });

                anime({
                    targets: '.blip',
                    opacity: 0,
                    duration: 1500,
                    translateY: -800
                });

                anime({
                    targets: '#btn-click',
                    opacity: 1,
                    duration: 500
                });
            };
        });
    }
};