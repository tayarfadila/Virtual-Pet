const hunger = document.getElementById('hunger');
const happiness = document.getElementById('happiness');

function getRandom(start, end) {
    return Math.floor(Math.random() * (end - start + 1 ) + start );
}

function updateInfos(){
    fetch('/info')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); 
        })
        .then(data => {
            hunger.innerHTML = data.hunger
            happiness.innerHTML = data.happiness
        })
}

function getBored(){
    const randomDelay = getRandom(5000, 10000);

    setTimeout(() => {
        fetch('/bored', {'method' : 'post'});

        updateInfos();
        getBored();
    }, randomDelay)

}

function getHunger(){
    const randomDelay = getRandom(5000, 10000);

    setTimeout(() => {
        fetch('/hunger', {'method' : 'post'});

        updateInfos();
        getHunger();
    }, randomDelay)

}

getBored();
getHunger();