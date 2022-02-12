document.addEventListener('DOMContentLoaded', function () {
    const helloEl = document.getElementById('js-hello');
    const devEl = document.getElementById('js-developer');

    animatedType(helloEl, 'Hello, my name is Artem.');

    function animatedType(el, text) {
        let count = 0;
        let result = '';

        function typeLine() {
            let interval = setTimeout(
                () => {
                    result += text[count]
                    el.innerText = result + '|';

                    count++;
                    if (count >= text.length) {
                        count = 0;
                        clearTimeout(interval);
                        el.innerText = result;
                        if (!devEl.innerText.length) {
                            animatedType(devEl, 'I\'M A DEVELOPER');
                        }
                        return;
                    }
                    typeLine();
                }, getRandomInt(getRandomInt(700)))
        }

        typeLine();

        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }
    }
})