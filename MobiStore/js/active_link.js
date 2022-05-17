
const curPage = window.location.pathname; 
const curLink = document.querySelectorAll('.header__menu a')

if(curPage =='/mobistore/'){

	curLink[0].classList.add('active_link')
}
else{

curLink.forEach(link =>{
	 if(link.href.includes(`${curPage}`)){
		link.classList.add('active_link');
	}
	

	
}) ;
}
