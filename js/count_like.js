
let number =0;
let count_like = () => {
    number=1;
    return number;
}

let btn_like = document.querySelector('#click_like');

btn_like.addEventListener('click', count_like);