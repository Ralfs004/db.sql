
<?php 
require "components/head.php";
require "components/navbar.php";
?>


<h1>create</h1>

<form method="POST">
    <label>Title:
        <input name="suns"/>
    </label>
    <label>Category ID:
        <input name="category_id"/>
    </label>
    <button>Save</button>
</form>

<ul>
    <li> 1 - sport </li>
    <li> 2 - music </li>
    <li> 3 - food </li>
</ul>

<?php require "components/footer.php" ?>