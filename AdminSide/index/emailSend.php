<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email Form</title>
    <!-- Include Bootstrap for styling (optional) -->
    <link rel="stylesheet" href="./styles.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>

<h2>Send an Email to all customers</h2>
<div id="emailForm">
    <form action="send_email.php" method="post" class="emailForm">
        <div>
            <label for="subject">Subject:</label> <br>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="message">Message:</label> <br>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
</div>


<script src="./script.js"></script>
<script>
    openModal('emailForm')
</script>
</body>
</html>
