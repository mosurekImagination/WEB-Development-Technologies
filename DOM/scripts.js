//zadanie1 DONE

var imagesList = document.images;
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
    footer.removeChild(footer.childNodes[1]);
    
//replacing Child
    var textContainer = document.getElementById("text").parentElement;     //var textContainer = document.getElementById("textContainer");
    
     // create Text to replace
     var footerTextReplace = document.createTextNode("Lorem ipsum keszke w mesze");
     var textP = document.createElement("p");
     textP.appendChild(footerTextReplace);
    
    textContainer.replaceChild(textP, textContainer.childNodes[0]);
    
}

function collectionExample()
{
    var imagesList = document.images;
}

function start()
{
	initializeListeners();
    useFunctionExample();
    collectionExample();
}

function initializeListeners()
{
	//document.getElementById("firstBOX").addEventListener("onmousedown", changeBoxBackground(event));
}


function changeBoxBackground(event){
	alert = "fuck";
}
