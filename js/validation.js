function validateForm() 
{
    var x = document.getElementById("firstname")
    if (x.value=" ") 
    {
        alert("Please enter first name"); 
    }
    var y = document.getElementById("lastname")
    if (y.value=" ") 
    {
        alert("Please enter last name"); 
    }
    var z = document.getElementById("email")
    if (z.value=" ") 
    {
        alert("Please enter valid email"); 
    }
    var a = document.getElementById("pwd")
    if (a.value=" ") 
    {
        alert("Please enter maximum of 8 characters use speicalsymbols and numbers"); 
    }
    var b = document.getElementById("c_pwd")
    if (b.value=" ") 
    {
        alert("Please enter above password"); 
    }
    var c = document.getElementById("address")
    if (c.value=" ") 
    {
        alert("Please enter the field"); 
    }
    var d = document.getElementById("panno")
    if (d.value=" ") 
    {
        alert("Please enter valid panno"); 
    }

}