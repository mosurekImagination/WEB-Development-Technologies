var itemType = 0;
var itemNo = 0;
const ammountOfItemType = 3;
const ammountOfItems = [5,4,3];

function start()
{
    window.writeln("<h1>Aplikacja losująca fajną rzecz<h1>");   
}

function randType()
{
    Math.round(Math.random()*ammountOfItemType);
}

function randItem(Boolean randType = false)
{
    if (randType) randType();
    itemNo = Math.round(Math.random()* ammountOfItems[itemType]);
}