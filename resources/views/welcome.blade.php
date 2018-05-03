  @include('layout.header')
  <style>
  .tab .tab-content {
    padding: 0 40px;
    color: #5a5c5d;
    margin-top: 2%;
    font-size: 14px;
    border: 0;
}
  .tab .tab-content p{
    font-size: 30px;
    text-transform: capitalize;
    padding-top: 50px;
    font-weight: 600;
    text-align: center;
  }
  </style>
  
<body >
<div id="header-scroll" class="header-scroll header-nav hidden-xs hidden-sm tnav">
<div class="main-header-nav navbar-scrolltofixed tnav">
<div class="container">
<div class="row">
<div class="col-md-12">

    <form id="booking_form" class="booking_form" name="booking_form" action="#" method="post" novalidate="novalidate" style="padding:15px 25px;">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Name</label>
                                        <input id="form_name" name="form_name" class="form-control" placeholder="Name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Subject</label>
                                        <input id="form_phone" name="form_phone" class="form-control required" placeholder="enter a Phone" required="required" data-error="Phone Number is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Email</label>
                                        <input id="form_email" name="form_email" class="form-control required email" placeholder="Email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Phone</label>
                                        <input id="form_phone" name="form_phone" class="form-control required" placeholder="enter a Phone" required="required" data-error="Phone Number is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Deadline</label>
                                        <input id="form_date" name="form_date" class="form-control required datepicker" placeholder="Schedule Time" required="required" data-error="Schedule Time is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                              
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label></label>
                                        <input name="form-botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit" class="btn ulockd-btn-thm2 btn-block ">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </form>

</div>
</div>
</div>
</div>
</div>
    
    
    
    <!-- Home Design -->
<div class="home-banner">
        <div class="container text-center">
            <div class="row">
                <div>
                    <div class="col-md-6 col-md-offset-6  col-sm-10 col-sm-offset-1">
                    <div class="col-md-12"> 
                    <div class="row">       
                    <div class="col-md-12 mt-10 mb-5 text-center"> 
                    
                    <br/>
                    <br/>
                    
           <div class="place-order-mobile-hide place_order_welcome">




     <main ng-app="myApp" ng-controller="myCtrl" ng-cloak>
    <section class="signup-placeorder" >
        <div class="grid-row">
            <div class="login-block" >
                <div class="logo place-order">
                                 
              @if(Session('status'))
<div class = "alert alert-success">
  {{Session('status')}}
