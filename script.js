/* open - close menu */
const menuOpenIcon = document.getElementById('menu-open');
const menuCloseIcon = document.getElementById('menu-close');
const menu = document.getElementById('menu');
const headerContent = document.getElementById('header-content');

menuOpenIcon.addEventListener('click', () => {
  menu.style.marginLeft = '0';
  headerContent.style.marginLeft = '11rem';
  menuOpenIcon.style.display = 'none';
});
menuCloseIcon.addEventListener('click', () => {
  menu.style.marginLeft = '-15rem';
  headerContent.style.marginLeft = '0';
  menuOpenIcon.style.display = 'block';
});

/* open - close tabs */
const plusBtn = document.querySelectorAll('.baska-info .open-button');
const minusBtn = document.querySelectorAll('.baska-info .close-button');

minusBtn.forEach(minus => minus.addEventListener('click', () => {
  const article = minus.parentNode;
  const text = article.querySelector('.info-text');
  const open = article.querySelector('.open-button');
  const close = article.querySelector('.close-button');
    text.style.display = 'none';
    close.style.display = 'none';
    open.style.display = 'inline-block';
  }));

plusBtn.forEach(plus => plus.addEventListener('click', () => {
  const article = plus.parentNode;
  const text = article.querySelector('.info-text');
  const open = article.querySelector('.open-button');
  const close = article.querySelector('.close-button');
    text.style.display = 'block';   
    close.style.display = 'inline-block';
    open.style.display = 'none';
  }));

/* gallery */
const topImg = document.querySelector('#top-img');
const galleryImg = document.querySelectorAll('.gallery-img img');
const studioKitchen = document.querySelector('.studio-kitchen');  // studio flipped img
const opacity = 0.5;

galleryImg[0].style.opacity = opacity;

galleryImg.forEach(img => img.addEventListener('click', imgClick));

function imgClick(e) {
  galleryImg.forEach(img => (img.style.opacity = 1));  // reset opacity
  topImg.src = e.target.src;  // top img source
  topImg.classList.add('fade-in');  // add class
  setTimeout(() => topImg.classList.remove('fade-in'), 700);  // remove class
  e.target.style.opacity = opacity;  // set opacity
  if(e.target.src === studioKitchen.src) {
    topImg.classList.add('studio-kitchen'); 
  } else {
    topImg.classList.remove('studio-kitchen'); 
  }
}

/* form validation */
function formValidation() {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const message = document.getElementById('message').value;
  const captcha = document.getElementById('captcha').value;
  const formMsg = document.getElementById('error-msg');

  if(name == '' || email == '' || phone == '' || message == '' || captcha == '') {
    formMsg.innerHTML = 'Please fill out all the fields';
    return false;
  } else if(!/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/.test(email)) {
    formMsg.innerHTML = 'Invalid email format';
    return  false;
  } else if(!/^[0-9- +]*$/.test(phone)) {
    formMsg.innerHTML = 'Invalid phone format';
    return false;
  } else if(!/13/.test(captcha)) {
    formMsg.innerHTML = `No, 6 + 7 is not ${captcha}`;
    return false;
  }
}