<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Reset Password  | Best Assignment Experts</title>
<meta name="description" content="Best Assignment Experts | Reset your Password">

@include('layout.header')
<main>
    <section class="fullwidth-background bg-2">
        <div class="grid-row">
            <div class="login-block" style="max-width:450px;">
                <div class="logo">
	        <img src="/theme/img/images/logo.jpg" data-at2x="/theme/img/images/logo.jpg" alt="Best Assignment Experts" style="width: 250px;"></div>
                <div>
                   <h3 class="well text-center" style="margin-top:10px;margin-bottom:20px;"> Reset Your Password</h3>
                                <hr>
                    {!! Form::open(array("url"=>"/password/reset","method" =>"POST")) !!}
                        {!! Form::hidden("token",$token) !!}
                    <table class=" table">
                        @if(count($errors)>0)
                        <tr>
                            <td colspan=" 2">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>
                                            {{ $error}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <div class="input-group form-group" style="margin:10px;">
                                <input class="form-control login-input" name="email" placeholder="Enter your E-mail Address " style="
    width:100%;
    border: 1px solid #e9e9e9;
    padding: 10px;
" type="email">
                                    <span class="input-icon">
                                        <i class="fa fa-envelope">
                                        </i>
                                    </span>
                                </input>
                            </div>
                            <div class="input-group form-group" style="margin:10px;">
                                <input class="form-control login-input" name="password" placeholder="Enter Your New Password" style="
    width:100%;
    border: 1px solid #e9e9e9;
    padding: 10px;
" type="password">
                                    <span class="input-icon">
                                        <i class="fa fa-lock">
                                        </i>
                                    </span>
                                </input>
                            </div>
                            <div class="input-group form-group" style="margin:10px;">
                                <input class="form-control login-input" name="password_confirmation" placeholder="Confirm Your Password" style="
    width:100%;
    border: 1px solid #e9e9e9;
    padding: 10px;
" type="password">
                                    <span class="input-icon">
                                        <i class="fa fa-unlock">
                                        </i>
                                    </span>
                                </input>
                            </div>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="button-fullwidth cws-button bt-color-3 border-radius" type="submit">
                                    Reset Password
                                </button>
                            </td>
                        </tr>
                    </table>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
</main>
@include('layout.footer')

