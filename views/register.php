<h1 style="text-align:center;margin-top: 50px">Register a new account</h1>

<form action="/register" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="re-password" class="form-label">Confirm password</label>
        <input type="password" class="form-control" id="re-password" name="re_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
