var burger = document.getElementById("btn-timeline");
const overBurger = document.querySelectorAll("#open-timeline > .burger > .line > .over");
var stateBurger = false;
var moveBurger = false;

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