<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];

    // Basic validation
    if (empty ($name) || empty($email) || empty($nim)){
        echo "Please fill in all fields.";
    } else{
        // Sanitize input to prevent potential issues
        $sanitizedName = htmlspecialchars($name);
        $sanitizedNim = htmlspecialchars($nim);
        $sanitizedEmail = htmlspecialchars($email);

        // Prepare data for saving 
        $data = "Name: " . $sanitizedName ."NIM: ". $sanitizedNim .", Email: ". $sanitizedEmail . "\n";

        // File path
        $filename = "form_data.txt";

        // Open the file for appending (create if it doesn't exist)
        $file = fopen($filename, "a");

        if ($file) {
            // Write the data to the file
            fwrite($file, $data);

            // Close the file
            fclose($file);
            
            echo "Data saved successfully.";
        } else {
            echo "Error saving data to file.";
        }

    }
}
