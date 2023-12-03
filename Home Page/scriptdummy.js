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
function myFunction(){
    location.href = 'register.php'
}
function myFunctions(){
    location.href = 'index.php'
}
function myFunction1(){
    location.href = 'index.php'
}
function myFunction2(){
    location.href = 'index.php'
}
function myFunction3(){
    location.href = 'index.php'
}