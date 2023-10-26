// document.querySelector('#counter').style.background = 'black';
const count = document.getElementsByClassName('count');
let inc = [];
const increment = () => {
    for (let i = 0; i < count.length; i++) {
        inc.push(i);
        if (inc[i] != count[i].getAttribute('max-data')) {
            inc[i]++;
        }
        count[i].innerHTML = inc[i] + "+";
    }
}

const counter = document.getElementById('counter');
window.onscroll = function () {
    var timer = setInterval(() => {
        var topElem = counter.offsetTop;
        var btmElem = counter.offsetTop + counter.clientHeight;
        var topScreen = window.pageYOffset;
        var btmScreen = window.pageYOffset + window.innerHeight;
        if (btmScreen > topElem && topScreen < btmElem) {
            increment();
        }
        else {
            clearInterval(timer);
            for (let i = 0; i < count.length; i++) {
                count[i].innerHTML = 1;
                inc = [];
            }
        }
    }, 50);
}
