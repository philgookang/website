<div class="row">
    <div class="col-md-8">

        <h3>Login</h3>

        <form method="POST" action="/action/login/attempt/">

            <?php if (isset($_GET['attempt']) && ($_GET['attempt'] == 'failed')) { ?>

                <br>
                Login failed!
                <br>
                <br>

            <?php } ?>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value=""/>
            </div>
            <!--/.form-group-->

            <div class="form-group">
                <label for="pasword">Password</label>
                <input type="password" class="form-control" name="password" value=""/>
            </div>
            <!--/.form-group-->

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login"/>
            </div>
            <!--/.form-group-->
        </form>
    </div>
