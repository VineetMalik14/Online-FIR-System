<?php
include 'db_connection.php';
 

//taking the form variables for the fir


$name = $_POST['uname'];
$password = $_POST['psw'];




$sql = "SELECT * from Users WHERE Name = '$name' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        //found a user

    while($row = $result->fetch_assoc()) {
        //accessing variables  
        //echo "Name: " . $row["Name"]. " - Password: " . $row["Password"]. " <br>";
        session_start();
        $_SESSION["user_name"] = $row["Name"];	
        $_SESSION["user_phone"] = $row["Phone"];
        $_SESSION["designation"] = $row["Designation"]; 
        $_SESSION["category"] = $row["Category"]; 
        $_SESSION["authenticated"] = 1;

$_SESSION["Attempt to murder"]="307$";
$_SESSION["307$"]="murder";

$_SESSION["Dowry death"]="304B$";
$_SESSION["304B$"]="murder";

$_SESSION["Causing death by negligence"]="304A$";
$_SESSION["304A$"]="murder";

$_SESSION["Attempt to commit suicide"]="309$";
$_SESSION["309$"]="murder";

$_SESSION["Causing miscarriage"]="312$";
$_SESSION["312$"]="murder";



$_SESSION["Causing miscarriage"]="390$";
$_SESSION["390$"]="theft & robbery";

$_SESSION["Dacoity"]="391$";
$_SESSION["391$"]="theft & robbery";

$_SESSION["Theft"]="378$";
$_SESSION["378$"]="theft & robbery";

$_SESSION["Extortion"]="383$";
$_SESSION["383$"]="theft & robbery";

$_SESSION["Cheating"]="415$";
$_SESSION["415$"]="theft & robbery";


$_SESSION["Marrying again during lifetime of husband or wife"]="494$";
$_SESSION["494$"]="domestic affairs";

$_SESSION["Adultery"]="497$";
$_SESSION["497$"]="domestic affairs";

$_SESSION["Domestic violence"]="498A$";
$_SESSION["498A$"]="domestic affairs";




$_SESSION["Bribery"]="171B$";
$_SESSION["171B$"]="elections";

$_SESSION["Influence at elections"]="171C$";
$_SESSION["171C$"]="elections";

$_SESSION["Personation at elections"]="171D$";
$_SESSION["171D$"]="elections";

$_SESSION["False statemen"]="171G$";
$_SESSION["171G$"]="elections";

$_SESSION["Illegal payments"]="171H$";
$_SESSION["171H$"]="elections";



$_SESSION["Public nuisance"]="268$";
$_SESSION["268$"]="public health & safety";

$_SESSION["Sale of noxious food or drink"]="273$";
$_SESSION["273$"]="public health & safety";

$_SESSION["Adulteration of drugs"]="274$";
$_SESSION["274$"]="public health & safety";

$_SESSION["Obscene acts and songs"]="294$";
$_SESSION["294$"]="public health & safety";

$_SESSION["Negligent conduct with respect to animal"]="289$";
$_SESSION["289$"]="public health & safety";

        include('fir_.php');
    }

} 



else {

    echo "Incorrect credentials.";
}



$conn->close();


?>