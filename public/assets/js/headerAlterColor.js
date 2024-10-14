window.onscroll = function () { 
    let header = document.getElementById('header');
    let navItems = document.querySelectorAll("#nav_item .nav-link"); // Seleciona os links dentro das li
    
    if(window.scrollY >= 50){
        header.classList.add('scrolled');
        navItems.forEach(item => {
            item.classList.add('scrolled'); // Adiciona a classe a cada link
        });
    } else {
        header.classList.remove('scrolled');
        navItems.forEach(item => {
            item.classList.remove('scrolled'); // Remove a classe de cada link
        });
    }
};