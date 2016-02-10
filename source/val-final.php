
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Smart Forms - Form validation </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="smart-forms.css">
    <link rel="stylesheet" type="text/css"  href="font-awesome.min.css">
    
    
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>
    <script type="text/javascript" src="additional-methods.min.js"></script>
    
   
    
    <script type="text/javascript">
	
		$(function() {
		
			
						
				$( "#smart-form" ).validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						
					/* 	errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em", */
						
						/* @validation rules 
						------------------------------------------ */
							
						rules: {
				
								name: {
										required: true,
										minlength: 2							
									  },
								age: {
										required: true,
										minlength: 1
									 },
								email: {
										required: true,
										email: true
									},
								address: {
									required: true,
									minlength: 10
									}
				
								},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
							
								name: {
										required: "Please enter a username",
										minlength: "Your username must consist of at least 2 characters"
									  },
								age: {
										required: "Please a number value",
										minlength: "Your age must be at least 1 characters"
									 },
				
								email:{
										required: 'Enter your email address',
										email: 'Enter a valid email address'
									 },
				
								address: {
									required: "Please enter address",
									minlength: "Your address must be at least 10 characters"
								}
						},
						/* /* @validation highlighting + error placement  
						---------------------------------------------------- */	
						
						/* highlight: function(element, errorClass, validClass) {
								$(element).closest('.field').addClass(errorClass).removeClass(validClass);
						},
						unhighlight: function(element, errorClass, validClass) {
								$(element).closest('.field').removeClass(errorClass).addClass(validClass);
						},
						errorPlacement: function(error, element) {
						   if (element.is(":radio") || element.is(":checkbox")) {
									element.closest('.option-group').after(error);
						   } else {
									error.insertAfter(element.parent());
						   }
						}, */
						
						
						
						submitHandler: function (form) {
				
				
				
				
			var data = $(form).serialize();
						$.ajax({ 
						type:'POST',
						url:'registers.php',
						data:data,
						success:function(response)
							{
								
								if(response == 1)
								{
									alert("INSERTED");
								}
								 else
								{
								alert("FAILED");
								}
									
								
							}
							
							});
		}
		
	
								
				});		
		
		});				
    
    </script>
    
    
       
</head>

<body class="woodbg">

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-2">
        
        	<div class="form-header header-primary">
            	<h4><i class="fa fa-pencil-square"></i>Form validation</h4>
            </div><!-- end .form-header section -->
            
            <form method="post" action="/" id="smart-form">
            	<div class="form-body">
                <label for="name">Name</label>
								<input type="text" id="name" name="name" ><br/><br/>
				
								<label for="age">Age</label>
								<input type="text" id="age" name="age" ><br/><br/>
				
								<label for="email">E-Mail</label>
								<input type="email" id="email" name="email"><br/><br/>
			
							
								<label for="address">Address</label>
								<input type="text" id="address" name="address"><br/><br/>
			
								<input class="submit" type="submit" value="submit">
                    
					
                </div>
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->

</body>
</html>
