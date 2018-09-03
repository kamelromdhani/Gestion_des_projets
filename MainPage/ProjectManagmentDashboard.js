var SchedualList=document.getElementById('SchedualList');
var SchedualImage=document.getElementById('SchedualImage');

SchedualList.addEventListener('change', function() {
if(SchedualList.value=="green")
{
SchedualImage.src="green.png";
}
else if(SchedualList.value=="red")
{
SchedualImage.src="red.png";
}
else
{
SchedualImage.src="amber.png";
}
}, true);

var CostList=document.getElementById('CostList');
var CostImage=document.getElementById('CostImage');

CostList.addEventListener('change', function() {
if(CostList.value=="green")
{
CostImage.src="green.png";
}
else if(CostList.value=="red")
{
CostImage.src="red.png";
}
else
{
CostImage.src="amber.png";
}
}, true);

var QualityList=document.getElementById('QualityList');
var QualityImage=document.getElementById('QualityImage');

QualityList.addEventListener('change', function() {
if(QualityList.value=="green")
{
QualityImage.src="green.png";
}
else if(QualityList.value=="red")
{
QualityImage.src="red.png";
}
else
{
QualityImage.src="amber.png";
}
}, true);