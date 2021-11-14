function validate()
{
	
var un,pw

un=document.getElementById("Uname").value;
pw=document.getElementById("Pass").value;

if(un.length==0){
	alert("empty usename");
	{
        window.location.reload();
    };
	
}else if(pw.length==0){
	
	alert("empty password");
	{
        window.location.reload();
    };

	}

}

