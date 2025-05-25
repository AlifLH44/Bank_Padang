<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Cetak</title>
</head>
<body>
    
<form method="get">
  <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
  <div class="relative">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
      </svg>
    </div>
    <input type="search" id="default-search" name="searchTerm" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Gunakan Email Yang Anda Pakai Saat Pengisian Contact" required>
    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
  </div>
</form>

<img class="mx-auto h-10 w-auto" src="assets/logo.png" alt="Your Company">


<?php
require "functions.php";

// Check if the 'searchTerm' key is present in the URL
if (isset($_GET['searchTerm'])) {
    // Get the search term from the input field
    $searchTerm = $_GET['searchTerm'];

    // Prepare the SQL query with a prepared statement
    $sql = "SELECT * FROM customers WHERE email LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameter
    $searchTerm = '%' . $searchTerm . '%';  // Add wildcards for partial matching
    mysqli_stmt_bind_param($stmt, "s", $searchTerm);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Get the result set
    $result = mysqli_stmt_get_result($stmt);

    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        // Fetch all results as an associative array
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Display the results
        echo "<table>";
        echo "Tiket Anda : <br>
        <br> ";
        

        foreach ($products as $product) {
            echo "<tr>";
            echo " class='text-sm font-medium text-gray-700' <td>Nama Depan: " . $product['nama_depan'] . "<br>Nama Belakang: " . $product['nama_belakang'] . "<br>Email: " . $product['email'] . "<br>Tanggal: " . $product['tanggal'] . "<br>Waktu: " . $product['waktu'] . "<br>Message: " . $product['message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // Handle the case where 'searchTerm' is not set
    echo "No search term provided.";
}


// Close the database connection
mysqli_close($conn);
?>

<button id="printButton" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Print</button>
<script>

  document.getElementById('printButton').addEventListener('click',function(){
    window.print();
  });

  
</script>
</body>
</html>