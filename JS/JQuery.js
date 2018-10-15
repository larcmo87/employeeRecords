$(document).ready(()=>{
	getEmployeeData();

	//Add new employee in addNewEmployee.php
	$("#submitNewEmployee").click(()=>{
		event.preventDefault();
		validateForm('newEmployee');
	});	

	$("#submitUpdateEmployee").click(()=>{
		event.preventDefault();
		validateForm('updateEmployee');
	});	
	//form validation
	function validateForm(formType,method){
		var empId= "";

		//if updateing info capture employee id in form id field
		if(formType == "updateEmployee"){
				empId = $("#empId");
		}
		var firstName = $("#firstName");
		var lastName = $("#lastName");
		var email = $("#email");
		var phone = $("#phone");
		var salary = $("#salary");
		
		//if all fields are filled and formated correctly then make ajax call
		if(isNotFieldEmpty(firstName) && isNotFieldEmpty(lastName) && isNotFieldEmpty(email) && isNotFieldEmpty(phone) && isNotFieldEmpty(salary)){
				
				$.ajax({
					url: 'sql.php',
					method: 'POST',
					dataType:  'text',
					data:{
						sqlType: formType,
						empId: empId.val(),
						firstName: firstName.val(),
						lastName: lastName.val(),
						email: email.val(),
						phone: phone.val(),
						salary: salary.val()
					}
				}).done((response)=>{
					//Clear form fields in addNewEmployee.php
					if(formType != "updateEmployee"){						
						$("#firstName").val("");
						$("#lastName").val("");
						$("#email").val("");
						$("#phone").val("");
						$("#salary").val("");
					}
					$("#submitted").text(response);
				}).fail((response)=>{
					$("#submitted").text("error occured");
				});
			

		}
	};

	//field validation
	function isNotFieldEmpty(field){
		
		if(field.val() == ""){ //field cannot be blank

			field.css('border', '1px solid red');
			field.attr('placeHolder','Field cannot be blank!').focus().blur();
			return false;
		}else if(field.attr('id') == 'email'){ //email format validation

			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		    if (filter.test(field.val())) {
		        return true;
		    }
		    else {
		    	field.css('border', '1px solid red');
		    	field.val('');
				field.attr('placeHolder','Email format incorrect!').focus().blur();
		        return false;
		    }
		}else if(field.attr('id') == 'salary'){ //salary validation
			if($.isNumeric(field.val())){
				return true;
			}else{
				field.css('border', '1px solid red');
				field.val('');
				field.attr('placeHolder','Salary value must be numeric!').focus().blur();
		        return false;
			}
		}else{
			field.css('border','');
			return true;
		}
	};

	//Data for all employees
	function getEmployeeData(){
		$.ajax({
				url: 'sql.php',
				method: 'POST',
				dataType:  'text',
				data:{
					sqlType: 'getEmployeeData'					
				}
			}).done((response)=>{
					$('tbody').append(response);
					
			}).fail((response)=>{
				$("#submitted").text("error occured");
			});
	}

})