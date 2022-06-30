@extends("layout.main")

@section("main")

<div class="login-page">
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="post" action="/login">
              @csrf
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="/img/now-logo.png" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control @error ("email") is-invalid @enderror" placeholder="Email ...">
                  @error ("email")
                      <div id="validationServerUsernameFeedback" class="invalid-feedback">
                          {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" name="password" placeholder="Password ..." class="form-control" />
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection