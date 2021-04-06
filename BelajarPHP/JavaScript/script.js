// DOM SELECTION
// document.getElementById()-> element

// get element
const judul = document.getElementById('judul');

// set style color to red
judul.style.color = 'red';
//  set  style backgroundColor to #ccc
judul.style.backgroundColor = '#ccc';
// set innerHTML
judul.innerHTML ='Belajar DOM';

const p = document.getElementsByTagName('p');

p[0].style.backgroundColor = 'lightblue';
p[1].style.backgroundColor = 'lightblue';
p[2].style.backgroundColor = 'yellow';
p[3].style.backgroundColor = 'green';

for (let i= 0; i < p.length; i++){
    p[1].style.backgroundColor = 'lightblue';
}
const p1 = document.getElementsByClassName('p1');
p1[0].innerHTML = 'ini diubah jadi javascript';

const p4 = document.querySelector('#b p');
p4.style.color = 'blue';
p4.style.fontsize = '30px';

// const li2 = document.querySelector('section#b ul li:nth-child(2)');
// li2.style.backgroundColor = 'orange';

// const p = document.querySelector('p');
// p.innerHTML = 'ini diubah jadi javascript';

// const p = document.querySelectorAll('p');
// p[2].style.backgroundColor = 'lightblue';

