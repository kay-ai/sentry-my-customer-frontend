//add event listener for button click 
// let search = document.querySelector('.faq-top__btn').addEventListener('click', showFilterResults);
let userText = document.querySelector('#search-faq')
let faqCard = document.querySelectorAll('.card h2')

//add input event listener
userText.addEventListener('keyup', showFilterResults)

function showFilterResults(e) {
  const faqItem = faqCard;
  const filterText = e.target.value.toLowerCase();

  //console.log(faqItem);
  // console.log(filterText);
  //console.log(e.target.value)

  faqItem.forEach(function (item) {
    if (item.innerText.toLowerCase().indexOf(filterText) !== -1) {
      item.parentElement.parentElement.parentElement.classList.remove('dissapear');
      item.parentElement.parentElement.parentElement.classList.add('appear');
    } else {
      item.parentElement.parentElement.parentElement.classList.remove('appear');
      item.parentElement.parentElement.parentElement.classList.add('dissapear');
    };
  });

  let visibles = document.querySelectorAll('.appear')

  if (visibles.length == 0) {
    document.querySelector('#faq__accordion').classList.add('dissapear');
    document.querySelector('.nothing-box').style.display = 'flex'
  } else {
    document.querySelector('#faq__accordion').classList.remove('dissapear');
    document.querySelector('.nothing-box').style.display = 'none'
  }
  

};