</div>
@endif  
                 <div class="booking_form_style1 ulockd-bgthm text-center" style="background-color: rgba(0,0,0,.6);">
                        <h3 class="color-white">BEST ASSIGNMENT HELP ONLINE</h3>
               
                <form class="login-form" ng-if="showPlaceOrderForm == 'true'">
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="Email" name="place_order_email" ng-model="place_order.email">
                    </div>
                     
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="place_order_subject" ng-model="place_order.subject" data-hj-whitelist>
                    </div>
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Due date" name="place_order_duedate" ng-model="place_order.duedate" datepicker>
                    </div>
                    <div class="form-group">

                        <div class="grid-buttons ">
                        <div class="row grid-flexs">
                            <button ng-click="count = count - 1" ng-disabled="count < 1" class="cws-button border-radius icon-left col-sm-1"><i class="fa fa-minus"></i></button>
                            
                            <input class="login-input col-sm-10 ng-pristine ng-valid" placeholder="Pages" name="count" ng-model="count" type="text" numbers-only>

                            <button ng-click="count = count + 1" class="cws-button border-radius icon-left col-sm-1"><i class="fa fa-plus" ></i></button>

                            </div>
                           @{{count * 250}}  Words

                        </div>
                 
                    </div>
                    
                    <button ng-click="placeOrderDetails(place_order, count)" class="btn btn-success ulockd-btn-green btn-block">Submit</button>
                </form>

                <form class="login-form" name="place-order-signup" ng-if="showPlaceOrderForm != 'true'" action="/create-user-from-place-order-page" method="POST" enctype="multipart/form-data" novalidate="" ng-cloak>
                   <div class="form-group file files-upload">
                        <input type="file" class="form-control" placeholder="Choose a File" name="uploaded_file1" required="" multiple="true">
    
                    </div>
                    <div class="form-group refercence">
                        <label>Select Reference</label>
                        <select type="text" class="form-control" placeholder="Reference" name="place_order_reference" value="Select Reference">
                       

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
                    
                    <div class="form-group form-flex order-form-mrgin">



                  <select name="country_code" value="{{ Input::old('country_code') }}" class="form-control" ng-init="initialize()"> 
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
                   
                  
                <input type="text" class="form-control" name="phone_code" value="{{(Input::old('country_code')) ? Input::old('country_code'):"+1" }}" readonly="readonly" style="width: 40%;" />

                </div>

                <div class="form-group order-form-mrgin"> 
                <input type="number"  class="form-control" placeholder="Enter Phone Number" name="phone" ng-model="order.phone" minlength="2" maxlength="10" data-hj-whitelist>
                        
                    </div>
                    <div class="form-group order-form-mrgin">               
                        <textarea type="text" class="form-control" placeholder="Description" name="description" ng-model="order.description" required=""  data-hj-whitelist> </textarea>                      
                                 
                    </div>
                            <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius order-btn-pding">Sign Up</button>
                            <!--<button ng-click="back()" class="button-fullwidth cws-button bt-color-3 border-radius">Back</button>-->
                        
                </form>
                  <button ng-click="back()" class="btn btn-success ulockd-btn-green btn-block" ng-if="showPlaceOrderForm != 'true'" style="padding:10px;margin:2px;">Back</button>
                        </div> 
                    </div>
                </div>
            </section>
        </main>
       
       </div>
                
                
                
                
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>

    </div>

        <section class="ulockd-blog hidden-xs hidden-sm">

        <div class="container">
            <div class="row ulockd-mrgn1225">

            <div class="col-lg-12 col-md-12">
            <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">HOW IT WORKS</h2>
                            <div class="mt-separator"><img src="{{asset('public/main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>

            <div class="tab" role="tabpanel">

                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active brand-nav"><a href="#Section1" aria-controls="tab1" role="tab" data-toggle="tab"><span>1</span> Place an order</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><span>2</span> Make payment</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><span>3</span> Proof reading</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab"><span>4</span> Get the Solution</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab"><span>5</span> Pay the balance</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab"><span>6</span> Your Feedback</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section7" aria-controls="messages" role="tab" data-toggle="tab"><span>7</span> Good luck</a></li>

                        </ul>
                        <!-- Tab panes -->

                       <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                            <div class="row">
                            <div class="col-md-6">
                             <p>Just put your basic details and attach the requirement file here</p>
                             </div>
                             <div class="col-md-6">
                             <img src="{{asset('public/main_theme/images/howitwork/placeanorder.jpg')}}" alt="" title="Place an order">
                            </div>
                            </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                            <div class="row">
                            <div class="col-md-6">
                             <p>We assign the best writers once you make the payment</p>
                             </div>
                             <div class="col-md-6">
                             <img src="{{asset('public/main_theme/images/howitwork/pay.jpg')}}" alt="" title=" Make payment">
                            </div>
                            </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section3">  
                            <div class="row">
                            <div class="col-md-6">
                                <p>Our proofreaders make sure of mistakes before sending you the solution</p>
                             </div>
                             <div class="col-md-6">
                            <img src="{{asset('public/main_theme/images/howitwork/2.png')}}"" alt="" title="proof-reading">
                            </div>
                            </div>
                            </div>
                            
                               <div role="tabpanel" class="tab-pane fade" id="Section4">  
                               <div class="row">
                            <div class="col-md-6">
                                <p>You will receive the mail once your solution get ready</p>
                             </div>
                             <div class="col-md-6">
                                <img src="{{asset('public/main_theme/images/howitwork/get-solution.jpg')}}" alt="" title="get solution">
                            </div>
                            </div>
                            </div>
                            
                               <div role="tabpanel" class="tab-pane fade" id="Section5">  
                                 <div class="row">
                            <div class="col-md-6">
                            <p>Your solution will be visible on your dashboard as soon as you pay the remaining amount.</p>
                             </div>
                             <div class="col-md-6">
                                <img src="{{asset('public/main_theme/images/howitwork/paymentt.png')}}" alt="" title="Place an order">
                            </div>
                            </div>
                            
                            
                            </div>
                            
                               <div role="tabpanel" class="tab-pane fade" id="Section6"> 
                            <div class="row">
                            <div class="col-md-6">
                          <p>Don’t forget to share the feedback of your assignment. It is impossible to us.</p>
                             </div>
                             <div class="col-md-6">
                                <img src="{{asset('public/main_theme/images/howitwork/feedback-1.jpg')}}" alt="" title="Place an order">
                            </div>
                            </div>

                            </div>
                            
                              <div role="tabpanel" class="tab-pane fade" id="Section7">  
                               <div class="row">
                            <div class="col-md-6">
                         <p>Our sincere wishes are with you. Thank you for choosing us.</p>
                             </div>
                             <div class="col-md-6">
                            <img src="{{asset('public/main_theme/images/howitwork/thanks.png')}}" alt="" title="thanks">
                            </div>
                            </div>
                              
                            
                            </div>

                        </div>
                    </div>
            </div>
            </div>

        </div>

    </section>

