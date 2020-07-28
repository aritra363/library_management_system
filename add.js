function addvalid()
{
    ad=true;
    var book=document.getElementById("bk").value;
    var auth=document.getElementById("aut").value;
    var tag=document.getElementById("tg").value;
    var quant=document.getElementById("quant").value;
    if (book.length<3 )
        {
            alert("Bookname must be greater than 3 characters");
            ad=false;
        }
    if (auth.length<2)
        {
           alert("Author Name must be greater than 2 characters");
            ad=false; 
        }
     if (tag.length<=0)
        {
           alert("There must be a Tag Number");
            ad=false; 
        }
    return ad;
    
}
function delvalid()
{
    ad=true;
    var tag=document.getElementById("tg1").value;
    if (tag.length<=0)
        {
           alert("There must be a Tag Number of which book to be deleted");
            ad=false; 
        }
    return ad;
}
function altervalid()
{
    ad=true;
    var tag1=document.getElementById("tg2").value;
    if (tag1.length<=0)
        {
           alert("There must be a Tag Number of which book to be Edited");
            ad=false; 
        }
    return ad;
}
function regvalid()
{ 
    ad=true;
    var usernm=document.getElementById("usnmr").value;
    var pass=document.getElementById("passr").value;
    if (usernm.length<4 || pass.length<8)
        {
           alert("Please Input a valid UserName(4 characters min.) and Password(8 characters min.)");
            ad=false; 
        }
    return ad;
}
function logvalid()
{
    ad=true;
    var user=document.getElementById("usnml").value;
    var pas=document.getElementById("passl").value;
    if (user.length<4 || pas.length<8)
        {
           alert("Please Input a valid UserName(4 characters min.) and Password(8 characters min.)");
            ad=false; 
        }
    return ad;
}
function add()
{
    document.getElementById("addfr").style.display="block";
    document.getElementById("delfr").style.display="none";
    document.getElementById("alterfr").style.display="none";
}
function mainpage()
{
    document.getElementById("addfr").style.display="none";
     document.getElementById("delfr").style.display="none";
     document.getElementById("alterfr").style.display="none";
}
function edit()
{
    document.getElementById("addfr").style.display="none"; 
     document.getElementById("delfr").style.display="none";
    document.getElementById("alterfr").style.display="block";
}
function del()
{
    document.getElementById("addfr").style.display="none"; 
     document.getElementById("delfr").style.display="block";
    document.getElementById("alterfr").style.display="none";
}
function clear()
{
   document.getElementById("addfr").reset();
    
}
function letter(input)
{
    var idx=/[^0-9^a-z ]/gi;
    input.value=input.value.replace(idx,"");
     
}
function authname(input)
{
    var idx=/[^a-z ,]/gi;
    input.value=input.value.replace(idx,"");
}
function tag(input)
{
    var idx=/[^0-9]/gi;
    input.value=input.value.replace(idx,"");
}