<section>
  <section>
    <div class="p-2">
      <div class="row">
        <div class="col-6">
          <img src="assets/img/singup_img.png" alt="SingUp Img" class="img-fluid ml-4 mt-5">
        </div>
        <div class="col-6 mt-5">
          <form class="form-group w-75 ml-5 " action="?controller=user&method=store" method="post" enctype="multipart/form-data">
            <h2>Sing Up</h2>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="name" class="form-control" id="name" placeholder="Name" name="name">
              <small class="form-text text-muted">Dont' Forget your password</small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              <small class="form-text text-muted">Dont' Forget your password</small>
            </div>
            <div class="form-group">
              <label for="password_repeat">Confirm Password</label>
              <input type="password" class="form-control" id="password_repeat" placeholder="Repeat your Password" name="password_repeat">
            </div>
            <div class="form-group">
              <label for="File">Profile Picture</label>
              <input type="file" class="form-control-file" id="File" name="file">
              <small id="fileHelp" class="form-text text-muted">Select your profile picture.</small>
            </div>
            <fieldset class="form-group">
              <legend>Role</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="id_rol" id="id_rol" value="0">
                  Admin
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="id_rol" id="id_rol" value="1">
                  Regular User
                </label>
              </div>
            </fieldset>
            <button class="btn btn-primary" type="submit" name="button">Sing Up</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</section>