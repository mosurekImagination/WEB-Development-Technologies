//zadanie1 DONE

var imagesList = document.images;
var currentImageIndex;

function useFunctionExample()
{
    var p = document.createElement("p");
    var WelcomeText = document.createTextNode("Hello in the JavaScript World");
    p.appendChild(WelcomeText);
    var button = document.createElement("button");
    document.getElementById("header").appendChild(p);
    
    
    var footer =document.getElementById("footer");
    
//textToAdd
    var footerText = document.createTextNode("Copyright by Pawel Gluszczak & Tomek 2017");
    var footerP = document.createElement("p");
    p.appendChild(footerP);
    
//insert Before
    footer.insertBefore(footerText, footer.childNodes[0]);
//remove child
    footer.removeChild(footer.childNodes[2]);
    
//replacing Child
    var textContainer = document.getElementById("text").parentElement;     //var textContainer = document.getElementById("textContainer");
    
     // create Text to replace
     var footerTextReplace = document.createTextNode("Lorem ipsum keszke w mesze");
     var textP = document.createElement("p");
     textP.appendChild(footerTextReplace);
    
    textContainer.replaceChild(textP, textContainer.childNodes[1]);
    
}

function collectionExample()
{
    document.getElementById("content").addEventListener("click", changePhoto);
    document.getElementById("checkboxId").addEventListener("click", checkBoxListener);
}

function checkBoxListener()
{
        var id = document.forms.item(0).id;
        var text = document.createTextNode("Form id: " + id);
        var textP = document.createElement("p");
        textP.appendChild( text);
        textP.style="text-align:center;";
        document.getElementById("DOM FORM").appendChild(textP);
    
        var para = document.createElement("p");
        document.getElementById("DOM FORM").appendChild(document.anchors.item(0));
}
function changePhoto()
{
    var newImage;
    imageRef=document.getElementById("content");    
    if(imagesList.length > 1 )
        {
            newImage = imagesList.item(imagesList.length-1);
        }
    else
        {
            newImage = document.links.namedItem("koniecObrazkow");
        }

    imageRef.replaceChild(newImage, imageRef.childNodes[1]);
}
function start()
{
	initializeListeners();
    useFunctionExample();
    collectionExample();
	addMoreListeners();
}

function initializeListeners()
{
	//document.getElementById("firstBOX").addEventListener("onmousedown", changeBoxBackground(event));
}

function mouseOver(e)
{
	if(e.target.getAttribute( "id" ) == "obszar")
		document.getElementById("first").innerHTML="HELLO! <3";
	{
		if(e.altKey) document.getElementById("first").setAttribute("style", "color: blue");
		if(e.ctrlKey) document.getElementById("first").setAttribute("style", "background-color: red ; color:white");
		if(e.shiftKey) document.getElementById("first").setAttribute("style", "color: yellow");
	}
}

function mouseOut(e)
{
	if(e.target.getAttribute( "id" ) == "obszar")
	{
		document.getElementById("first").innerHTML = "Bye :(";
	}
}

function uniCode(e)
{
		var x = e.which || e.keyCode;
		document.getElementById("sixthBOX").innerHTML = "keyCODE: "+x;
}


function coordinates(e) 
{
	if(e.target.getAttribute("id") == "moveBOX")
	{
		var cx = e.clientX;
		var cy = e.clientY;
		var sx = e.screenX;
		var sy = e.screenY;
		var client_coor = "X: "+cx+" Y: "+cy;
		var screen_coor = "X: "+sx+" Y: "+sy;
		document.getElementById("client_coords").innerHTML ="COORDS:" + client_coor+ " according to the client area";
		document.getElementById("screen_coords").innerHTML ="COORDS:" + screen_coor+ " according to the users computer screen";
	}
}

function colorMoveBox(e)
{
	if(e.target.getAttribute("id") == "moveBOX")
	{
		//randomizer coloru ?
		document.getElementById("moveBOX").setAttribute("style","background-color: yellow");
	}
}

function tipText(e)
{
	if(e.target.getAttribute("id") == "name_in"){
		document.getElementById("tip").innerHTML = "help!: Type name here";
		document.getElementById("tip").setAttribute("style", "color: blue");
	}
	if(e.target.getAttribute("id") == "last_name_in"){
		document.getElementById("tip").innerHTML = "help!: Type last name here";
		document.getElementById("tip").setAttribute("style", "color: blue");
	}
	
}

function subbmitMessage(e)
{
	return confirm("ARE YOU SURE TO SUBMIT THOSE DATAS?");
}
function resetMessage(e)
{
	return confirm("ARE YOU SURE TO RESET THOSE DATAS?");
}

function addMoreListeners(){
document.addEventListener( "mouseover", mouseOver, false );
document.addEventListener( "mouseout", mouseOut, false );
document.addEventListener( "mousemove" , coordinates , false);
document.addEventListener( "mousedown" , colorMoveBox, false);
document.getElementById("name_in").addEventListener("focus",tipText,false);
document.getElementById("last_name_in").addEventListener("focus",tipText,false);
document.getElementById("myForm").addEventListener("submit",subbmitMessage,false);
document.getElementById("myForm").addEventListener("reset",resetMessage,false);
}

