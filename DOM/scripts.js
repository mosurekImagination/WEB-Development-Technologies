function useFunctionExample()
{
    var p = document.createElement("p");
    var WelcomeText = document.createTextNode("Hello in the JavaScript World");
    p.appendChild(WelcomeText);
    var button = document.createElement("button");
    document.getElementById("header").appendChild(p);
}

function start()
{
	initializeListeners();
    useFunctionExample();
}

function initializeListeners()
{
	//document.getElementById("firstBOX").addEventListener("onmousedown", changeBoxBackground(event));
}


function changeBoxBackground(event){
	alert = "fuck";
}
