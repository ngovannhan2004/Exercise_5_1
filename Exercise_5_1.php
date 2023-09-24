
<!doctype html>
<html lang="en">
<head>
    <title>Future Value Calculator</title>

</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    main {
        display: block;
        width: 450px;
        margin: 0 auto;
        padding: 1em;
        background: white;
        border: 2px solid navy;
    }
    h1 {
        margin-top: 0;
        color: navy;
    }
    label {
        width: 10em;
        float: left;
        padding-right: 1em;
        padding-bottom: .5em;
    }
    #data input {
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }
    #buttons input {
        float: left;
        margin-bottom: .5em;
    }
    br {
        clear: left;
    }
    .error {
        color: red;
        font-weight: bold;
    }
</style>
<body>
<main>
    <h1>Future Value Calculator</h1>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment" value="">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate" value="">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years" value="">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
</main>

</body>
</html>