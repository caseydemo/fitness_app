<? require('partials/head.php'); ?>

<h1>All Users</h1>

<ul>
<?
foreach ($users as $user) {
    echo '<li>' . $user['name'] . '</li>';
}
?>
</ul>


<form method="POST" action="/fitness_app/users">
    <input name="name"></input>
    <button type="submit" >Submit</button>
</form>

<? require 'partials/footer.php'; ?>