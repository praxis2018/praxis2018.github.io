// Check if the form is submitted 
if ( isset( $_POST['submit'] ) ) { 
// retrieve the form data by using the element's name attributes value as key 
$contactName = $_POST['contactName']; 
$contactEmail = $_POST['contactEmail']; 
$contactMessage = $_POST['contactMessage']; 
// display the results
echo '<h3>Form POST Method</h3>'; 
echo 'Name is ' . $contactName ; 
echo 'Email is ' . $contactEmail ; 
echo 'Message is ' . $contactMessage ; 
exit; } 