
let showImage = () => {
    let cards = document.querySelectorAll('.card_comment');
    cards.forEach( card => {
        card.style.display = 'block';
    })
}
let hideImage = () => {
    let cards = document.querySelectorAll('.card_comment');
    cards.forEach( card => {
        card.style.display = 'none';
    })
}

let btnShow = document.querySelector('#show_comment');
let btnHide = document.querySelector('#hide_comment');

btnHide.addEventListener('click', hideImage);
btnShow.addEventListener('click', showImage);