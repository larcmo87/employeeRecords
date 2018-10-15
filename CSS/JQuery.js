//$(document).ready(funtion(){

	$("#submitNewEmployee").click(function(){
		alert("working");
		validateForm('newEmployee');
	});
	
	//form validation
	function validateForm(formType){
		var firstName = $("firstName");
		var lastName = $("lastName");
		var email = $("email");
		var phone = $("phone");
		var salary = $("salary");
		console.log(firstname);
		//if all fields are filled and formated correctly then make ajax call
		if(isNotFieldEmpty(firstName) && isNotFieldEmpty(lastName) && isNotFieldEmpty(email) && isNotFieldEmpty(phone) && isNotFieldEmpty(salary)){

		}
	};

	//field validation
	function isNotFieldEmpty(field){
		if(field.var() == ""){
			field.css('border', '1px solid red');
			field.attr('placholder','field cannot be blank').focus().blur();
			return false;
		}else{
			caller.css('border','');
			return true;
		}
	};
//})