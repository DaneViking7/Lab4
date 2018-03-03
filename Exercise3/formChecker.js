function check()
{
	let user = document.getElementById("username").value;
	let pass = document.getElementById("password").value;
	let largefruit = document.getElementById("lfruit").value;
	let smallfruit = document.getElementById("sfruit").value;
	let normfruit = document.getElementById("fruit").value;
	if(user == null || pass == null || largefruit == null || smallfruit == null || normfruit == null || !(document.getElementById("ship7").checked || document.getElementById("ship3").checked || document.getElementById("ship1").checked))
        {
                alert("The entire form must be completed.");
                return false;
        }
	else if(largefruit < 0 || smallfruit < 0 || normfruit < 0)
	{
		alert("You can't order negative grapefruits dingus!");
		return false;
	}
	else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(user)))
	{
		alert("You have entered an invalid email address!");
		return false;
	}
	return true;
}
