//AUTHOR BY ONABANJI ABIOLA 

/* this is the function for adding and deleting both the parents and child row.*/


function addChildRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 5){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Le nombre maximum d'enfants par parent est de 5.");
			   
	}
}

function deleteChildRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) { 						// limit the user from removing all the fields
				alert("Impossible de supprimer tout l'enfant.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}


