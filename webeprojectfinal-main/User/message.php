<?php
session_start();
if (isset($_SESSION['message'])) {
?>
    <div class="alert alert-warning alert-dimissible fade show" role="alert">
        <strong></strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['message']);
}
?>