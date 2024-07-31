<hr>
<p>Оставьте свой отзыв</p>
<form action="<?php echo $form_action; ?>" method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="text" name="title" placeholder="Enter your title">
    <input type="text" name="email" placeholder="Enter your email">
    <button type="submit">Submit</button>
</form>
<?php if ($_GET["success"]) {
    echo "<p>Record saved successfully</p>";
}
?>