<!--<section id="sample" class="our-service">
<div class="container">
   <div class="row">
            <div class="col-lg-12 col-md-12">
            
            <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">FREE RESOURCES</h2>
                            <div class="mt-separator"><img src="{{asset('public/main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
            
            <div class="owl-carousel">
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/chemistry.png')}}" alt="">
             <h4>Chemistry</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/finance.png')}}" alt="">
              <h4>Finance</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/computer-science.png')}}" alt="">
             <h4>Computer science</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/huminidities.png')}}" alt="">
             <h4>Humanities</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/law.png')}}" alt="">
             <h4>law</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/nursing.png')}}" alt="">
             <h4>Nursing</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
                <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/chemistry.png')}}" alt="">
             <h4>Chemistry</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/finance.png')}}" alt="">
              <h4>Finance</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/computer-science.png')}}" alt="">
             <h4>Computer science</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/huminidities.png')}}" alt="">
             <h4>Humanities</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/law.png')}}" alt="">
             <h4>law</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{asset('public/main_theme/images/icons/nursing.png')}}" alt="">
             <h4>Nursing</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
            
            
     </div>
                </div>
            </div>


</div>

</section>-->
    
        <section class="services half-block">
            <div class="container">
                 <div class="row">
            <div class="col-lg-12 col-md-12">
            
            <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">OUR SERVICES</h2>
                            <div class="mt-separator"><img src="{{asset('public/main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
            
           <div class="three-grid-slider">
        <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/service/economics.jpg')}}" alt="1.jpg">
                        </div>
                        <div class="bp-details one text-left">
                                <h3 class="post-title">Economics Assignment Help</h3>
                            <p>Economics has been getting popular among students each day. In order to pass with good marks or attaining good grades </p>
                            <a type="button" class="btn btn-default ulockd-btn-thm2" href="/economics">Read More</a>
                        </div>
                    </article>
                            </div>
                            <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/service/managment.jpg')}}" alt="3.jpg">
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Management Assignments Help</h3>
                            <p>Management is a notable stream of subjects that students use frequently these days. Each year, many students get admission</p>
                            <a type="button" class="btn btn-default ulockd-btn-thm2" href="/management">Read More</a>
                        </div>
                    </article>
                            </div>
                        <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/service/finance.jpg')}}" alt="1.jpg">
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Finance/Accounting</h3>
                            <p>Finance/Accounting Assignments Finance is not just restricted to exchanging of money but ways to allocate and raise monetary</p>
                                <a type="button" class="btn btn-default ulockd-btn-thm2" href="/management">Read More</a>
                        </div>
                    </article>
                            </div>
                            <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/service/law.jpg')}}" alt="3.jpg">
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Law Assignments Help</h3>
                            <p>Law is broad and vast, and if we start mentioning areas, it will not just end simply. Based on the experience of the law assignment</p>
                                <a type="button" class="btn btn-default ulockd-btn-thm2" href="/law">Read More</a>
                        </div>
                    </article>
                            </div>
                            
                            
                            <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/blog/3.jpg')}}" alt="3.jpg">
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Assignment Help Australia</h3>
                            <p>Australian Academic prospectus is designed in a way where flawless assignments have to be presented in order to secure high grades</p>
                                <a type="button" class="btn btn-default ulockd-btn-thm2" href="assignment-help">Read More</a>
                        </div>
                    </article>
                            </div>
                            
                            
                            <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/service/programming.jpg')}}" alt="3.jpg">
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Programming Assignments</h3>
                            <p>If you are really struggling with C, C++, Java and other Programming language, our experts are available to help you.</p>
                                <a type="button" class="btn btn-default ulockd-btn-thm2" href="/programming">Read More</a>
                        </div>
                    </article>
                            </div>
             
            
     </div>
                </div>
            </div>
                </div>
                </section>
    

    
    
    

    
    
            <!-- Our Team -->
    <section class="ulockd-team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase">OUR <span class="text-thm2">Experts</span></h2>
                        <p>Our writers are the key of our success stories. They are highly qualified and professional in the field of Writing.</p>

