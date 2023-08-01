<div class="card bg-authentication rounded-0 mb-0">
    <div class="row m-0">
        {{-- <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
            <img src="../../../app-assets/images/pages/login.png" alt="branding logo">
        </div> --}}
        <div class="{{--col-lg-6--}} col-12 p-0">
            <div class="card rounded-0 mb-0 px-2">
                <div class="card-header pb-1">
                    <div class="card-title">
                        <h4 class="mb-0">Login</h4>
                    </div>
                </div>
                <p class="px-2">Welcome back, please login to your account.</p>
                
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="card-content">
                    <div class="card-body pt-1">
 
                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                <input type="text" class="form-control" wire:model="email" >
                                <div class="form-control-position">
                                    <i class="feather icon-user"></i>
                                </div>
                                <label for="user-name">Username</label>
                            </fieldset>
                            @error('email') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            <fieldset class="form-label-group position-relative has-icon-left">
                                <input type="password" class="form-control" wire:model="password">
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                                <label for="user-password">Password</label>
                            </fieldset>
                            @error('password') <div class="alert alert-danger" role="alert">
                                <p class="mb-0">{{ $message }} </p>
                            </div>   
                            @enderror 
                            <div class="form-group d-flex justify-content-between align-items-center">
                                {{-- <div class="text-left">
                                    <fieldset class="checkbox">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Remember me</span>
                                        </div>
                                    </fieldset>
                                </div> --}}
                                {{-- <div class="text-right"><a href="auth-forgot-password.html" class="card-link">Forgot Password?</a></div> --}}
                            </div>
                            <button wire:click="login()" class="btn btn-primary float-right btn-inline">Login</button>
                     
                    </div>
                </div>
                <div class="login-footer">
                    <div class="divider">
                     </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>