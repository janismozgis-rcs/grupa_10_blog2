<?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger">
        Invalid username or password
    </div>
<?php } ?>
<form method="POST" action="loginAction.php">
    <div class="row">
        <div class="col-md-3">
            <label for="username">Username</label>
        </div>
        <div class="col-md-9">
            <input class="form-control" type="text" id="username" name="username">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="password">Password</label>
        </div>
        <div class="col-md-9">
            <input class="form-control" type="password" id="password" name="password">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="login" class="btn btn-success">
        </div>
    </div>
</form>