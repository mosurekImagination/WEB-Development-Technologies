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
}

function initializeListeners()
{
	//document.getElementById("firstBOX").addEventListener("onmousedown", changeBoxBackground(event));
}


function changeBoxBackground(event){
	alert = "fuck";
}
