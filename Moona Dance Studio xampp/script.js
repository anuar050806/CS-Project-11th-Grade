const wrapper = document.querySelector('.wrapper-registration-block');
const login_link = document.querySelector('.login-link');
const registration_link = document.querySelector('.registration-link');
const btn_popup = document.querySelector('.btnLogin-popup');
//const icon_close = document.querySelector('.icon-close');

registration_link.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

login_link.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btn_popup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

/*icon_close.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});*/
