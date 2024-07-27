function sendEmail() {
    // Get form field values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;   


    // Create the email   
 subject and body
    var subject = "Contact Form Submission - " + name;
    var body = "Name: " + name + "\nEmail: " + email + "\nMessage:\n" + message;

    // Encode subject and body for URL inclusion (optional)
    subject = encodeURIComponent(subject);
    body = encodeURIComponent(body);

    // Create the mailto link (replace with your actual email address)
    var mailtoLink = "mailto:elevenxsid@gmail.com" + subject + "&body=" + body;

    // Open the mailto link in a new window
    window.open(mailtoLink, "_blank");
}