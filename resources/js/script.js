let btn = document.querySelector('button');
    let output = document.querySelector('output');

    function getRandomNumber(min, max)
    {
        let randomNum = Math.random() * (max - min) + min;
        return Math.round(randomNum);

    }

    btn.addEventListener('click', () => {
      output.innerText =getRandomNumber(5,10);
    })