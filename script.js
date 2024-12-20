document.getElementById("registrationForm").onsubmit = function(event) {  
    event.preventDefault(); // Prevent form submission for demonstration  

    const firstName = document.getElementById("firstName").value;  
    const lastName = document.getElementById("lastName").value;  
    const email = document.getElementById("email").value;  
    const phone = document.getElementById("phone").value;  

    alert(`Submitted!\nName: ${firstName} ${lastName}\nEmail: ${email}\nPhone: ${phone}`);  
    
    // Optionally submit the form here (if using AJAX or other methods)  
    // this.submit();  
};