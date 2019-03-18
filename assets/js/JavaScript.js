/**java scripts for generate the hamburger bar*/
function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
}

/**javascripts for scroll the page to the top*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

//The function will jump to the top page if user click it
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//Form validate java script
function validate(){
	//check there is anyhing in the input
	var dom = document.getElementById('name');
	var dom1 = document.getElementById('comment');
	if(dom.value=='' && dom1.value==''){
		dom.style.backgroundColor='red';
		dom1.style.backgroundColor='red';
		return false;
	}
	else if(dom.value==''){
		dom.style.backgroundColor='red';
		return false;
	}
	else if(dom1.value==''){
		dom1.style.backgroundColor='red';
		return false;
	}
	else{
		return true;
	}
}
//This javascript will pop up a large image for user to view when click it
function pop(imgsrc){
	var dom = document.getElementById('bigImg');
	dom.style.display = "block";
	dom.style.position = "fixed";
	dom.style.height = "100vh";
	dom.style.width = "100vw";
	dom.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
	
	var img = document.getElementById('showimg');
	img.src = imgsrc;
	img.style.width = "300px";
	img.style.height = "300px";
	img.style.borderRadius = "15px";
	
	var screenW = self.innerWidth;
	var screenH = self.innerHeight;
	var goleft = (screenW-img.width)/2;
	var gotop = (screenH-img.height)/2;
	
	img.style.display = "inline-block";
	img.style.left = goleft+"px";
	img.style.top = gotop+"px";
	img.style.cursor = "pointer";
 }
//exit the pop image
function endpop(){
	document.getElementById('bigImg').style.display = "none";
}

/*dhtml for moving the logo in homepage*/
var moving;
function go(){
	var m= document.getElementById('logo');
	//m.style.left="500px";
	m.style.top="2px";
	if(parseInt(m.style.left)>-200){
		m.style.left=parseInt(m.style.left)-1+'px';
		moving = setTimeout(function(){go()},15);
	}
	if(parseInt(m.style.left)==-200 && parseInt(m.style.top)<100){
		godown();
	}
}
function godown(){
	var m= document.getElementById('logo');
	if(parseInt(m.style.top)<150){
		m.style.top=parseInt(m.style.top)+1+'px';
		moving = setTimeout(function(){godown()},15);
	}
	if(parseInt(m.style.top)==150 && parseInt(m.style.left)<200){
		goright();
	}
}
function goright(){
	var m= document.getElementById('logo');
	if(parseInt(m.style.left)<200){
		m.style.left=parseInt(m.style.left)+1+'px';
		moving = setTimeout(function(){goright()},15);
	}
	if(parseInt(m.style.left)==200 && parseInt(m.style.top)>0){
		goup();
	}
}
function goup(){
	var m= document.getElementById('logo');
	if(parseInt(m.style.top)>0){
		m.style.top=parseInt(m.style.top)-1+'px';
		moving = setTimeout(function(){goup()},15);
	}
	if(parseInt(m.style.top)==0 && parseInt(m.style.left)>0){
		goleft();
	}
}
function goleft(){
	var m= document.getElementById('logo');
	if(parseInt(m.style.left)>0){
		m.style.left=parseInt(m.style.left)-1+'px';
		moving = setTimeout(function(){goleft()},15);
	}

}