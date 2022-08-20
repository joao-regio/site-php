const aside = document.querySelector('aside');
const boxUsuario = document.querySelector('.box-usuario');
const header = document.querySelector('header');
const iconOpenMenu = document.querySelector('.menu-btn i');
const main = document.querySelector('main')

iconOpenMenu.addEventListener('click', ()=>{

	iconOpenMenu.classList.toggle('open-menu')

	if(iconOpenMenu.classList.contains('open-menu')){
		aside.style.width = '0';
		aside.style.padding = '0';
		header.style.width = '100%';
		header.style.left = '0'
		main.style.left = '0';
		main.style.width = '100%';
		boxUsuario.style.display = 'none';
	}else{
		aside.style.width = '22%';
		aside.style.padding = '10px';
		aside.style.display = 'block'
		header.style.width = '78%'
		header.style.left = '22%'
		main.style.left = '22%';
		main.style.width = '78%';
		boxUsuario.style.display = 'block';
	}
})