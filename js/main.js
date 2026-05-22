const checkbox = document.querySelectorAll('.menuPage');

checkbox.forEach((item) => {
  item.addEventListener('click', () => {
    window.location.href = '/menupage/';
  });
});

//------------------------------------------------*/

const humberger = document.querySelector('.humberger');
const menuA = document.querySelectorAll('.menu a');
const menuB = document.querySelector('.menu button');

humberger.addEventListener('click', () => {
  menuA.forEach((element) => {
    element.classList.toggle('active');
  });
  menuB.classList.toggle('active');
  humberger.classList.toggle('active');
});

menuB.addEventListener('click', () => {
  menuA.forEach((element) => {
    element.classList.toggle('active');
  });
  menuB.classList.toggle('active');
  humberger.classList.toggle('active');
});

/*------------------------------------------*/

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.1,
  },
);

const targets = document.querySelectorAll('img');

targets.forEach((target) => {
  observer.observe(target);
});

/*-----------------------*/

const observer2 = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.1,
  },
);

const targets2 = document.querySelectorAll('.fadeIn');
targets2.forEach((target) => {
  observer2.observe(target);
});

/*------------------------------------*/
const slideContents = document.querySelector('.slideContents');

let count = 0;
let slideLength = 3;

function topSlide() {
  slideContents.classList.remove(`slide${(count % slideLength) + 1}`);
  count++;
  slideContents.classList.add(`slide${(count % slideLength) + 1}`);
}

setInterval(topSlide, 3000);

/*--------------------------------*/

const observer3 = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.1,
  },
);

const slideTarget = document.querySelectorAll('.slideContents img');

slideTarget.forEach((target) => {
  observer3.observe(target);
});
