<h1>XSS</h1>
<form method="post" action="<?echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

</form>