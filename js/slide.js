
PicArray = new Array("../../images/slide1/msg1.jpg","../../images/slide1/msg2.jpg","../../images/slide1/msg4.jpg")
CurrentPic = 0
ImageCount = PicArray.length - 1
function MovePrevious()
{
if (document.images && CurrentPic > 0)
{
CurrentPic--
document.myPicture.src=PicArray[CurrentPic]
}
}
function MoveNext()
{
if (document.images && CurrentPic < ImageCount )
{
CurrentPic++
document.myPicture.src=PicArray[CurrentPic]
}
}
