var xmlHttp = buatObjekXmlHttp();

function buatObjekXmlHttp()
	{
		var obj = null;
		if(window.ActiveXObject)
			obj = new ActiveXObject("Microsoft.XMLHTTP");
		else 
			if (window.XMLHttpRequest)
			obj = new XMLHttpRequest();

		// cek isi xmlHttp
		if(obj == null)
			document.write(
				"Browser tidak mendukung XMLHttpRequest");
		return obj;
	}

function ambilData(sumber_data, id_elemen, objXMLHttp)
	{
		if(objXMLHttp != null)
		{
			var elemen = document.getElementById(id_elemen);
			objXMLHttp.open("GET", sumber_data);

			objXMLHttp.onreadystatechange = function ()
			{
				if (objXMLHttp.readystate == 4 && objXMLHttp.status == 200 )
				{
					elemen.innerHTML = objXMLHttp.responseText;
				}
			}

			objXMLHttp.send(null);
		}
	}