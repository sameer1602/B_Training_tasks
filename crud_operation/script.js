var selectedRow = null;
function onFormSubmit(e){
    event.preventDefault();
    var formData = readFormData();
    if(selectedRow === null){
        insertNewRecord(formData);
    }else{
        updateRecord(formData)
    }
    resetForm();
    }
// Read operation using this function
function readFormData(){
    var formData = {};
    formData["CountryName"] = document.getElementById("CountryName").value;
    formData["CountryCode"] = document.getElementById("CountryCode").value;
    formData["Capital"] = document.getElementById("Capital").value;
    formData["Continent"] = document.getElementById("Continent").value;
    return formData;
}

// Create operation
function insertNewRecord(data){
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    var cell1 = newRow.insertCell(0);
        cell1.innerHTML = data.CountryName;
    var cell2 = newRow.insertCell(1);
        cell2.innerHTML = data.CountryCode;
    var cell3 = newRow.insertCell(2);
        cell3.innerHTML = data.Capital;
    var cell4 = newRow.insertCell(3);
        cell4.innerHTML = data.Continent;
    var cell5 = newRow.insertCell(4);
        cell5.innerHTML = `<a href="#" onClick='onEdit(this)'>Edit</a>
                        <a href="#" onClick='onDelete(this)'>Delete</a>`;
}

// To Reset the data of fill input
function resetForm(){
    document.getElementById('CountryName').value = '';
    document.getElementById('CountryCode').value = '';
    document.getElementById('Capital').value = '';
    document.getElementById('Continent').value = '';
    selectedRow = null;
}

// For Edit operation
function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('CountryName').value = selectedRow.cells[0].innerHTML;
    document.getElementById('CountryCode').value = selectedRow.cells[1].innerHTML;
    document.getElementById('Capital').value = selectedRow.cells[2].innerHTML;
    document.getElementById('Continent').value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.CountryName;
    selectedRow.cells[1].innerHTML = formData.CountryCode;
    selectedRow.cells[2].innerHTML = formData.Capital;
    selectedRow.cells[3].innerHTML = formData.Continent;
}
function onDelete(td){
    if(confirm('Are you sure you want to delete this record?')){
        row = td.parentElement.parentElement;
        document.getElementById('employeeList').deleteRow(row.rowIndex);
        resetForm();
    }    
}