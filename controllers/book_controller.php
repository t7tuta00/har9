<?php
include "../models/book_model.php";
include "../views/book_view.php";
$books=get_books();
show_books($books);
?>
