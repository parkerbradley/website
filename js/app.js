const highlighted = document.getElementsByClassName('bucket-title');
const buckets = document.getElementsByClassName('bucket');
const bucketCovers = document.getElementsByClassName('bucket-cover');
const headUnderline = document.getElementsByClassName('underline');
const required = document.querySelectorAll("input[required='required'], textarea[required='required']");
const screenWidth = screen.width;
const menuDOM = document.querySelector('.nav-wrapper');
const menuOpenIcon = document.querySelector('.fa-bars');
const menuCloseIcon = document.querySelector('.fa-times');

//==== highlights text with highlight sketch ====//
for(let i=0; i <highlighted.length; i++) {
  highlighted[i].innerHTML += "<img src='assets/highlight.png' class='highlight'>";
}

//==== bucket hoverstate ====//
for(let i=0; i <buckets.length; i++) {
  buckets[i].innerHTML +=
  "<div class='bucket_hover'><img src='assets/bucket-hover.png' class='bucket-active'><p><strong>Learn More +</strong></p></div>";
}

//==== bucket links ====//
document.addEventListener('click', function(e) {
  if (e.target.classList.contains("bucket-cover")) {
    window.open(e.target.parentNode.dataset.link);
  }
})

//==== headline underline ====//
for(let i=0; i < headUnderline.length; i++) {
  var width = headUnderline[i].offsetWidth * .4;
  headUnderline[i].innerHTML +=
  `<div class='head-underline' style='width: ${width}px'></div>`;
}

//==== form rules ====//
for(let i=0; i < required.length; i++) {
  var label = required[i].previousSibling.previousSibling;
  var labelValue = required[i].previousSibling.previousSibling.innerHTML;
  label.innerHTML = "*" + labelValue;
}

//==== mobile menu ====//
function openMenu() {
  menuDOM.style.right = '0';
  menuOpenIcon.style.display = 'none';
  menuCloseIcon.style.display = 'inline-block';
}

function closeMenu() {
  menuDOM.style.right = '-70%';
  menuCloseIcon.style.display = 'none';
  menuOpenIcon.style.display = 'inline-block';
}
