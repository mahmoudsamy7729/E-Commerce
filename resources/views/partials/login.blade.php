<link rel="stylesheet" href="{{asset('css/login.css')}}">
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <div  class="container-fluid">
                <div class="row">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col logo d-flex justify-content-center">
                                <span>TAN</span><span>GO</span>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div id="passwordHelp" class="form-text"><a href="#">forgot password ? </a></div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input ms-edit" id="exampleCheck1">
                                <label class="form-check-label ms-1" for="exampleCheck1">remember me</label>
                            </div>
                            <a href=""><button type="submit" class="btn btn-primary col-12 mb-3" name="login">SUBMIT</button></a>
                            <hr>
                        </div>
                    </form>
                    <a href="#" >
                        <button type="submit" class="btn btn-primary col-12 mb-3 " style="background-color: #3b5998;font-weight: 500;"><i class="fab fa-facebook-f me-2"></i> LOGIN WITH FACEBOOK</button>
                    </a>
                    <a href="#">
                        <button type="submit" class="btn btn-primary col-12 " style="background-color: #AA3A3A;font-weight: 500;"><i class="fab fa-google me-2"></i> LOGIN WITH GOOGLE</button>
                    </a>
                </div>
                
                
            </div>
        </div>
      </div>
    </div>
  </div>