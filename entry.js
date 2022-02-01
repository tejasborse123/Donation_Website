function Validate() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;

	if(username=="TEJAS" && password=="BORSE")
	{
		//alert("LOGIN SUCCESSFULL");
		return false;
	}
	else
	{
		//alert("LOGIN FAILED");
	}
}