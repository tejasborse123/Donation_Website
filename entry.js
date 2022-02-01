function Validate() {
	var username = document.getElementById("usernames").value;
	var password = document.getElementById("passwords").value;

	if(username=="TEJAS" && password=="BORSE")
	{
		alert("LOGIN SUCCESSFULL");
		return false;
	}
	else
	{
		alert("LOGIN FAILED");
	}
}