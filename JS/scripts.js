var itemType = 0;
var itemNo = 0;
var clockState = 0;
const ammountOfItems = [5, 2, 7];
const itemsType = ["Image", "Video", "Gif"];


function writeToTest()
{
    document.writeln("<h1> Things Generator</h1>"); 
}

function initializeListeners()
{
	var clockButton = document.getElementById("clockButton");
    document.getElementById("randIt").addEventListener("click", randomButtonListener);
    document.getElementById("nextIt").addEventListener("click", nextButtonListener);
    document.getElementById("itemNoB").addEventListener("click", selectItem);
	document.getElementById("whileButton").addEventListener("click", whileExample);
	document.getElementById("forButton").addEventListener("click", forExample);
    document.getElementById("item-type").addEventListener("click", changeType);
	clockButton.addEventListener("click",changeTimeDate);
	
}

function changeTimeDate()
{
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth()+1;
	var yearString = window.prompt("Type the actual year and some text to it:");
	var year = parseInt(yearString);
	if(year!=2017) { window.alert("You typed wrong year!")}
	else{
		document.getElementById("clock").innerHTML =
		"<h2> DATE: "+day+"/"+month+"/"+year+"</h2>";
	}
}


function start()
{
    initializeListeners();
    randItem(true);
    showRandType();
    showItem();
}

function changeType()
{
    if(itemType == itemsType.length - 1) itemType=0;
    else{
        itemType++;
    }
    itemNo = 0;
    showRandType();
    showItem();
}

function showRandType()
{
    document.getElementById("item-type").innerHTML="<h2>Current Item Type: " + itemsType[itemType] + "</h2>";
}

function randType()
{
    itemType = Math.floor(Math.random()*ammountOfItems.length);
}

function randItem(randT = false)
{
    if (randT) randType(); //generate category
    itemNo = Math.floor(Math.random()* (ammountOfItems[itemType]+1));
}

function showItem()
{
    document.getElementById("item-No").innerHTML="<h2>Item Number:" + itemNo + "</h2>";
        
    switch(itemsType[itemType])
        {
        case "Image":
                document.getElementById("content").innerHTML = "<img src=media/image/" +itemNo +".jpg />"; 
                break;
        case "Video":
                document.getElementById("content").innerHTML = "<video controls> <source src=media/video/" + itemNo + ".webm type=video/webm> </video>"
                break;       
        case "Gif":
                document.getElementById("content").innerHTML = "<img src=media/gif/" +itemNo +".gif />"; 
                break; 
        }

}

function randomButtonListener()
{
    randItem(true);
    showRandType();
    showItem();
}

function nextButtonListener()
{
    randItem();
    showItem();
}

function selectItem()
{
    var itemNumber = window.prompt("Please select item: \n range: 0-" + ammountOfItems[itemType]);
    if(itemNumber<0 || itemNumber > ammountOfItems[itemType]) window.alert("Out of Bounds!");
    else{
        itemNo = itemNumber;
    }
    showItem();
}

function whileExample()
{
    var first = Math.floor(Math.random() * 100);
    var second = Math.floor(Math.random() * 100);
	do 
    {var howMany = window.prompt("You cannot escape until you answer how much is: " + first + " + " + second);
    }
	while (howMany!=first + second)
	window.alert("Congratulations!");
}

function forExample()
{
	var howMany = window.prompt("How many numbers do you want to add?: ");
	var result=0.0;
	for(i=0;i<howMany;i++)
	{
		var doubleType = parseFloat(window.prompt("Type " + i + " number: "));
		result= result + doubleType;
	}
	window.alert("Your result = "+ result)
}


