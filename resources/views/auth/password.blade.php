<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Forget Password | Best Assignment Experts</title>
<meta name="description" content="Best Assignment Experts | Reset  Password">
@include('layout.header')


<main>
    <section class="fullwidth-background bg-2">
        <div class="grid-row">
            
            <div class="login-block" style="max-width:550px;">                   
                <a href="/users/login"  class="cws-button bt-color-3 border-radius">Back</a>
                <br>
                <div >
                    {!! Form::open(["url"=>"/password/email"]) !!}
                    <table class ="table" >
                        @if (session('status'))
                        <p class="info-boxes confirmation-message">{{ session('status') }}</p>
                        @endif
                        @if(count($errors)>0)
                        <tr>
                            <td colspan =" 2">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error}} </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        @endif

                        <tr>

                        <h1 class="well text-center" style="margin-top:10px;margin-bottom:20px;"> Send password Reset Link</h1>
                        <hr>
                        <div class="input-group form-group" style="margin:20px;">
                            <input  class="form-control login-input" type='email' name="email" placeholder="Enter your E-mail Address " style="
                                    width: 100%;
                                    border: 1px solid #e9e9e9;
                                    padding: 10px;
                                    ">
                            <span class="input-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit"  class="button-fullwidth cws-button bt-color-3 border-radius">Send Password Reset Link</button>


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
