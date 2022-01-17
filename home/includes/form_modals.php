<style>
  .feedback{
    font-size: .8rem;
    display: none;
  }
</style>

<!-- customer Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header border-bottom-0">
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-title text-center">
        <h4 class="text-center title text-uppercase text-info">Login as Customer</h4>
        </div>
        <div class="d-flex flex-column text-center">
        <form class = 'login' action = "" method = "post" autocomplete = "off">
            <div class="form-group">
              <input type="email" class="form-control text-info" name="email" class="email"placeholder="Your email address...">
              <span class="feedback text-danger pull-left mb-3 ml-1">sfdfgfgf</span>
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" name="password" class="password" placeholder="Your password...">
              <span class="feedback text-danger pull-left mb-3 ml-1">sfdfgfgf</span>
            </div>
            <div class="custom-control custom-checkbox mb-2 pull-left">
              <input type="checkbox" class="custom-control-input" name="remberMe" id="rememberMe">
              <label class="custom-control-label" for="rememberMe">Remeber Me</label>
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round">Login</button>
          </form>
        </di>
      </div>
      <div class="modal-footer border-bottom-0">
          <span><a href="" class = "text-info">forgot password?</a></span>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>
<!-- /customer Login Modal -->

<!-- Admin Login Modal -->
<div class="modal fade" id="adminloginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header border-bottom-0">
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-title text-center">
        <h4 class="text-center title text-uppercase text-info">Login as Admin</h4>
        </div>
        <div class="d-flex flex-column text-center">
        <form class = 'login' action = "" method = "post" autocomplete = "off">
            <div class="form-group">
              <input type="email" class="form-control text-info" id="email1"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" id="password" placeholder="Your password...">
            </div>
            <div class="custom-control custom-checkbox mb-2 pull-left">
              <input type="checkbox" class="custom-control-input" id="adminrememberMe">
              <label class="custom-control-label" for="adminrememberMe">Remeber Me</label>
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round btn_login">Login</button>
          </form>
        </di>
      </div>
      <div class="modal-footer border-bottom-0">
          <span><a href="" class = "text-info">forgot password?</a></span>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>
<!-- /Admin Login Modal -->

<!-- Customer Register  -->
<div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header border-bottom-0">
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-title text-center">
        <h4 class="text-center title text-uppercase text-info">Register As Customer</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form class = 'register' action = "" method = "post" autocomplete = "off">
            <div class="form-group">
              <input type="email" class="form-control text-info" name = "email" id="email"placeholder="Your email address" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" name = "password" id="password1" placeholder="Your password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" name = "password2" id="password2" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round">Register</button>
          </form>
        </di>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>

<!-- /Customer Register  -->


<!-- Store Login Modal -->
<div class="modal fade" id="storeloginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header border-bottom-0">
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-title text-center">
        <h4 class="text-center title text-uppercase text-info">Login to Store</h4>
        </div>
        <div class="d-flex flex-column text-center">
        <form class = 'login' action = "" method = "post" autocomplete = "off">
            <div class="form-group">
              <input type="text" class="form-control text-info" name="brand"placeholder="Your Brand Name" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" name="password" placeholder="Store password..." required>
            </div>
            <div class="custom-control custom-checkbox mb-2 pull-left">
              <input type="checkbox" class="custom-control-input" id="storerememberMe" name = "remember">
              <label class="custom-control-label" for="storerememberMe">Remeber Me</label>
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round" name = "store_login">Login</button>
          </form>
        </di>
      </div>
      <div class="modal-footer border-bottom-0">
          <span><a href="" class = "text-info">forgot password?</a></span>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>
<!-- /Store Login Modal -->
<?php   store_login(); ?>
<style>

    .container {
    padding: 2rem 0rem;
    }

    @media (min-width: 576px){
    .modal-dialog {
        max-width: 400px;
        
        .modal-content {
        padding: 1rem;
        }
    }
    }

    .modal-header {
    .close {
        margin-top: -1.5rem;
    }
    }

    .form-title {
    margin: -2rem 0rem 2rem;
    }

    .btn-round {
    border-radius: 3rem;
    }

    .delimiter {
    padding: 1rem;  
    }

    .social-buttons {
    .btn {
        margin: 0 0.5rem 1rem;
    }
    }

    .signup-section {
    padding: 0.3rem 0rem;
    }
</style>
<script>
    $(document).ready(function(){
      $('#loginModal').modal('show');

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
});
</script>

