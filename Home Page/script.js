const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');
const modal = document.getElementById('modal');

navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    modal.classList.add('showModal');
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    modal.classList.remove('showModal');
});

window.addEventListener('click', function(event){
    if(event.target === modal){
        sideNav.classList.remove('show');
        modal.classList.remove('showModal');
    }
});
function Single(){
    location.href = 'page.php?'
}
function Couples(){
    location.href = 'page2.php'
}
function Family(){
    location.href = 'page3.php'
}


let params = (new URL(document.location)).searchParams;
let id = params.get('id');
document.cookie = `userId=${id}`;
// sessionStorage.userId = id;