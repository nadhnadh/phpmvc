<!----------------------- Main Container -------------------------->
<div class="panel-body" style="padding-top: 30px">

        </div> 
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <div class="header-text mb-3">
                     <h2>Login</h2>
                </div>
                <form action="<?= BASEURL ?>Log/login" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="username" value="">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                <div class="input-group py-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" value="login" name='login' type="submit">Login</button>
                </div>
                <div class="links">
                    Don't have account? <a href="<?= BASEURL; ?>/register/index/">Register here!</a>
                </div>
                </form>
         
      </div>
    </div>