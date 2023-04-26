// OPENのアニメーション
const target = window.document.getElementsByTagName('h1')[0]

const flickerLetter = letter => `<span style="animation: text-flicker-in-glow ${Math.random()*4}s linear both ">${letter}</span>`
const colorLetter = letter => `<span style="color: hsla(${Math.random()*360}, 100%, 80%, 1);">${letter}</span>`;
const flickerAndColorText = text => 
  text
    .split('')
    .map(flickerLetter)
    .map(colorLetter)
    .join('');
const neonGlory = target => target.innerHTML = flickerAndColorText(target.textContent);


neonGlory(target);
target.onclick = ({ target }) =>  neonGlory(target);
// OPENのアニメーション

// 引扉のアニメーション
let door = $('.door');

door.click(function() {
  door.toggleClass('open');
  if(door.hasClass('open')) {
    door.css('transform', 'translate(-56.5%, -50%) rotateY(85deg) skewY(-10deg)');
  } else {
    door.css('transform', 'translate(-50%, -50%) rotateY(0deg)');
  }
 })
// 引扉のアニメーション

// OPEN後にリンク
// $('door').after.click(function () {
//   window.location.href = https:techacademy.jp;
// })