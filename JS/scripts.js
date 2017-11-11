var itemType = 0;
var itemNo = 0;
const ammountOfItems = [5, 2, 7];
const itemsType = ["Image", "Video", "Gif"];


function writeToTest()
{
    document.writeln("<h1> Things Generator</h1>"); 
}

function initializeListeners()
{
    document.getElementById("randIt").addEventListener("click", randomButtonListener);
    document.getElementById("nextIt").addEventListener("click", nextButtonListener);
    document.getElementById("itemNoB").addEventListener("click", selectItem);
}

function start()
{
    initializeListeners();
    randItem(true);
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
    if (randT) randType();
    itemNo = Math.floor(Math.random()* ammountOfItems[itemType]);
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
    if(itemNumber<0 || itemNumber > ammountOfItems[itemsType]) window.alert("Out of Bounds!");
    else{
        itemNo = itemNumber;
    }
    showItem();
}