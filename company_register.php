<!DOCTYPE html>
<html>
<head>
    <title>Company Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Company Registration – NFSU Dharwad</h2>

<form method="POST" action="">
    <label>Company Name</label><br>
    <input type="text" name="company_name" required><br><br>

    <label>HR Name</label><br>
    <input type="text" name="hr_name" required><br><br>

    <label>HR Email</label><br>
    <input type="email" name="hr_email" required><br><br>

    <label>HR Phone</label><br>
    <input type="text" name="hr_phone" required><br><br>

    <label>Job Role</label><br>
    <input type="text" name="job_role" required><br><br>

    <label>Eligibility Criteria</label><br>
    <textarea name="eligibility" required></textarea><br><br>

    <label>Package (CTC)</label><br>
    <input type="text" name="package"><br><br>

    <label>Job Location</label><br>
    <input type="text" name="location"><br><br>

    <label>Expected Visit Date</label><br>
    <input type="date" name="visit_date"><br><br>

    <label>Job Description</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit" name="submit">Register Company</button>
</form>

</body>
</html>
