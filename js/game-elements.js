/* This file contains the classes for various Game Elements */

/* Constants */
var LEFT_DIRECTION = -1;
var RIGHT_DIRECTION = 1;
var NO_DIRECTION = 0;
/* Class for our hero starts here */

function Hero(name){
	this.name = name;
	
	$('body').append('<div id="'+name+'"></div>');
	this.element = $('#'+name);
	this.element.css('width','200');
	this.element.css('height','200');
	this.element.css('background','red');
	this.element.css('border-radius','50%');
	this.element.css('position','absolute');
	this.element.css('top','200');
}

Hero.prototype.walk = function(direction){
	switch (direction){
		case LEFT_DIRECTION:console.log('moved left');break;
		case RIGHT_DIRECTION:console.log('moved right');break;		
	}
}

Hero.prototype.jump = function(){
	if(this.element.css('top')!='200px')
	return;
	this.element.animate({top:0}).animate({top:200});
}

/* Class for our hero ends here */ 