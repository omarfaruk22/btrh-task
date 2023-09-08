<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Login form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5">
                <form class="mb-3 mt-md-4" action="{{Route('logedin')}}" method="post">
                  <h2 class="fw-bold mb-2 text-uppercase ">BTRH Task</h2>
                  <p class=" mb-5">Please enter your login and password!</p>
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label ">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                    @error('email')
                    {{ $message }}
                  @enderror
                </span>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="*******">
                    @error('password')
                    {{ $message }}
                  @enderror
                  </div>
                  <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                  <div class="d-grid">
                    <button class="btn btn-outline-dark" type="submit">Login</button>
                  </div>
                </form>
                <div>
                  <p class="mb-0  text-center">Don't have an account? <a href="{{Route('register')}}" class="text-primary fw-bold">Register</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>