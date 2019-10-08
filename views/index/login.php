  <section>
    <div class="p-5 m-auto">
      <div class="row">
        <div class="col-6">
          <img src="assets/img/login_img.png" alt="Login Img" class="img-fluid">
        </div>
        <div class="col-6 mt-5">
          <div class="ml-5 pl-5 mt-5">
            <h2>Login</h2>
            <form class="form-group w-75" action="?controller=security&method=login" method="post">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <small class="form-text text-muted">We'll never share your password with anyone else.</small>
              </div>
              <button class="btn btn-primary" type="submit" name="button">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>