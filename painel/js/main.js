const aside = document.querySelector('aside');
const boxUsuario = document.querySelector('.box-usuario');
const header = document.querySelector('header');
const iconOpenMenu = document.querySelector('.menu-btn i');
const main = document.querySelector('main');
const windowSize = document.documentElement.clientWidth;


iconOpenMenu.addEventListener('click', ()=>{

	if(windowSize <= 768){
		iconOpenMenu.classList.toggle('open-menu-mobile')

		if (iconOpenMenu.classList.contains('open-menu-mobile')) {
			aside.style.width = '30%';
			aside.style.padding = '10px';
			aside.style.display = 'block'
			header.style.width = '70%'
			header.style.left = '30%'
			main.style.left = '30%';
			main.style.width = '70%';
			boxUsuario.style.display = 'block';
		}else{
			aside.style.width = '0';
			aside.style.padding = '0';
			header.style.width = '100%';
			header.style.left = '0'
			main.style.left = '0';
			main.style.width = '100%';
			boxUsuario.style.display = 'none';
		}
	}else{
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
	}
})