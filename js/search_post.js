function search_post(){
    let textSearch = search_post_input.value;
    let p = document.querySelectorAll('p');
    p.forEach(item => {
      let search_item = item.firstElementChild.textContent.toLocaleLowerCase();
      if ( search_item.indexOf(textSearch) === -1){
        item.style.display = 'none';
      }
    })
  }
//   to run search post
let search_post_input = document
.getElementById("search_post")
.querySelector('input');
search_post_input.addEventListener('keyup',search_post);