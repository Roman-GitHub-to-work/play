const forms = document.querySelectorAll('form#ajaxTestingIdForm');

const message = {
	Loading: 'загрузка',
	success: 'ну ок , запрос сделан',
	failure: 'что-то пошло по не так'
};
// если надо будет переделать ajax https://developer.mozilla.org/ru/docs/Learn/JavaScript/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D1%8B/JSON
// forms.forEach(item =>{
// 	postData(item);
// })

// -------------------------------------------------------------------
// функция для запроса в базу на наличие людей онлайн ---->

function getUser(){
	let usersOnlinesJs = document.getElementById('usersOnlinesJs');
	// const flexing_elem2 = document.getElementById('flexing_elem2');
	const requestUsers = new XMLHttpRequest();
	requestUsers.open('POST','..//scriptPhp/scriptAjaxUsersOnline.php');
	const formData = new FormData();

	requestUsers.send();
	requestUsers.addEventListener('load',() =>{
		if(requestUsers.status === 200){
			usersOnlinesJs.innerHTML = '';
			let removeLastResalt = document.querySelectorAll(".lastResalt");

		
			var b = requestUsers.response;
			// b = JSON.parse(b).name_user;
			b = JSON.parse(b);
			var displayNone = document.getElementById('displayNone');			
			
			for(var key in b){
				// console.log("ключ :" + key + " значение :"+b[key]);
				// alert("rabotaet");
				displayNone.innerHTML +=b[key];
				usersOnlinesJs.innerHTML +=`<span class="lastResalt">имя пользователя : ${b[key]}</span>`;
				usersOnlinesJs.innerHTML +=`<input type="radio" name='war' value="${b[key]}"><br>`;

			}
		}
	})	

}
// <---- конец функции для запроса в базу на наличие людей онлайн 
// -------------------------------------------------------------------
// функция для запроса в базу на наличие брошенных мне вызовов ---->

function getWar(){
	const blockResultSerch = document.getElementById('blockResultSerch');
	const request = new XMLHttpRequest();
	request.open('POST','..//scriptPhp/scriptAjax.php');
	const formData = new FormData();

	request.send();
	request.addEventListener('load',() =>{
		if(request.status === 200){

			// console.log(request.response);
		
			var a = request.response;
			if (a !="null") {

				// if (blockResultSerch.innerHTML !=a) {}
				a = JSON.parse(a).who_war;
				if (blockResultSerch.innerHTML == a){
					return;
				}else{
					blockResultSerch.innerHTML = a;
					let c = document.getElementById("modalWarWindowVisible").id="modalWarWindowVisiblePosition";
					let d = document.getElementById('clickedExitToJs');
					d.setAttribute("id","exitToJs");
					let e = document.getElementById("vrag");
					// alert("rabotaet");
					e.innerHTML = "<input type='submit' name='goWarNow' value='го пиздиться'>";
					let tvorog = document.getElementById("tvorog");
 					tvorog.value = e;
 					alert(e);
				}	
				// alert("rabotaet");
			}else{
				blockResultSerch.innerHTML = "<spa>никто</spa>";
			}
		}else{
			statusMessage.textContent = message.failure;
		}
	});	
	a = "";
}
// <---- конец функции для запроса в базу на наличие брошенных мне вызовов
// -------------------------------------------------------------------

function interval(){
	getWar();
	getUser();
}
(function func(){
	interval()
}());
let timerId = setInterval(() => interval() , 3000);
// -------------------------------------------------------------------
// функция для кнопки закрытия брошенных мне вызовов ---->

let exitToJs = document.getElementById("exitToJs")
exitToJs.onclick = function (){
    let modalWarWindowVisible = document.getElementById("modalWarWindowVisiblePosition");
    modalWarWindowVisible.setAttribute("id","modalWarWindowVisible");
    exitToJs.setAttribute("id","clickedExitToJs");
 }
// 1 let goWarNow = document.getElementById('goWarNow');
// 2 goWarNow.onclick = function(){
//  	// alert("ты быканул");
// 3 	let blockResultSerch = document.getElementById("blockResultSerch");
//  	// document.cookie = `vrag=${blockResultSerch.innerHTML}`;
//  	// alert(document.cookie['vrag']);
//  	// setCookie('vrag', blockResultSerch, {secure: true, 'max-age': 3600});
//  4	document.location.href = "warPage.php";
//  	// alert(blockResultSerch.innerHTML);
//  }
//<---- функция для кнопки закрытия брошенных мне вызовов 
