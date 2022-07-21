<!--DOCTYPE html-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf=8">
        <title></title>
    </head>

    <body>

        <form action="functions.php" method="get">
            <input type="text" name="num01" placeholder="Number 1">
        <!--
            creates a form in the HTML file
            the placeholder is there until the user enters some data
            the name is what the variable you save the data under is called
        -->
        <select name="oper">
            <label>choose operation!</label>
            <option value="add">add</option>
            <option value="add">subtract</option>
        <!-- adds the options for the user to choose in the form-->
     </select>
     <input type="text" name="num02" placeholder="Number 2">
     <!--this is the second number -->

     <button type ='submit'>calculate!</button>


    </form>
</body>
</html>


