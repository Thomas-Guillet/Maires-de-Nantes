var burger = document.getElementById("btn-timeline");
var menu = document.getElementById("menu");
const overBurger = document.querySelectorAll("#open-timeline > .burger > .line > .over");
var dates = document.querySelectorAll('*[id^="date-timeline-"]');
var stateBurger = false;
var moveBurger = false;
var expand = false;

burger.onmouseenter = function(){
	if(stateBurger == false && moveBurger == false){
		moveBurger = true;
		TweenMax.staggerTo(overBurger, 0.6, {x:"+=50"}, 0.05);
		setTimeout(function(){ 
			stateBurger = true;
			moveBurger = false;
		}, 600);

	}
};
burger.onmouseleave = function(){
	if(stateBurger == true && moveBurger == false){
			console.log('start');
		moveBurger = true;
		TweenMax.staggerTo(overBurger, 0.6, {x:"-=50"}, 0.05);
		setTimeout(function(){ 
			stateBurger = false;
			moveBurger = false;
		}, 600);
	}
};
burger.onclick = function(){
	if(expand == false){
		TweenMax.to(menu, 0.5, {y:"+=90"});
		TweenMax.to(burger, 0.5, {y:"+=90"});
		expand = true;
	}else{
		TweenMax.to(menu, 0.5, {y:"-=90"});
		TweenMax.to(burger, 0.5, {y:"-=90"});
		expand = false;
	}
};