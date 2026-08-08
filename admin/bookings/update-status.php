<?php require_once __DIR__ . '/../includes/header.php'; ?>
<h2>Update Booking Status</h2>
<form class="auth-form">
    <select>
        <option>Pending</option>
        <option>Confirmed</option>
        <option>Completed</option>
        <option>Cancelled</option>
    </select>
    <button type="submit">Update Status</button>
</form>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