</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <div class="team-one">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/team/1.jpg')}}" alt="team1.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Corey n Jr.</h3>
                            <p>He is one of our best writer with more than 1000 successfull deliveries. He is Having more than 30 years of experience in Finance and Accounting.</p>
                                </div>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <div class="team-one">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/team/2.jpg')}}" alt="team2.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Maria Wilson</h3>
                            <p>She is helping the students from last 23 years with her excellent Writing skills and tremendous subject knowledge. She is expert in Management and Business Studies</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <div class="team-one">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/team/8.jpg')}}" alt="3.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Tom Mooler</h3>
                            <p>A mathematician having 15 years of experience with success rate of 98%. He also deals in physics Assignments.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

        <!-- Our Blog -->
        <section class="ulockd-blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">Testimonial</h2>
                            <div class="mt-separator"><img src="{{asset('public/main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
                        <div class="one-grid-slider">
                            <div class="item">
                                <div class="testimonial-grid text-center">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{asset('public/main_theme/images/testimonial/1.jpg')}}" alt="1.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4>Maria </h4>
                                        <p>Australia</p>
                                        <p>These peoples are incredible, authentic and reliable. I have got the assignment within the deadline and yes it is quality work.</p>
                                        </div>
                                </div>
                                <div class="testimonial-grid text-center ulockd-mrgn1220">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{asset('public/main_theme/images/testimonial/2.jpg')}}" alt="2.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4>Balvinder Dhillon</h4>
                                        <p>Canada</p>
                                        <p>You peoples save me from getting failed even the deadline was of couple of hours.</p>

</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-grid text-center">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{asset('public/main_theme/images/testimonial/3.jpg')}}" alt="3.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4> Lisa Jackson</h4>
                                        <p>United States</p>
                                        <p>Excellent service and experts are truely champ...

Must be a 5star website for Academic Writing.</p>  </div>
                                </div>
                                
                                <div class="testimonial-grid text-center ulockd-mrgn1220">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{asset('public/main_theme/images/testimonial/2.jpg')}}" alt="2.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4>Balvinder Dhillon</h4>
                                        <p>Canada</p>
                                        <p>You peoples save me from getting failed even the deadline was of couple of hours.</p>

