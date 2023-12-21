let buttonModal = document.getElementById('buttonDeploy');
let buttonCloseModal = document.getElementById('closeModal');
let modal = document.getElementById('modal');
let phraseModal = document.getElementById('phraseModal');

function displayModal() {
    modal.classList.remove('undisplayed');
    phraseModal.classList.add('undisplayed');
}

function hideModal() {
    modal.classList.add('undisplayed');
    phraseModal.classList.remove('undisplayed');
}

buttonModal.addEventListener('click', displayModal);
buttonCloseModal.addEventListener('click', hideModal);

////////////CODE ETOILES

let stars = document.querySelectorAll('.la-star');
let input = document.querySelector('#note');

for(star of stars) {
    star.addEventListener('mouseover', function() {
        this.style.color = 'black';

        let previousStar = this.previousElementSibling;

        while(previousStar) {
            previousStar.style.color = 'black';

            previousStar = previousStar.previousElementSibling;
    }
    });

    star.addEventListener('mouseleave', function() {
        resetStar(input.value);
    });

    star.addEventListener('click', function() {
        input.value = this.dataset.value;
    });
}

function resetStar(nombre = 0) {
    for(star of stars) {
        if(star.dataset.value > nombre) {
            star.style.color = 'white';
        } else {
            star.style.color = 'black';
        }
    }
}