# techSolvItAssignment : Contact Us Form
Form is live on the following url. By using the url you can access the form and data will be submitted to the database.
http://tscontactus.great-site.net/


## Requirements
- PHP 5.6 or higher
- MySQL database
- Web server (e.g., Apache, Nginx, tomcat,xampp)

 ## Setup

1. Clone this repository to your local machine or web server:
git clone https://github.com/keshavsingh20/techSolvItAssignment.git

2. Create a MySQL database for the contact form application and then create the table by executing the following query:
   
CREATE TABLE contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(60) NOT NULL,
    phoneNumber VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    ip_add VARCHAR(45) NOT NULL,
    timeStamp DATETIME NOT NULL
);

3. Just change database configuration setting in config.php file in the db_coneection folder.


## Usage
Access the contact form by navigating to your domain for eg. (http://tscontactus.great-site.net/) or your localhost server.

Fill out the form fields (Full Name, Phone Number, Email, Subject, Message).

Click the "Submit" button to submit the form.

Upon successful submission, the form data will be stored in the database, and an email notification will be sent to the site owner.


## Troubleshooting
Email Not Being Sent: If you are not receiving email notifications, check your PHP environment's email configuration. Make sure the mail() function is configured and working correctly. 
All the smtp server and smtp ports are configured correctly with correct username and password.


## Contact
For any inquiries or assistance, please contact:

Keshav Singh Yadav
Email: keshavyadav200018@gmail.com
Phone No: 6378407433