</div>
                                </div>
                                
                            </div>                      
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">Latest Blog</h2>
                            <div class="mt-separator"><img src="{{asset('public/main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
                        <div class="two-grid-slider">
                        <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/blog/1.jpg')}}" alt="1.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 29 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Work-Life Balance </h4>
                                        <div class="post_date ulockd-bgthm"><strong>10</strong> <br> jan 18 </div>
                                        <p>Today, most of the employees face a challenge of finding balance in between work and daily life. It is because; their work affects their families and personal life. </p>
                                        <a class="tdu-hvr" href="/blogs">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/blog/2.jpg')}}" alt="2.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 45 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Academic Help</h4>
                                        <div class="post_date ulockd-bgthm"><strong>1</strong> <br> april 18 </div>
                                        <p>The term academic help may sound novel to few people, but this is not a new concept nowadays. Most of the students today find it difficult to adjust their academic tasks.</p>
                                        <a class="tdu-hvr" href="/blogs">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/blog/1.jpg')}}" alt="1.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 27 Comment</a></li>
                                        </ul>
                                    </div>
                                <div class="post_details">
                                        <h4>Assignment Help</h4>
                                        <div class="post_date ulockd-bgthm"><strong>18</strong> <br> mar 18 </div>
                                        <p>In the present, competitive environment all students pursuing higher studies in different disciplines want to outdo in particular fields.</p>
                                        <a class="tdu-hvr" href="/blogs">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{asset('public/main_theme/images/blog/3.jpg')}}" alt="4.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 62 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Dissertation Help</h4>
                                        <div class="post_date ulockd-bgthm"><strong>10</strong> <br> mar 18 </div>
                                        <p>Dissertation help online is a well-recognized concept among students pursuing their post-graduation or Ph.D. degree.</p>
                                        <a class="tdu-hvr" href="/blogs">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    
    <!-- Our Divider -->
        <section class="divider-triangle half-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-6">
                        <h2 class="ulockd-mrgn120 tac-smd">Why Choose Us?</h2>
                        
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-users text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>Complete satisfaction</h4>
                                <p>Since we have the best assignment experts, there is very less chances of Dissatisfaction.
                                We have highly qualified experts who are ready to help you out from any kind of Assignment pressure.</p>
                            </div>
                        </div>
                            <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-graduation-cap text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>24/7 customer support</h4>
                                <p>We are open 7 days 24X7 to hear from you. Our response time is less than a minute, which makes us different from other.</p>
                            </div>
                        </div>
                        
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-book text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>100% original work</h4>
                                <p>We have the best writers along with the best content plagiarism monitoring softwares. Who combine together and result the best grades. 
                                We make sure that you get the premium quality work.</p>
                            </div>
                        </div>
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-user text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>On time delivery</h4>
                                <p>Our management take special care of time deadline. We prefer to deliver the solution before the expected deadline. Timely delivery is one of the key of our sucess.</p>
                            </div>
                        </div>
                        
                    
                        
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-graduation-cap text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>100% Refund Policy</h4>
                                <p>In case if student don’t like the assignment or if he change his mind. In this case we refund upto 100% amount in his wallet. 
                                Amount is dependent upon the circumstances for dissatisfaction.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

    
    <!-- Our First Divider -->
    <section class="ulockd-frst-divider style1 parallax" data-stellar-background-ratio="0.3" style="padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="subscriber-form subscribe">
                        <h1 class="color-white">Don’t miss out on the Latest News</h1>
                        <input placeholder="Your Email">
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
      @include('layout.footer')

    <!-- Our Footer -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
                            $('form').before('<div class="alert alert-success msg info-boxes confirmation-message confirm-msg" style="background: #f27c66"></div>');
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
<!--Start of Connecto Script-->
<script type="text/javascript">
var _TConnecto = _TConnecto || {};
_TConnecto.licenseKey = 'z7JnUJj7Q7By0pSu';

(function() {
var con = document.createElement('script'); con.type = 'text/javascript';
var host = (document.location.protocol === 'http:') ? 'http://cdn' : 'https://server';
con.src = host + '.connecto.io/javascripts/connect.prod.min.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(con, s);
})();
</script>
<!--End of Connecto Script-->

<script type="text/javascript">
$(document).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('See More');
            } else {
                toggle_switch.html('See Less');
            }
        });
    });

});
</script>

</html>