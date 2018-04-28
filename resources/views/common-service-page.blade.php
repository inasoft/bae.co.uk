<!DOCTYPE HTML5>
<html lang="en">
<head>
  @include('layout.header')

@show
    @yield('head')
<span style="visibility: visible; position: fixed; cursor: pointer; z-index: 2147483637;  width: 110px; height: 60px; left: 1174px; top: 345px; color: #0000FF; text-decoration: underline; cursor: pointer;" id="phplive_btn_1476310056" onclick="phplive_launch_chat_0(0)"></span>
<script type="text/javascript">

(function() {
var phplive_e_1476310056 = document.createElement("script") ;
phplive_e_1476310056.type = "text/javascript" ;
phplive_e_1476310056.async = true ;
phplive_e_1476310056.src = "/t2.phplivesupport.com/Anil3018/js/phplive_v2.js.php?v=0|1476310056|0|" ;
document.getElementById("phplive_btn_1476310056").appendChild( phplive_e_1476310056 ) ;
})() ;

</script> 
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<style>
.animationload 
 {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 999999;
 }
 .animationload .loader 
 {
  width: 50px;
  height: 50px;
  font-size: 24px;
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  background-image: url('theme/rs-plugin/assets/loader.gif');
  background-repeat: no-repeat;
  background-position: center;
  margin: -25px 0 0 -25px;
 }</style>
 
 
 </head>

    
    
    
   <body> 
  
 

  
     
  
        <!-- / page header -->
        <!-- revolution slider -->
         @if(Session::has('site_mail_success'))
                                     <div class="info-boxes confirmation-message" id="confirm"><span>{{session()->get('site_mail_success')}}</span></div>
         @endif
          @if(Session::has('site_mail_error'))
                                     <div class="message_box error-box" id="confirm"><span>{{session()->get('site_mail_error')}}</span></div>
         @endif
         @if(Session::has('place_order_exception'))
                                     <div class="message_box error-box" id="confirm"><span>{{session()->get('place_order_exception')}}</span></div>
         @endif
         
        <div class="tp-banner-container" style="z-index: -1;">
         <div class="tp-banner-slider">
                <ul>
                     @show
                     @yield('image')
                 
                   
                </ul>
            </div>
           
        </div>




        <!-- <div style="position: absolute;top:72%; width: 50%;left:48%;" class="place-order-mobile-hide">


       <a href="/place-order" class="cws-button border-radius">Order Now <i class="fa fa-angle-double-right"></i></a>


       
       </div> -->
        <!-- / revolution slider -->
        <hr class="divider-color">
        <!-- content -->
        <div id="home" class="page-content padding-none">
           
            <hr class="divider-color" />
         
            
            
          
    <section class="padding-section">
      <div class="grid-row clear-fix">
        <h2 class="center-text">Our Services</h2>
        <div class="grid-col-row">
          <div class="grid-col grid-col-3">
             @show
             @yield('content1')
          </div>
          <div class="grid-col grid-col-3">
              @show
             @yield('content2')
          </div>
          <div class="grid-col grid-col-3">

             @show
             @yield('content3')
          </div>
          <div class="grid-col grid-col-3">
             @show
             @yield('content4')
          </div>
        </div>
      </div>
    </section>
            <hr class="divider-color"/>
            <!-- paralax section -->
            '
            <!-- paralax section -->
            <!-- parallax section -->
           
            <!-- parallax section -->
            <!-- section -->
                 <main ng-app="myApp" ng-controller="myCtrl">
    <section class="signup-placeorder fullwidth-background bg-2" >
        <div class="grid-row">
            <div class="login-block" style="max-width: 500px;">
                <div class="logo" style="margin: 0px">
                   
                    <h2>PLACE NEW ORDER</h2>
                </div>

                <form class="login-form" ng-if="showPlaceOrderForm == 'true'">
                    <div class="form-group">
                        <input type="text" class="login-input" placeholder="Email" name="place_order_email" ng-model="place_order.email">
                        <span class="input-icon">
                             <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="login-input" placeholder="Subject" name="place_order_subject" ng-model="place_order.subject">
                        <span class="input-icon">
                            <i class="fa fa-book"></i>
                        </span>

                    </div>
                    <div class="form-group">
                        <input type="text"  class="login-input" placeholder="Due date" name="place_order_duedate" ng-model="place_order.duedate" datepicker>
                        <span class="input-icon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        
                    </div>
                    <div class="form-group ">

                        <div class="grid-buttons ">
                        <div class="row" style="display: inline-flex;/*! width: -27%; */">
                            <button ng-click="count = count - 1" ng-disabled="count < 1" class="cws-button border-radius icon-left col-sm-1" style="min-width: 2px;"><i class="fa fa-minus"></i></button>
                            
                            <input class="login-input col-sm-10 ng-pristine ng-valid" placeholder="Pages" name="count" ng-model="count" type="text" numbers-only>

                            <button ng-click="count = count + 1" class="cws-button border-radius icon-right col-sm-1" style="min-width: 10px;margin: auto;"><i class="fa fa-plus"></i></button>

                            </div>
                           @{{count * 250}}  Words

                        </div>
                        

                    </div>
                    
                    <button ng-click="placeOrderDetails(place_order, count)" class="button-fullwidth cws-button bt-color-3 border-radius">Submit</button>
                </form>

                <form class="login-form" name="place-order-signup" ng-if="showPlaceOrderForm != 'true'" action="/create-user-from-place-order-page" method="POST" enctype="multipart/form-data" novalidate="">
                    <div class="form-group">
                        <input type="file" class="login-input" placeholder="Choose a File" name="uploaded_file1" required="">
                        <!-- <span class="input-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span> -->
                    </div>
                    <div class="form-group">
                        <label>Select Reference</label>
                        <select type="text" class="login-input" placeholder="Reference" name="place_order_reference" value="Select Reference">
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>

                                        <option value="AGLC">AGLC</option>

                                        <option value="APA">APA</option>

                                        <option value="BMJ">BMJ</option>

                                        <option value="Chicago">Chicago</option>

                                        <option value="Footnotes">Footnotes</option>

                                        <option value="Footnotes and bibliography">Footnotes and bibliography</option>

                                        <option value="Harvard">Harvard</option>

                                        <option value="MHRA">MHRA</option>

                                        <option value="MLA">MLA</option>

                                        <option value="Open">Open</option>

                                        <option value="OSCOLA">OSCOLA</option>

                                        <option value="Turabian">Turabian</option>

                                        <option value="Vancouver">Vancouver</option>

                        </select>
                    </div>
                    
                    <div class="form-group" style="display: flex;">



                  <select name="country_code" value="{{ Input::old('country_code') }}" class="setheight dara form-control" ng-init="initialize()" style="width: 60%;height: 42px;margin-right: 10px;"> 
                     <option value="+1" {{ ((Input::old("country_code"))=="+1")? "selected":""  }}>USA
                    <option value="+44" {{ ((Input::old("country_code"))=="+44")? "selected":""  }}>UK 
                    
                    <option value="+213" {{ ((Input::old("country_code"))=="+213")? "selected":""  }}>Algeria 
                    <option value="+376" {{ ((Input::old("country_code"))=="+376")? "selected":""  }}>Andorra  
                    <option value="+244" {{ ((Input::old("country_code"))=="+244")? "selected":""  }}>Angola
                    <option value="+1264" {{ ((Input::old("country_code"))=="+1264")? "selected":""  }}>Anguilla 
                    <option value="+1268" {{ ((Input::old("country_code"))=="+1268")? "selected":""  }}>Antigua &amp; Barbuda 
                    <option value="+599" {{ ((Input::old("country_code"))=="+599")? "selected":""  }}>Antilles (Dutch)  
                    <option value="+54" {{ ((Input::old("country_code"))=="+54")? "selected":"" }}>Argentina 
                    <option value="+374" {{ ((Input::old("country_code"))=="+374")? "selected":""  }}>Armenia 
                    <option value="+297" {{ ((Input::old("country_code"))=="+297")? "selected":""  }}>Aruba 
                    <option value="+247" {{ ((Input::old("country_code"))=="+247")? "selected":""  }}>Ascension Island 
                    <option value="+61" {{ ((Input::old("country_code"))=="+61")? "selected":""  }}>Australia 
                    <option value="+43" {{ ((Input::old("country_code"))=="+43")? "selected":""  }}>Austria 
                    <option value="+994" {{ ((Input::old("country_code"))=="+994")? "selected":""  }}>Azerbaijan 
                    <option value="+1242" {{ ((Input::old("country_code"))=="+1242")? "selected":""  }}>Bahamas 
                    <option value="+973" {{ ((Input::old("country_code"))=="+973")? "selected":""  }}>Bahrain 
                    <option value="+880" {{ ((Input::old("country_code"))=="+880")? "selected":""  }}>Bangladesh 
                    <option value="+1246" {{ ((Input::old("country_code"))=="+1246")? "selected":"" }}>Barbados 
                    <option value="+375" {{ ((Input::old("country_code"))=="+375")? "selected":""  }}>Belarus 
                    <option value="+32" {{ ((Input::old("country_code"))=="+32")? "selected":""  }}>Belgium 
                    <option value="+501" {{ ((Input::old("country_code"))=="+501")? "selected":""  }}>Belize 
                    <option value="+229" {{ ((Input::old("country_code"))=="+299")? "selected":""  }}>Benin 
                    <option value="+1441" {{ ((Input::old("country_code"))=="+1441")? "selected":""  }}>Bermuda 
                     <option value="+975" {{ ((Input::old("country_code"))=="+975")? "selected":""  }}>Bhutan
                    <option value="+591" {{ ((Input::old("country_code"))=="+591")? "selected":""  }}>Bolivia 
                    <option value="+387" {{ ((Input::old("country_code"))=="+387")? "selected":""  }}>Bosnia Herzegovina  
                    <option value="+267" {{ ((Input::old("country_code"))=="+267")? "selected":""  }}>Botswana  
                    <option value="+55" {{ ((Input::old("country_code"))=="+55")? "selected":""  }}>Brazil  
                    <option value="+673" {{ ((Input::old("country_code"))=="+673")? "selected":"" }}>Brunei 
                    <option value="+359" {{ ((Input::old("country_code"))=="+359")? "selected":""  }}>Bulgaria 
                    <option value="+226" {{ ((Input::old("country_code"))=="+226")? "selected":"" }}>Burkina Faso 
                    <option value="+257" {{ ((Input::old("country_code"))=="+257")? "selected":""  }}>Burundi 
                    <option value="+855" {{ ((Input::old("country_code"))=="+855")? "selected":""  }}>Cambodia
                    <option value="+237" {{ ((Input::old("country_code"))=="+237")? "selected":""  }}>Cameroon 
                    <option value="+1" {{ ((Input::old("country_code"))=="+1")? "selected":"" }}>Canada 
                    <option value="+238" {{ ((Input::old("country_code"))=="+238")? "selected":""  }}>Cape Verde Islands 
                    <option value="+1345" {{ ((Input::old("country_code"))=="+1345")? "selected":""  }}>Cayman Islands 
                    <option value="+236" {{ ((Input::old("country_code"))=="+236")? "selected":""  }}>Central African Republic 
                    <option value="+56" {{ ((Input::old("country_code"))=="+56")? "selected":""  }}>Chile 
                    <option value="+86" {{ ((Input::old("country_code"))=="+86")? "selected":""  }}>China 
                    <option value="+57" {{ ((Input::old("country_code"))=="+57")? "selected":""  }}>Colombia 
                    <option value="+269" {{ ((Input::old("country_code"))=="+269")? "selected":""  }}>Comoros 
                    <option value="+242" {{ ((Input::old("country_code"))=="+242")? "selected":""  }}>Congo 
                    <option value="+682" {{ ((Input::old("country_code"))=="+682")? "selected":""  }}>Cook Islands
                    <option value="+506" {{ ((Input::old("country_code"))=="+506")? "selected":"" }}>Costa Rica 
                    <option value="+385" {{ ((Input::old("country_code"))=="+385")? "selected":""  }}>Croatia 
                    <option value="+53" {{ ((Input::old("country_code"))=="+53")? "selected":""  }}>Cuba 
                    <option value="+90392" {{ ((Input::old("country_code"))=="+90392")? "selected":""  }}>Cyprus North 
                    <option value="+357" {{ ((Input::old("country_code"))=="+357")? "selected":"" }}>Cyprus South 
                    <option value="+42" {{ ((Input::old("country_code"))=="+42")? "selected":"" }}>Czech Republic 
                    <option value="+45" {{ ((Input::old("country_code"))=="+45")? "selected":""  }}>Denmark 
                    <option value="+2463" {{ ((Input::old("country_code"))=="+2463")? "selected":""  }}>Diego Garcia 
                    <option value="+253" {{ ((Input::old("country_code"))=="+253")? "selected":""  }}>Djibouti 
                    <option value="+1809" {{ ((Input::old("country_code"))=="+1809")? "selected":"" }}>Dominica 
                    <option value="+1809" {{ ((Input::old("country_code"))=="+1809")? "selected":""  }}>Dominican Republic 
                    <option value="+593" {{ ((Input::old("country_code"))=="+593")? "selected":""  }}>Ecuador 
                    <option value="+20" {{ ((Input::old("country_code"))=="+20")? "selected":""  }}>Egypt 
                    <option value="+353" {{ ((Input::old("country_code"))=="+553")? "selected":""  }}>Eire 
                    <option value="+503" {{ ((Input::old("country_code"))=="+503")? "selected":""  }}>El Salvador
                    <option value="+240" {{ ((Input::old("country_code"))=="+240")? "selected":""  }}>Equatorial Guinea 
                    <option value="+291" {{ ((Input::old("country_code"))=="+291")? "selected":""  }}>Eritrea 
                    <option value="+372" {{ ((Input::old("country_code"))=="+372")? "selected":""  }}>Estonia 
                    <option value="+251" {{ ((Input::old("country_code"))=="+251")? "selected":""  }}>Ethiopia 
                    <option value="+500" {{ ((Input::old("country_code"))=="+500")? "selected":""  }}>Falkland Islands 
                    <option value="+298" {{ ((Input::old("country_code"))=="+298")? "selected":""  }}>Faroe Islands 
                    <option value="+679" {{ ((Input::old("country_code"))=="+679")? "selected":"" }}>Fiji 
                    <option value="+358" {{ ((Input::old("country_code"))=="+358")? "selected":""  }}>Finland 
                    <option value="+33" {{ ((Input::old("country_code"))=="+33")? "selected":"" }}>France 
                    <option value="+594" {{ ((Input::old("country_code"))=="+594")? "selected":""  }}>French Guiana 
                    <option value="+689" {{ ((Input::old("country_code"))=="+689")? "selected":""  }}>French  
                    <option value="+241" {{ ((Input::old("country_code"))=="+241")? "selected":""  }}>Gabon 
                    <option value="+220" {{ ((Input::old("country_code"))=="+220")? "selected":"" }}>Gambia 
                    <option value="+7880" {{ ((Input::old("country_code"))=="+7880")? "selected":""  }}>Georgia 
                    <option value="+49" {{ ((Input::old("country_code"))=="+49")? "selected":"" }}>Germany  
                    <option value="+233" {{ ((Input::old("country_code"))=="+233")? "selected":""}}>Ghana 
                    <option value="+350" {{ ((Input::old("country_code"))=="+350")? "selected":"" }}>Gibraltar
                    <option value="+30" {{ ((Input::old("country_code"))=="+30")? "selected":""  }}>Greece
                    <option value="+299" {{ ((Input::old("country_code"))=="+299")? "selected":""  }}>Greenland 
                    <option value="+1473" {{ ((Input::old("country_code"))=="+1473")? "selected":""  }}>Grenada  
                    <option value="+590" {{ ((Input::old("country_code"))=="+590")? "selected":""  }}>Guadeloupe 
                    <option value="+671" {{ ((Input::old("country_code"))=="+671")? "selected":""  }}>Guam 
                    <option value="+502" {{ ((Input::old("country_code"))=="+502")? "selected":"" }}>Guatemala 
                    <option value="+224" {{ ((Input::old("country_code"))=="+224")? "selected":""  }}>Guinea 
                    <option value="+245" {{ ((Input::old("country_code"))=="+245")? "selected":""  }}>Guinea - Bissau  
                    <option value="+592" {{ ((Input::old("country_code"))=="+592")? "selected":""  }}>Guyana 
                    <option value="+509" {{ ((Input::old("country_code"))=="+509")? "selected":""  }}>Haiti 
                    <option value="+504" {{ ((Input::old("country_code"))=="+504")? "selected":""  }}>Honduras 
                    <option value="+852" {{ ((Input::old("country_code"))=="+852")? "selected":""  }}>Hong Kong  
                    <option value="+36" {{ ((Input::old("country_code"))=="+36")? "selected":"" }}>Hungary 
                    <option value="+354" {{ ((Input::old("country_code"))=="+354")? "selected":""  }}>Iceland 
                    <option value="+91" {{ ((Input::old("country_code"))=="+91")? "selected":""  }}>India 
                    <option value="+62" {{ ((Input::old("country_code"))=="+62")? "selected":""  }}>Indonesia 
                    <option value="+98" {{ ((Input::old("country_code"))=="+98")? "selected":""  }}>Iran 
                    <option value="+964" {{ ((Input::old("country_code"))=="+964")? "selected":""  }}>Iraq 
                    <option value="+972" {{ ((Input::old("country_code"))=="+972")? "selected":""  }}>Israel  
                    <option value="+39" {{ ((Input::old("country_code"))=="+39")? "selected":""  }}>Italy 
                    <option value="+225" {{ ((Input::old("country_code"))=="+225")? "selected":"" }}>Ivory Coast 
                    <option value="+1876" {{ ((Input::old("country_code"))=="+1876")? "selected":""  }}>Jamaica  
                    <option value="+81" {{ ((Input::old("country_code"))=="+81")? "selected":""  }}>Japan 
                    <option value="+962" {{ ((Input::old("country_code"))=="+962")? "selected":""  }}>Jordan 
                    <option value="+7"{{ ((Input::old("country_code"))=="+7")? "selected":""  }}>Kazakhstan  
                    <option value="+254" {{ ((Input::old("country_code"))=="+254")? "selected":""  }}>Kenya 
                    <option value="+686" {{ ((Input::old("country_code"))=="+686")? "selected":"" }}>Kiribati 
                    <option value="+850" {{ ((Input::old("country_code"))=="+850")? "selected":""  }}>Korea North  
                    <option value="+82" {{ ((Input::old("country_code"))=="+82")? "selected":"" }}>Korea South 
                    <option value="+965" {{ ((Input::old("country_code"))=="+965")? "selected":""  }}>Kuwait 
                    <option value="+996" {{ ((Input::old("country_code"))=="+996")? "selected":""  }}>Kyrgyzstan 
                    <option value="+856" {{ ((Input::old("country_code"))=="+856")? "selected":""  }}>Laos 
                    <option value="+371" {{ ((Input::old("country_code"))=="+371")? "selected":"" }}>Latvia 
                    <option value="+961" {{ ((Input::old("country_code"))=="+961")? "selected":""  }}>Lebanon 
                    <option value="+266" {{ ((Input::old("country_code"))=="+266")? "selected":""  }}>Lesotho 
                    <option value="+231" {{ ((Input::old("country_code"))=="+231")? "selected":""  }}>Liberia 
                    <option value="+218" {{ ((Input::old("country_code"))=="+218")? "selected":""  }}>Libya 
                    <option value="+417" {{ ((Input::old("country_code"))=="+417")? "selected":""  }}>Liechtenstein 
                    <option value="+370" {{ ((Input::old("country_code"))=="+370")? "selected":"" }}>Lithuania 
                    <option value="+352" {{ ((Input::old("country_code"))=="+352")? "selected":""  }}>Luxembourg 
                    <option value="+853" {{ ((Input::old("country_code"))=="+853")? "selected":""  }}>Macao
                    <option value="+389" {{ ((Input::old("country_code"))=="+389")? "selected":""  }}>Macedonia 
                    <option value="+261" {{ ((Input::old("country_code"))=="+261")? "selected":""  }}>Madagascar 
                    <option value="+265" {{ ((Input::old("country_code"))=="+265")? "selected":"" }}>Malawi  
                    <option value="+60" {{ ((Input::old("country_code"))=="+60")? "selected":""  }}>Malaysia 
                    <option value="+960" {{ ((Input::old("country_code"))=="+960")? "selected":""  }}>Maldives 
                    <option value="+223" {{ ((Input::old("country_code"))=="+223")? "selected":""  }}>Mali  
                    <option value="+356" {{ ((Input::old("country_code"))=="+356")? "selected":""  }}>Malta 
                    <option value="+692" {{ ((Input::old("country_code"))=="+692")? "selected":""  }}>Marshall Islands  
                    <option value="+596" {{ ((Input::old("country_code"))=="+596")? "selected":""  }}>Martinique 
                    <option value="+222" {{ ((Input::old("country_code"))=="222")? "selected":""  }}>Mauritania  
                    <option value="+269" {{ ((Input::old("country_code"))=="+269")? "selected":""  }}>Mayotte 
                    <option value="+52" {{ ((Input::old("country_code"))=="+52")? "selected":"" }}>Mexico 
                    <option value="+691" {{ ((Input::old("country_code"))=="+691")? "selected":""  }}>Micronesia 
                    <option value="+373" {{ ((Input::old("country_code"))=="+373")? "selected":""  }}>Moldova 
                    <option value="+377" {{ ((Input::old("country_code"))=="+377")? "selected":"" }}>Monaco
                    <option value="+976" {{ ((Input::old("country_code"))=="+976")? "selected":"" }}>Mongolia 
                    <option value="+1664" {{ ((Input::old("country_code"))=="+1664")? "selected":"" }}>Montserrat 
                    <option value="+212" {{ ((Input::old("country_code"))=="+212")? "selected":"" }}>Morocco 
                    <option value="+258" {{ ((Input::old("country_code"))=="+258")? "selected":""  }}>Mozambique 
                    <option value="+95" {{ ((Input::old("country_code"))=="+95")? "selected":""  }}>Myanmar 
                    <option value="+264" {{ ((Input::old("country_code"))=="+264")? "selected":""  }}>Namibia 
                    <option value="+674" {{ ((Input::old("country_code"))=="+674")? "selected":""  }}>Nauru) 
                    <option value="+977" {{ ((Input::old("country_code"))=="+977")? "selected":""  }}>Nepal 
                    <option value="+31" {{ ((Input::old("country_code"))=="+31")? "selected":""  }}>Netherlands 
                    <option value="+687" {{ ((Input::old("country_code"))=="+687")? "selected":""  }}>New Caledonia  
                    <option value="+64" {{ ((Input::old("country_code"))=="+64")? "selected":""}}>New Zealand 
                    <option value="+505" {{ ((Input::old("country_code"))=="+505")? "selected":""  }}>Nicaragua 
                    <option value="+227" {{ ((Input::old("country_code"))=="+227")? "selected":""  }}>Niger  
                    <option value="+234" {{ ((Input::old("country_code"))=="+234")? "selected":""  }}>Nigeria 
                    <option value="+683" {{ ((Input::old("country_code"))=="+683")? "selected":""  }}>Niue 
                    <option value="+672" {{ ((Input::old("country_code"))=="+672")? "selected":""  }}>Norfolk Islands  
                    <option value="+670" {{ ((Input::old("country_code"))=="+670")? "selected":""  }}>Northern Marianas  
                    <option value="+47" {{ ((Input::old("country_code"))=="+47")? "selected":""}}>Norway 
                    <option value="+968" {{ ((Input::old("country_code"))=="+968")? "selected":""  }}>Oman 
                    <option value="+680" {{ ((Input::old("country_code"))=="+680")? "selected":""  }}>Palau  
                    <option value="+507" {{ ((Input::old("country_code"))=="+507")? "selected":"" }}>Panama 
                    <option value="+675" {{ ((Input::old("country_code"))=="+675")? "selected":"" }}>Papua New Guinea 
                    <option value="+595" {{ ((Input::old("country_code"))=="+595")? "selected":""  }}>Paraguay 
                    <option value="+51" {{ ((Input::old("country_code"))=="+51")? "selected":""  }}>Peru
                    <option value="+63" {{ ((Input::old("country_code"))=="+63")? "selected":""  }}>Philippines 
                    <option value="+48" {{ ((Input::old("country_code"))=="+48")? "selected":""  }}>Poland  
                    <option value="+351" {{ ((Input::old("country_code"))=="+351")? "selected":""  }}>Portugal  
                    <option value="+1787" {{ ((Input::old("country_code"))=="+1787")? "selected":""  }}>Puerto Rico 
                    <option value="+974" {{ ((Input::old("country_code"))=="+974")? "selected":""  }}>Qatar  
                    <option value="+262" {{ ((Input::old("country_code"))=="+262")? "selected":"" }}>Reunion  
                    <option value="+40" {{ ((Input::old("country_code"))=="+40")? "selected":""  }}>Romania  
                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":""  }}>Russia 
                    <option value="+250" {{ ((Input::old("country_code"))=="+250")? "selected":"" }}>Rwanda 
                    <option value="+378" {{ ((Input::old("country_code"))=="+378")? "selected":"" }}>San Marino 
                    <option value="+239" {{ ((Input::old("country_code"))=="+239")? "selected":""  }}>Sao Tome &amp; Principe 
                    <option value="+966" {{ ((Input::old("country_code"))=="+966")? "selected":""  }}>Saudi Arabia 
                    <option value="+221" {{ ((Input::old("country_code"))=="+221")? "selected":""  }}>Senegal 
                    <option value="+381" {{ ((Input::old("country_code"))=="+381")? "selected":"" }}>Serbia 
                    <option value="+248" {{ ((Input::old("country_code"))=="+248")? "selected":""  }}>Seychelles 
                    <option value="+232" {{ ((Input::old("country_code"))=="+232")? "selected":""  }}>Sierra Leone 
                    <option value="+65" {{ ((Input::old("country_code"))=="+65")? "selected":""  }}>Singapore  
                    <option value="+421" {{ ((Input::old("country_code"))=="+421")? "selected":"" }}>Slovak Republic  
                    <option value="+386" {{ ((Input::old("country_code"))=="+386")? "selected":"" }}>Slovenia  
                    <option value="+677" {{ ((Input::old("country_code"))=="+677")? "selected":""  }}>Solomon Islands 
                    <option value="+252" {{ ((Input::old("country_code"))=="+252")? "selected":""  }}>Somalia  
                    <option value="+27" {{ ((Input::old("country_code"))=="+27")? "selected":"" }}>South Africa 
                    <option value="+34" {{ ((Input::old("country_code"))=="+34")? "selected":""  }}>Spain  
                    <option value="+94" {{ ((Input::old("country_code"))=="+94")? "selected":""  }}>Sri Lanka 
                    <option value="+290" {{ ((Input::old("country_code"))=="+290")? "selected":""  }}>St. Helena  
                    <option value="+1869" {{ ((Input::old("country_code"))=="+1869")? "selected":""  }}>St. Kitts 
                    <option value="+1758" {{ ((Input::old("country_code"))=="+1758")? "selected":""  }}>St. Lucia  
                    <option value="+249" {{ ((Input::old("country_code"))=="+249")? "selected":""  }}>Sudan  
                    <option value="+597" {{ ((Input::old("country_code"))=="+597")? "selected":"" }}>Suriname 
                    <option value="+268" {{ ((Input::old("country_code"))=="+268")? "selected":""  }}>Swaziland  
                    <option value="+46" {{ ((Input::old("country_code"))=="+46")? "selected":"" }}>Sweden  
                    <option value="+41" {{ ((Input::old("country_code"))=="+41")? "selected":"" }}>Switzerland  
                    <option value="+963" {{ ((Input::old("country_code"))=="+963")? "selected":""  }}>Syria  
                    <option value="+886" {{ ((Input::old("country_code"))=="+886")? "selected":""  }}>Taiwan 
                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":"" }}>Tajikstan  
                    <option value="+66" {{ ((Input::old("country_code"))=="+66")? "selected":""  }}>Thailand 
                    <option value="+228" {{ ((Input::old("country_code"))=="+228")? "selected":""  }}>Togo  
                    <option value="+676" {{ ((Input::old("country_code"))=="+676")? "selected":"" }}>Tonga 
                    <option value="+1868" {{ ((Input::old("country_code"))=="+1868")? "selected":""  }}>Trinidad &amp; Tobago  
                    <option value="+216" {{ ((Input::old("country_code"))=="+216")? "selected":"" }}>Tunisia 
                    <option value="+90" {{ ((Input::old("country_code"))=="+90")? "selected":""  }}>Turkey  
                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":"" }}>Turkmenistan 
                    <option value="+993" {{ ((Input::old("country_code"))=="+993")? "selected":"" }}>Turkmenistan 
                    <option value="+1649" {{ ((Input::old("country_code"))=="+1649")? "selected":"" }}>Turks &amp; Caicos Islands 
                    <option value="+688" {{ ((Input::old("country_code"))=="+688")? "selected":""  }}>Tuvalu  
                    <option value="+256" {{ ((Input::old("country_code"))=="+256")? "selected":""  }}>Uganda  

                    <option value="+380" {{ ((Input::old("country_code"))=="+380")? "selected":""  }}>Ukraine  
                    <option value="+971" {{ ((Input::old("country_code"))=="+971")? "selected":""  }}>United Arab Emirates  
                    <option value="+598" {{ ((Input::old("country_code"))=="+598")? "selected":""  }}>Uruguay 

                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":""  }}>Uzbekistan 
                    <option value="+678" {{ ((Input::old("country_code"))=="+678")? "selected":""  }}>Vanuatu 
                    <option value="+379" {{ ((Input::old("country_code"))=="+379")? "selected":""  }}>Vatican City 
                    <option value="+58" {{ ((Input::old("country_code"))=="+58")? "selected":""  }}>Venezuela  
                    <option value="+84" {{ ((Input::old("country_code"))=="+84")? "selected":""  }}>Vietnam 
                    <option value="+84" {{ ((Input::old("country_code"))=="+84")? "selected":""  }}>Virgin Islands - British 
                    <option value="+84" {{ ((Input::old("country_code"))=="+84")? "selected":""  }}>Virgin Islands - US 
                    <option value="+681" {{ ((Input::old("country_code"))=="+681")? "selected":""  }}>Wallis &amp; Futuna  
                    <option value="+969" {{ ((Input::old("country_code"))=="+969")? "selected":"" }}>Yemen (North) 
                    <option value="+967" {{ ((Input::old("country_code"))=="+967")? "selected":""  }}>Yemen (South) 
                    <option value="+381" {{ ((Input::old("country_code"))=="+381")? "selected":""  }}>Yugoslavia 
                    <option value="+243" {{ ((Input::old("country_code"))=="+243")? "selected":"" }}>Zaire  
                    <option value="+260" {{ ((Input::old("country_code"))=="+260")? "selected":""  }}>Zambia  
                    <option value="+263" {{ ((Input::old("country_code"))=="+263")? "selected":"" }}>Zimbabwe 
                </select>
                   
                  
                <input type="text" class="col-sm-3 data" name="phone_code" value="{{(Input::old('country_code')) ? Input::old('country_code'):"+1" }}" readonly="readonly" style="width: 40%;" />

                </div>

                <div class="form-group"> 
                <input type="text"  class="login-input" placeholder="Enter Phone Number" name="phone" ng-model="order.phone" required="" numbers-only >
                        <span class="input-icon">
                            <i class="fa fa-mobile-phone"></i>
                        </span>
            



                        
                    </div>
                    <div class="form-group">               
                        <textarea type="text" class="login-input" placeholder="Description" name="description" ng-model="order.description" required="" style="height: 70px;border: 1px solid #e6e6e6;width: 100%;padding: 10px;"> </textarea>                      
                                 <span class="input-icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                    </div>
                            <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius">Sign Up</button>
                            <!--<button ng-click="back()" class="button-fullwidth cws-button bt-color-3 border-radius">Back</button>-->
                        
                </form>
                  <button ng-click="back()" class="button-fullwidth cws-button border-radius" ng-if="showPlaceOrderForm != 'true'" style="padding:10px;margin:2px;">Back</button>
                        
                    </div>
                </div>
            </section>
        </main>
             <section class="fullwidth-background testimonial padding-section">

            <div class="grid-row">

                <h1 class="center-text">Testimonials</h1>

                <div  id="testimonial-slider" class="owl-carousel testimonials-carousel">

                    <div class="gallery-item">

                        <div class="quote-avatar-author clear-fix"><img src="theme/img/images/Testimonials/img-2.jpg" data-at2x="theme/img/images/Testimonials/img-2.jpg" alt="Best Assignment Experts"><div class="author-info">Adamaris <br><span>(UK)</span></div></div>

                        <p><i class="fa fa-quote-left"></i>   Wonderful experience with “BestAssignmentExperts.com”. Will be back with another work.   <i class="fa fa-quote-right"></i></p>

                    </div>

                    <div class="gallery-item">

                        <div class="quote-avatar-author clear-fix"><img src="theme/img/images/Testimonials/img-1.jpg" data-at2x="theme/img/images/Testimonials/img-1.jpg" alt="Best Assignment Experts"><div class="author-info">John<br><span>(UK)</span></div></div>

                        <p><i class="fa fa-quote-left"></i>   Its been Really Wonderful to use Assignment Service,Will definitely come back for more assignment.  <i class="fa fa-quote-right"></i> </p>

                    </div>

                    <div class="gallery-item">

                        <div class="quote-avatar-author clear-fix"><img src="theme/img/images/Testimonials/img-3.jpg" data-at2x="theme/img/images/Testimonials/img-3.jpg" alt="Best Assignment Experts"><div class="author-info">Darren<br><span>(UK)</span></div></div>

                        <p><i class="fa fa-quote-left"></i>   Best Assignment Experts is Quick and effective service, On time and great content.Thanks for helping me and certailny use the service again.  <i class="fa fa-quote-right"></i> </p>

                    </div>
                </div>
            </div>
        </section>
           
        </div>
       

      @include('layout.footer')  
        
      <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function ($scope, $http) {

                $(".msg").remove();
                $scope.place_order = {};
                //$scope.place_order= {"duedate": new Date(),"email":"", "subject":""};
                $scope.count = 1;
                $scope.showPlaceOrderForm = 'true';
                $scope.placeOrderDetails = function (place_order, count) {
                    console.log(JSON.stringify(place_order));
                    console.log(count);
                    
                    var place_data = {"page_no": count, "order_details": place_order};
                    console.log(JSON.stringify(place_data));
                    $http({
                        method: 'POST',
                        url: '/place-order/check/user',
                        data: JSON.stringify(place_data),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            $scope.showPlaceOrderForm = 'false';
                        }
                        if (response.data.success == 'false') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            $scope.showPlaceOrderForm = 'true';
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove();
                            $('form').before('<div class="alert alert-success msg info-boxes confirmation-message" style="background: #f27c66"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(10000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });
                };
                $scope.back = function (e)
                {
                    $scope.showPlaceOrderForm = 'true';
                    e.preventDefault();

                }




                $scope.placeOrder = function (order, count, place_order) {
                    console.log(order);
                    console.log(place_order);
                    console.log(count);
                    var a={"order_details": place_order, "page_no": count, "order_info": order};
                    console.log(JSON.stringify(a));
                    $http({
                        method: 'POST',
                        url: '/create-user-from-place-order-page',
                        data: JSON.stringify(a),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        console.log(response);
                        if(response.data.success=='true'){
                            //window.location="{{URL::to('users/dashboard')}}";
                        }
                        else{
                           // window.location="{{URL::to('/')}}";
                        }
                        


                    }, function errorCallback(response) {
                     
                        console.log(response);
                    });
                };
$(".animationload").delay(1).fadeOut("slow");
$scope.initialize = function(){

 $('select[name^=country_code]').change(function()
     {
    
        $('.data').val($(".dara option:selected").val());
  
    });

  };


            });
    

    app.directive('numbersOnly', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^0-9]/g, '');

                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }            
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
});         
            
app.directive("datepicker", function () {
  return {
    restrict: "A",
    require: "ngModel",
    link: function (scope, elem, attrs, ngModelCtrl) {
      var updateModel = function (dateText) {
        scope.$apply(function () {
          ngModelCtrl.$setViewValue(dateText);
        });
      };
      var options = {
        dateFormat: "dd/mm/yy",
        minDate: '+0',
       // maxDate: '+6M',
        onSelect: function (dateText) {
          updateModel(dateText);
        }
      };
      //elem.datepicker(options);
      $(elem).datepicker(options);

    }
  }
});
</script>

 
<script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(15000);
    });
    </script>
<script>
	$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: true,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});</script>
</body>
</html>