<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Demo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Set your desired background color */
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .downloadForm {
            max-width: 400px;
            width: 100%;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            background-color: #C2DEF5; 
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?> 

<div class="container mt-5">
    <div class="downloadForm">
        <h2 class="mb-4">Download Demo</h2>

        <!-- Download Form -->
        <form action="downloads.php" method="post" id="downloadForm">
            <div class="mb-3">
                <label for="email" class="form-label">Enter Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?> <!-- Include the footer -->

<!-- Bootstrap JS and Popper.js (required for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
