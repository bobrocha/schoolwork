<!DOCTYPE html>
<html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: calibri;
}

#container {
    margin: 0 auto;
    width: 512px;
    background-color: cyan;
}

#header h1, #footer p {
    text-align: center;
}

ul {
    list-style-type: none;
}

li {
    float: left;
}

a:link, a:visited {
    display:block;
    width: 128px;
    font-weight: bold;
    color: #fff;
    background-color: #ccc;
    color: black;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
}

#content {
    padding: 2em;
}

#footer {
    border-top: 1px solid black;
    padding: 0.3em;
}

</style>
</head>
<body>
<div id ="container">

    <div id="header">
        <h1>Bay News 8</h1>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>