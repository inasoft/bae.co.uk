<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="description" content="Bit6 Web Demo">
    <meta name="author" content="Bit6">

    <title>Chat| Best Assignment Experts</title>

    <!-- Bootstrap core CSS -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
	
	<script type="text/javascript">
$(window).load(function() {
    $(".loader").delay(1500).show().fadeOut("slow");
});
</script>
	
    <!-- Custom styles -->

        {!! Html::style('dashboard_theme/bootstrap/css/bootstrap.min.css') !!}

        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') !!}

        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}



        {!! Html::style('dashboard_theme/dist/css/AdminLTE.min.css') !!}

        {!! Html::style('dashboard_theme/dist/css/skins/_all-skins.min.css') !!}

        {!! Html::style('dashboard_theme/plugins/iCheck/flat/blue.css') !!}

        {!! Html::style('dashboard_theme/plugins/morris/morris.css') !!}

        {!! Html::style('dashboard_theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}

        {!! Html::style('dashboard_theme/plugins/datepicker/datepicker3.css') !!}

        {!! Html::style('dashboard_theme/plugins/datatables/dataTables.bootstrap.css') !!}

        {!! Html::style('dashboard_theme/plugins/daterangepicker/daterangepicker.css') !!}

        {!! Html::style('dashboard_theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

    <style type="text/css">
      body {
  padding-top: 50px;
   background-image:url("theme/img/parallax.png");
   background-color: #f27c66;
}

html, body, .fh {
  height: 100%;
}

.intro {
  padding: 20px 15px;
  text-align: center;
}

.bg-danger > p {
  padding: 10px;
}

.btn-file {
  position: relative;
  overflow: hidden;
}

.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}

#chatListRow, #msgListRow {
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
      top: 100px;
  margin: 0px;
}

#msgListRow {
  bottom: 55px;
}

#chatList, #msgList {
  position: relative;
  height: 100%;
  overflow-y: auto;
}

.chats > div {
  padding: 6px 6px;
  color: #666;
  border: 1px solid transparent;
  clear: both;
  cursor: pointer;
}

.chats > div:hover {
  border: 1px solid #eee;
}

.chats > div.selected {
  background-color: #f0f0f0;
}

.chats strong {
  display: block;
  font-weight: normal;
  font-size: 1.3em;
  margin-bottom: 20px;
  color: #0F76C1;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.chats span {
     display: block;
    float: left;
    padding-left: 10px;
    font-size: 0.9em;
    background: #CCDBDC;
    color: #337ab7;
    border-radius: 5px;
    padding: 10px 20px;
}

.chats em {
  display: block;
  text-align: right;
  font-size: 0.8em;
  color: #ccc;
}

.chats strong > b {
  display: block;
  float: right;
  background-color: #0F76C1;
  font-size: 0.6em;
  color: #fff;
  padding: 2px 4px;
  margin-top: 2px;
  /*font-weight: normal;*/
}

.top-row {
  padding-top: 20px;
  padding-bottom: 20px;
}

.top-row h3 {
  margin-top: 5px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
      text-align: center;
    padding: 8px;
    box-shadow: 4px 4px #3c8dbc;
    text-transform: uppercase;
	background-color: rgba(255, 255, 255, 0.61);
}

#chatButtons > button {
  margin-right: 4px;
}

#newChatDropdown .dropdown-menu {
  padding: 15px;
  width: 250px;
}

#backToList {
  margin-right: 5px;
  display: none;
}

#detailPane, #inCallPane {
  position: relative;
}

#msgOtherTyping {
  padding: 6px;
}

#msgComposeRow {
  background-color: #f5f5f5;
  margin: 0px;
  padding: 10px 0;
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
}

.msgs > div {
  width: 50%;
  padding: 10px;
  border: 1px transparent solid;
  position: relative;
  margin: 5px 10px;
}

.msgs > div.me {
  text-align: right;
  border-color: #ddd;
  float: right;
  clear: both;
}

.msgs > div.other {
  background-color: #f5f5f5;
  text-align: left;
  border-color: #ddd;
  float: left;
  clear: both;
}

.msgs span {
  display: block;
    padding-left: 10px;
    font-size: 0.9em;
    background: #CCDBDC;
    color: #337ab7;
    border-radius: 5px;
    padding: 10px 20px;
    margin-top: 10px;
}

.msgs em, .msgs i {
  display: block;
  font-size: 0.8em;
  color: #ccc;
}

.msgs > div.me i {
  float: left;
}

.msgs > div.other i {
  float: right;
}

a.thumb {
  display: block;
  text-align: center;
  margin-bottom: 10px;
  overflow: hidden;
}

a.thumb img {
  max-width: 320px;
  max-height: 320px;
  /* width: 100%; */
  height: 320px;
}

#incomingCall {
  position: absolute;
  top: 60px;
  z-index: 100;
  left: auto;
  right: auto;
  width: 300px;
}

#videoContainer {
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
  top: 80px;
  margin: 0px;
  text-align: center;
}

#videoContainer.simple > .remote {
  max-width: 100%;
  max-height: 100%;
  width: 100%;
}

#videoContainer.simple > .local {
  max-width: 30%;
  max-height: 30%;
  position: absolute;
  top: 0px;
  right: 0px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  width: auto;
  height: auto;
}

#videoContainer.grid > video {
  max-width: 50%;
  max-height: 50%;
  padding: 0 4px 4px 0;
}
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
  width: 200px;
  height: 200px;
  font-size: 24px;
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  background-image: url('../dashboard_theme/dist/img/lod.gif');
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
 }

/*
 768px - xs devices, 992px - medium devices
*/
@media only screen and (max-width : 768px) {
  /* Adjust top row margins on small screen */
  .top-row {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  /* On small screen by default DetailPane is hidden */
  #detailPane {
    display: none;
  }

  /* When in detail mode, we hide ListPane */
  body.detail #listPane {
    display: none;
  }

  /* Also hide top navbar */
  body.detail .navbar {
    display: none;
  }

  body.detail {
    padding-top: 0px;
  }

  /* ... and show DetailPane */
  body.detail #detailPane {
    display: block;
  }
  
  
}

    </style>
	
	 <style type="text/css">
	.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../theme/img/pageLoader2.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
	</style>
	
	
	<style>
	.bg_img{
		    height: 100%;
    background-color: #f27c66;
    opacity: 0.8;
	}
	
	.fa-sort-up:before, .fa-sort-asc:before {
    content: "\f0de";
	display:none;
}

.fa_fa_sort{
	font-size: 33px;
    position: absolute;
        top: 37px;
    left: 20px;
    border-width: 0 15px 15px;
    border-style: solid;
    border-color: #CCDBDC transparent;
    display: block;
    width: 0;
}
	
	
	.fa_fa_sort1 {
    position: absolute;
    border-width: 0 15px 15px;
    border-style: solid;
    border-color: #CCDBDC transparent;
    width: 0;
      top: 11px;
    left: 710px;
}
	
.logo_h{
	    height: 49px;
    display: flex;
    margin: -13px 0;
    float: left;
    width: auto;
    transition: all .6s;
    -ms-transition: all .6s;
    -moz-transition: all .6s;
    -webkit-transition: all .6s;
}	
	
	
	</style>
	
  </head>

  <body>
  <div class="loader"></div>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
		
		  
          <a class="navbar-brand" href="#"><img alt="" data-at2x="/theme/img/images/logo.jpg" src="/theme/img/images/logo.jpg" class="logo_h">Best Assignment Experts</a>
        </div>
        <div class="collapse navbar-collapse">
          <!-- <ul class="nav navbar-nav">
            <li><a target="_blank" href="http://bit6.com">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden" id="loggedInNavbar">
            <li><a href="#" id="phoneCallButton"><span class="glyphicon glyphicon-phone-alt"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="loggedInUser"></span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" id="logout">Logout</a></li>
              </ul>
            </li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class="bg_img">
    <div class="container fh">

        <!-- Welcome page -->
        <!-- <div id="welcome">
          

          <div class="row">
            <div class="col-sm-offset-3 col-md-offset-4 col-sm-6 col-md-4">

              <div class="bg-danger" id="authError"></div>

              <form role="form">
                <div class="form-group">
                  <input type="text" class="form-control" id="authUsername" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="authPassword" placeholder="Password">
                </div>
                <button class="btn btn-primary" id="loginButton">Login</button>
                <button class="btn btn-info" id="signupButton">Sign Up</button>
              </form>

            </div>
          </div>

      </div> -->

      <!-- Main Page -->
      <div id="main" class="hidden fh">

          <!-- Incoming Call alert -->
          <div class="alert alert-warning fade in" id="incomingCall">
            <h4 id="incomingCallFrom">John is calling...</h4>
            <p>Do you dare to answer this call?</p>
            <p>
              <button type="button" class="btn btn-success" id="answerVideo">Video</button>
              <button type="button" class="btn btn-success" id="answerAudio">Audio</button>
              <button type="button" class="btn btn-danger" id="reject">Reject</button>
            </p>
          </div>


          <div class="row fh">

            <!-- col1 -->
            <div class="col-sm-4 fh" id="listPane">
             @if(Auth::user()->hasRole('admin'))
              <div class="row top-row">

                <div class="col-xs-6">
                  <h3>Chats</h3>
                </div>

                <div class="col-xs-6">
                  <!-- New Chat dropdown -->
                  <ul class="nav nav-pills pull-right">
                    <li class="dropdown" id="newChatDropdown">
                      <a id="drop1" role="button" data-toggle="dropdown" href="#">New
                          <b class="caret"></b></a>
                      <div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="drop1">
                        <h4>Direct Chat</h4>
                        <div class="input-group">
                          <input type="text" class="form-control" id="newChatUsername" placeholder="Username" autocomplete="off">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="newChatStart">
                              <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                            </button>
                          </span>
                        </div><!-- /input-group -->

                        <h4>New Group</h4>
                        <div class="input-group">
                          <input type="text" class="form-control" id="newGroupTitle" placeholder="Group title" autocomplete="off">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="newGroupCreate">
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                          </span>
                        </div><!-- /input-group -->

                      </div>
                    </li>
                    </li>
                  </ul> <!-- /pills -->
                </div>

              </div>
               @endif
              <div class="row" id="chatListRow">
               <i class="fa fa-sort-asc fa_fa_sort" aria-hidden="true"></i> <div class="chats" id="chatList"></div>
              </div>
               

            </div>
         

            <!-- col2 -->
            <div class="col-sm-8 fh" id="detailPane">

              <div class="row top-row">
                <div class="col-sm-5 col-xs-5">
                  <button class="btn btn-default pull-left visible-xs" id="backToList">
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                  </button>
                  <h3 id="chatTitle"></h3>
                </div>
                <div class="col-sm-7 col-xs-7">
                  <div id="chatButtons" class="pull-right">
                    <button class="btn btn-info" id="audioCallButton" style="display: none;">
                      <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Audio</span>
                    </button>
                    <button class="btn btn-info" id="videoCallButton" style="display: none;">
                      <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Video</span>
                    </button>
                    <button class="btn btn-info hidden-xs" id="screenCallButton">
                      <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Screen</span>
                    </button>
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#" id="groupInfoButton">Group details</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#" id="deleteChatButton">Delete messages</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="row" id="msgListRow">
              <i class="fa fa-sort-asc fa_fa_sort1" aria-hidden="true"></i>  <div id="msgList"></div>
              </div>

              <!-- Compose message area -->
              <div class="row" id="msgComposeRow">
                <div class="col-sm-4">
                  <div class="bg-info" id="msgOtherTyping"></div>
                </div>
                <div class="col-sm-8">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <span class="btn btn-default btn-file">
                        <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                        <input type="file" id="attachFile" />
                      </span>
                    </span>
                    <input type="text" class="form-control" id="msgText" placeholder="Type message">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="button" id="sendMsgButton">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                      </button>
                    </span>
                  </div><!-- /input-group -->
                </div>
              </div><!-- /.row -->

            </div><!-- /col2 -->


            <!-- col3 -->
            <div class="col-sm-8 fh hidden" id="inCallPane">

              <div class="row top-row">
                <div class="col-sm-7 col-xs-8">
                  <h3 id="inCallOther">Video Call</h3>
                </div>
                <div class="col-sm-5 col-xs-4">
                  <div class="pull-right">
                    <button class="btn btn-default" id="incallVideo" data-toggle="button" autocomplete="off">
                      <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                      <span class="visible-lg-inline">Video</span>
                    </button>
                    <button class="btn btn-default hidden-xs" id="incallScreen" data-toggle="button" autocomplete="off">
                      <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
                      <span class="visible-lg-inline">Screen</span>
                    </button>
                    <button class="btn btn-danger" id="hangup">
                      <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                      <span class="hidden-xs hidden-sm">Hangup</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="row" id="videoContainer"></div>

            </div><!-- /col3 -->


          </div><!-- /.row -->


      </div><!-- /#main -->

    </div><!-- /.container -->

    <div class="modal fade" id="groupInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="groupInfoTitle">Group info</h4>
          </div>

          <div class="modal-body">

            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
              <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px">
                <li role="presentation" class="active">
                  <a href="#ggen" role="tab" id="ggen-tab" data-toggle="tab" aria-controls="ggen" aria-expanded="true">General</a>
                </li>
                <li role="presentation">
                  <a href="#gmem" role="tab" id="gmem-tab" data-toggle="tab" aria-controls="gmem" aria-expanded="false">Members</a>
                </li>
                <li role="presentation">
                  <a href="#gper" role="tab" id="gper-tab" data-toggle="tab" aria-controls="gper" aria-expanded="false">Permissions</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ggen" aria-labelledby="ggen-tab">
                  <h4>General</h4>
                  <div>ID: <span id="groupInfoId"></span></div>
                  <div>Me: <span id="groupInfoMe"></span></div>
                  <h4>Meta</h4>
                  <pre id="groupInfoMetaRaw"></pre>
                </div>
                <div role="tabpanel" class="tab-pane" id="gmem" aria-labelledby="gmem-tab">
                  <h4>Members
                    <a class="btn btn-link" data-toggle="collapse" href="#groupInfoMembersRaw">Show JSON</a>
                  </h4>

                  <pre id="groupInfoMembersRaw" class="collapse"></pre>

                  <table class="table">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Role</th>
                        <th>Presence</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="groupInfoMembers">
                      <!-- <tr><td>usr:alex</td><td>user</td><td><a href="#">kick</a></td></tr> -->
                    </tbody>
                  </table>

                  <div class="form-inline">
                    <input type="text" class="form-control" id="newMemberUsername" placeholder="New member" autocomplete="off">
                    <button class="btn btn-primary" type="button" id="newMemberButton">Invite</button>
                  </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="gper" aria-labelledby="gper-tab">
                  <h4>Permissions</h4>
                  <pre id="groupInfoPermsRaw"></pre>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

</div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Enable TemaSys WebRTC plugin to add WebRTC support in Safari and IE -->
    <script src="https://cdn.temasys.com.sg/adapterjs/0.13.x/adapter.debug.js"></script>
    <script>
      // Do not show plugin banner if no plugin to download
      if (!AdapterJS.WebRTCPlugin.pluginInfo.downloadLink) {
        AdapterJS.options.hidePluginInstallPrompt = true;
      }
    </script>
    <!-- Include Cordova js file for Cordova app -->
    <!-- <script src="cordova.js"></script> -->
    <!-- Include Bit6 SDK, only for the web app not Cordova! -->
    <script>
      /* bit6 - v0.9.7 - 2016-04-28 */ (function(){var a=[].slice;window.bit6||(window.bit6={}),bit6.EventEmitter=function(){function b(){this.events={}}return b.prototype.emit=function(){var b,c,d,e,f,g;if(c=arguments[0],b=2<=arguments.length?a.call(arguments,1):[],!this.events[c])return!1;for(g=this.events[c],d=0,e=g.length;e>d;d++)f=g[d],f.apply(null,b);return!0},b.prototype.addListener=function(a,b){var c;return this.emit("newListener",a,b),(null!=(c=this.events)[a]?c[a]:c[a]=[]).push(b),this},b.prototype.on=b.prototype.addListener,b.prototype.once=function(a,b){var c;return c=function(d){return function(){return d.removeListener(a,c),b.apply(null,arguments)}}(this),this.on(a,c),this},b.prototype.removeListener=function(a,b){var c;return this.events[a]?(this.events[a]=function(){var d,e,f,g;for(f=this.events[a],g=[],d=0,e=f.length;e>d;d++)c=f[d],c!==b&&g.push(c);return g}.call(this),this):this},b.prototype.off=b.prototype.removeListener,b.prototype.removeAllListeners=function(a){return delete this.events[a],this},b}()}).call(this),function(){bit6.Conversation=function(){function a(a){this.id=a,this.unread=0,this.updated=0,this.messages=[],this.modified=!0,this.uri=this.id}return a.prototype.isGroup=function(){return 0===this.id.indexOf("grp:")},a.prototype.getUnreadCount=function(){return this.unread},a.prototype.getLastMessage=function(){var a;return a=this.messages.length,a>0?this.messages[a-1]:null},a.prototype.appendMessage=function(a){return this.messages.push(a),this.updated<a.created&&(this.updated=a.created),this._updateUnreadCount(),this.modified=!0,this.modified},a.prototype.updateMessage=function(a){return this._updateUnreadCount(),this.modified},a.prototype.removeMessage=function(a){var b,c,d,e,f,g,h,i;for(f=this.messages.length,f>0&&this.messages[f-1].id===a.id&&(this.modified=!0),c=-1,h=this.messages,b=d=0,e=h.length;e>d;b=++d)if(g=h[b],g.id===a.id){c=b;break}return c>=0&&(i=this.messages.splice(c,1)),this._updateUnreadCount(),this.modified},a.prototype._updateUnreadCount=function(){var a,b,c,d,e;for(d=0,e=this.messages,a=0,b=e.length;b>a;a++)c=e[a],c.canMarkRead()&&d++;return this.modified||(this.modified=d!==this.unread),this.unread=d},a.prototype.domId=function(){return this.id?bit6.Session.base64urlEncode(this.id):(console.log("ConvId is null",this),null)},a.fromDomId=function(a){return a?bit6.Session.base64urlDecode(a):a},a}()}.call(this),function(){var a=function(a,c){function d(){this.constructor=a}for(var e in c)b.call(c,e)&&(a[e]=c[e]);return d.prototype=c.prototype,a.prototype=new d,a.__super__=c.prototype,a},b={}.hasOwnProperty;bit6.Dialog=function(b){function c(a,b,d,e){var f,g,h,i,j,k,l,m,n;for(this.client=a,this.outgoing=b,this.other=d,this.options=e,c.__super__.constructor.apply(this,arguments),this.me=this.client.session.identity,null==this.options&&(this.options={}),l=["audio","video","screen","data"],g=0,i=l.length;i>g;g++)n=l[g],null==(f=this.options)[n]&&(f[n]=!1);for(0!==this.other.indexOf("pstn:")&&0!==this.other.indexOf("grp:")&&(this.options.data=!0),this.remoteOptions={},m=["audio","video"],h=0,j=m.length;j>h;h++)n=m[h],this.remoteOptions[n]=this.options[n]&&!this.outgoing;this.params={callID:null},k="uid:"+this.client.session.userid+"@"+this.client.apikey,this.renegotiating=!1,this.outgoing?(this.state="req",this.params.destination_number=this.other+"@"+this.client.apikey,this.params.caller_id_name=this.me,this.params.caller_id_number=k,this.params.callID=bit6.JsonRpc.generateGUID()):(this.state="pre-answer",this.params.callee_id_name=this.me,this.params.callee_id_number=k),this.transfers=[]}return a(c,b),c.prototype.connect=function(a){var b,c,d,e,f,g;for(null==a&&(a={}),f=["audio","video","screen"],b=0,c=f.length;c>b;b++)g=f[b],null!=a[g]&&(d=a[g],e=this.options[g],e!==d&&(this.options[g]=d));return this.client._ensureRtcCapture(this.options,function(a){return function(b){return null!=b?(a.emit("error","Unable to start media"),a.hangup()):a._onMediaReady()}}(this)),this},c.prototype.hasVideoStreams=function(){return this.options.video||this.remoteOptions.video},c.prototype._onMediaReady=function(){var a;return this.renegotiating||(this.outgoing||this._sendAcceptRejectIncomingCall(!0),this.emit("progress")),null==this.rtc&&this._createRtc(),this.rtc.update(this.client.capture,this.options,this.remoteOptions),this.renegotiating&&!this.outgoing?(a={audio:this.options.audio,video:this.options.video},this.sendJson("reneg2",a)):void 0},c.prototype._createRtc=function(){var a;return this.rtc=this.client._createRtc(),this.rtc.on("offerAnswer",function(a){return function(b){return a._sendOfferAnswer(b,function(c,d){return"answer"===b.type?a.emit("answer"):void 0})}}(this)),this.rtc.on("video",function(a){return function(b,c){return a.client._emitVideoEvent(b,a,c)}}(this)),this.rtc.on("dcOpen",function(a){return function(){return a._startNextPendingTransfer()}}(this)),this.rtc.on("transfer",function(a){return function(b){var c,d;if(b.outgoing||(c=b.info.name),"offer2"===c||"answer2"===c?b.completed()&&(d=b.json(),a._gotRemoteOfferAnswer(d.type,d)):"reneg2"===c?b.completed()&&(d=b.json(),null!=d.audio&&(a.remoteOptions.audio=d.audio),null!=d.video&&(a.remoteOptions.video=d.video),a.connect()):a.emit("transfer",b),b.err);else if(b.completed()&&b.outgoing)return a._startNextPendingTransfer()}}(this)),a=this.client.session.config.rtc.iceServers,this.rtc.init(this.outgoing,a)},c.prototype._startNextPendingTransfer=function(){var a,b,c,d,e;for(c=this.transfers,d=[],a=0,b=c.length;b>a;a++){if(e=c[a],e.pending()){this.rtc.startOutgoingTransfer(e);break}d.push(void 0)}return d},c.prototype.sendFile=function(a,b){var c;return c=new bit6.Transfer(!0,a,b),this.transfers.push(c),c._ensureSourceData(function(a){return function(){return null!=c.err&&a.emit("transfer",c),null!=c.data?a.rtc.startOutgoingTransfer(c):void 0}}(this))},c.prototype.sendJson=function(a,b){var c;return c=new bit6.Transfer(!0,{name:a}),c.json(b),this.transfers.push(c),null!=c.data?this.rtc.startOutgoingTransfer(c):void 0},c.prototype.hangup=function(){return this.rtc?(this.rtc.stop(),this.rtc=null,this._sendHangupCall()):this.outgoing||this._sendAcceptRejectIncomingCall(!1),this.emit("end")},c.prototype._sendOfferAnswer=function(a,b){var c,d,e;return c=a,"offer"===c.type?this.renegotiating?this.sendJson("offer2",c):(this.state="sent-offer",c.dialogParams=this.params,null!=(d=this.client.rpc)?d.call("verto.invite",c,b):void 0):"answer"===c.type?this.renegotiating?this.sendJson("answer2",c):(this.state="sent-answer",c.dialogParams=this.params,this.renegotiating=!0,null!=(e=this.client.rpc)?e.call("verto.answer",c,b):void 0):void 0},c.prototype._sendAcceptRejectIncomingCall=function(a){var b;return b=a?"accept":"reject",this.client._sendNotification(this.rdest,b)},c.prototype._sendHangupCall=function(){var a,b;return this.state="sent-bye",a={dialogParams:this.params},null!=(b=this.client.rpc)?b.call("verto.bye",a,function(a){return function(a,b){}}(this)):void 0},c.prototype.handleRpcCall=function(a,b){switch(a){case"verto.bye":return this._gotHangup(b);case"verto.invite":return this.params.callID=b.callID,this.params.caller_id_name=b.caller_id_name,this.params.caller_id_number=b.caller_id_number,this._gotRemoteOfferAnswer("offer",b);case"verto.answer":return this._gotRemoteOfferAnswer("answer",b),this.emit("answer")}},c.prototype._gotRemoteOfferAnswer=function(a,b){return this.state="got-"+a,b.type=a,"answer"===a&&(this.renegotiating=!0),null!=this.rtc?this.rtc.gotRemoteOfferAnswer(b,this.client.capture):console.log("Error: RTC not inited")},c.prototype._gotHangup=function(a){return this.state="got-bye",null!=this.rtc?(this.rtc.stop(),this.rtc=null,this.emit("end")):void 0},c}(bit6.EventEmitter)}.call(this),function(){bit6.Group=function(){function a(a){this.id=a,this.meta=null,this.permissions=null,this.members=[],this.updated=0}return a.prototype.update=function(a,b){var c,d;if(!b){if(null==a.updated)return!1;if(this.updated===a.updated)return!1}for(c in a)d=a[c],this[c]=d;return!0},a.prototype._updateMemberProfile=function(a,b){var c,d,e,f;for(f=this.members,c=0,d=f.length;d>c;c++)if(e=f[c],e.id===a)return e.profile=b,!0;return!1},a.prototype.getMember=function(a){var b,c,d,e;for(e=this.members,b=0,c=e.length;c>b;b++)if(d=e[b],d.id===a)return d;return null},a.prototype.getConversationId=function(){return"grp:"+this.id},a}()}.call(this),function(){bit6.JsonRpc=function(){function a(a){var b;this.options=a,null==(b=this.options).sessid&&(b.sessid=bit6.JsonRpc.generateGUID()),this.currentId=1,this.callbacks={},this.queue=[],this.closed=!1}return a.prototype.reconnectDelay=2e3,a.prototype.connect=function(){return this.closed=!1,null==this.ws?(this.ws=new WebSocket(this.options.wsUrl),this.ws.onopen=function(a){return function(){var b,c,d,e;if(a.queue.length>0){for(e=a.queue,b=0,c=e.length;c>b;b++)d=e[b],a.ws.send(d);return a.queue=[]}return a.call("login",{},function(a,b){return a?console.log("rpc login err=",a,"result=",b):void 0})}}(this),this.ws.onmessage=function(a){return function(b){var c,d,e,f;try{if(f=JSON.parse(b.data),null==f.result&&null==f.error||null!=f.id&&(c=a.callbacks[f.id],delete a.callbacks[f.id],c(f.error,f.result)),null!=f.method&&null!=f.params)return null!=f.id?a.options.onRpcCall(f.method,f.params,function(b,c){var d;return d={jsonrpc:"2.0",id:f.id},null!=b&&(d.error=b),null!=c&&(d.result=c),a._send(d)}):a.options.onRpcCall(f.method,f.params)}catch(d){return e=d,console.log("Exception parsing JSON response "+e),console.log("  -- RAW {{{"+b.data+"}}}")}}}(this),this.ws.onclose=function(a){return function(){return a.closed?void 0:(a.ws=null,a.queue=[],setTimeout(function(){return a.connect()},a.reconnectDelay))}}(this),this.ws.onerror=function(a){return function(){return console.log("Rpc ws got error. Socket state="+a.ws.readyState)}}(this)):void 0},a.prototype.notify=function(a,b){return this.call(a,b,!1)},a.prototype.call=function(a,b,c){var d;return null==this.ws&&this.connect(),d={jsonrpc:"2.0",method:a,params:b},d.params.login=this.options.login,d.params.passwd=this.options.password,null!=this.options.sessid&&(d.params.sessid=this.options.sessid),c!==!1&&(d.id=this.currentId++,this.callbacks[d.id]=c),this._send(d)},a.prototype._send=function(a){var b;return b=JSON.stringify(a),null!=this.ws&&1===this.ws.readyState?this.ws.send(b):this.queue.push(b)},a.prototype.close=function(){return this.closed=!0,null!=this.ws&&this.ws.close(),this.ws=null},a.generateGUID=function(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(a){var b,c;return b=16*Math.random()|0,c="x"===a?b:3&b|8,c.toString(16)})},a}()}.call(this),function(){var a=function(a,c){function d(){this.constructor=a}for(var e in c)b.call(c,e)&&(a[e]=c[e]);return d.prototype=c.prototype,a.prototype=new d,a.__super__=c.prototype,a},b={}.hasOwnProperty,c=[].slice;bit6.Client=function(b){function d(a){var b,c,f,g,h;if(d.__super__.constructor.apply(this,arguments),null==(null!=a?a.apikey:void 0))throw'Missing required "apikey" option';this.apikey=a.apikey,h=null!=(c=null!=(f=a.url)?f:a.env)?c:"prod",this.apiurl=null!=(g=e[h])?g:h,b=null!=window.RTCPeerConnection||null!=window.mozRTCPeerConnection||null!=window.webkitRTCPeerConnection,this.caps={audio:b,video:b,websocket:"undefined"!=typeof WebSocket&&null!==WebSocket,attachment:"undefined"!=typeof Blob&&null!==Blob&&"undefined"!=typeof FormData&&null!==FormData&&"undefined"!=typeof FileReader&&null!==FileReader},this._clear(),this.session=new bit6.Session(this)}var e;return a(d,b),d.version="0.9.7",e={prod:"https://api.bit6.com",dev:"https://api.b6dev.net",local:"https://127.0.0.1:3000"},d.prototype._clear=function(){return this.lastSince=0,this.me={},this.messages={},this.conversations={},this.groups={},this.presence={},this.lastTypingSent=0,this.capture=null,this.dialogs=[]},d.prototype._onLogin=function(a){return this._connectRt(),this._loadMe(function(b){return function(b){return a(null)}}(this))},d.prototype._onLogout=function(a){return this._disconnectRt(),this._clear(),null!=a?a(null):void 0},d.prototype._loadMe=function(a){var b;return b={embed:"devices,identities,groups,messages",since:this.lastSince},this.api("/me",b,function(b){return function(c,d,e){var f,g,h,i,j;if(c)return a(c);for(b.lastSince=null!=(i=null!=e?e.etag:void 0)?i:0,j=["devices","identities","data","profile"],f=0,h=j.length;h>f;f++)g=j[f],null!=d[g]&&(b.me[g]=d[g]);return null!=d.groups&&b._processGroupMemberships(d.groups),b._processMessages(d.messages),a()}}(this))},d.prototype.setPrivateData=function(a,b){return this._setDataOrProfile("data",a,b)},d.prototype.setPublicProfile=function(a,b){return this._setDataOrProfile("profile",a,b)},d.prototype._setDataOrProfile=function(a,b,c){var d,e;return d=null!=(e=this.me[a])?e:null,this.me[a]=b,this.api("/me/"+a,"POST",b,function(b){return function(e,f){return e?(delete b.me[a],d&&(b.me[a]=d)):b.me[a]=f,"function"==typeof c?c(e,f):void 0}}(this))},d.prototype.getConversation=function(a){var b;return null!=(b=this.conversations[a])?b:null},d.prototype.getConversationByUri=function(a){var b;return null!=(b=this.conversations[a])?b:null},d.prototype.getSortedConversations=function(){var a;return a=this.conversations,Object.keys(a).sort(function(b,c){return a[c].updated-a[b].updated}).map(function(b){return a[b]})},d.prototype.addEmptyConversation=function(a){var b,c,d;return c=a,b=null!=(d=this.conversations[c])?d:null,b||(b=new bit6.Conversation(c),this.conversations[c]=b,b.updated=Date.now(),this.emit("conversation",b,1)),b},d.prototype.deleteConversation=function(a,b){var c;return a=(null!=a?a.id:void 0)?a:this.getConversation(a),c=encodeURIComponent(a.id),this.api("/me/messages?other="+c,"DELETE",function(c){return function(d,e){var f,g,h,i,j;if(d)return"function"==typeof b?b(d):void 0;for(i=a.messages.slice(),f=0,g=i.length;g>f;f++)h=i[f],h.deleted=Date.now(),c._processMessage(h,!0);return j=0,a.isGroup()||(j=-1,delete c.conversations[a.id],a.deleted=Date.now()),c.emit("conversation",a,j),"function"==typeof b?b(null):void 0}}(this))},d.prototype.markConversationAsRead=function(a){var b,c,d,e,f,g;if(e=0,!(null!=a?a.messages:void 0))return e;for(g=a.messages,b=0,c=g.length;c>b;b++)d=g[b],d.canMarkRead()&&(d.status(bit6.Message.READ),this._processMessage(d),e++);return 0!==e?(f=encodeURIComponent(a.uri),this.api("/me/messages?other="+f,"PUT",{status:"read"},function(a,b){return a?console.log("markAsRead result=",b,"err=",a):void 0}),e):void 0},d.prototype.compose=function(a){var b;return b=new bit6.Outgoing(this),null!=a&&b.to(a),b},d.prototype._failOutgoingMessage=function(a){return a.status(bit6.Message.FAILED),this._processMessage(a)},d.prototype._sendMessagePost=function(a,b){var c;return c=a.id,this.api("/me/messages","POST",a._export(),function(d){return function(e,f){var g;return e?(d._failOutgoingMessage(a),"function"==typeof b?b(e):void 0):(d._processMessage(f),g={id:c,deleted:Date.now()},d._processMessage(g),"function"==typeof b?b(null,d.messages[f.id]):void 0)}}(this))},d.prototype.markMessageAsRead=function(a){return a.canMarkRead()?(a.status(bit6.Message.READ),this._processMessage(a),this.api("/me/messages/"+a.id,"PUT",{status:"read"},function(a,b){}),!0):!1},d.prototype.deleteMessage=function(a,b){return a=(null!=a?a.id:void 0)?a:this.messages[a],this.api("/me/messages/"+a.id,"DELETE",function(c){return function(d,e){return d?"function"==typeof b?b(d):void 0:(a.deleted=Date.now(),c._processMessage(a),"function"==typeof b?b(null):void 0)}}(this))},d.prototype._processMessages=function(a){var b,c,d,e,f,g,h;if(a){for(c=0,e=a.length;e>c;c++)f=a[c],this._processMessage(f,!0);g=this.conversations,h=[];for(d in g)b=g[d],b.modified?(b.modified=!1,h.push(this.emit("conversation",b,0))):h.push(void 0);return h}},d.prototype._processMessage=function(a,b){var c,d,e,f,g,h,i;if(e=null!=(h=this.messages[a.id])?h:null,g=0,!e){if((null!=a?a.deleted:void 0)>0)return null;e=a instanceof bit6.Message?a:new bit6.Message(a),this.messages[e.id]=e,g=1}return d=e.getConversationId(),c=f=null!=(i=this.conversations[d])?i:null,c||(c=new bit6.Conversation(d),this.conversations[d]=c),g>0?c.appendMessage(e):(e.updateMessage(a),(null!=a?a.deleted:void 0)>0?(delete this.messages[e.id],c.removeMessage(e),g=-1):c.updateMessage(e)),f||(c.modified=!1,this.emit("conversation",c,1)),this.emit("message",e,g),c.modified&&!b&&(c.modified=!1,this.emit("conversation",c,0)),e},d.prototype.getGroup=function(a){var b;return 0===(null!=a?a.indexOf("grp:"):void 0)&&(a=a.substring(4)),null!=(b=this.groups[a])?b:null},d.prototype.getGroupById=function(a){return this.getGroup(a)},d.prototype.createGroup=function(a,b){return null==a&&(a={}),a.identity=this.session.identity,this.api("/groups","POST",a,function(a){return function(c,d){return c?b(c):a._loadMe(function(c){return c?b(c):b(null,a.getGroup(d.id))})}}(this))},d.prototype.joinGroup=function(a,b,c){return this.inviteGroupMember(a,"me",b,c)},d.prototype.leaveGroup=function(a,b){return this.kickGroupMember(a,"me",b)},d.prototype.inviteGroupMember=function(a,b,c,d){var e,f;return e=null!=a.id?a.id:a,"me"===b&&(b=this.session.identity),f={id:b,role:c},this.api("/groups/"+e+"/members","POST",f,function(a){return function(b,c){return b?d(b):a._loadMe(function(a){return d(a?a:null)})}}(this))},d.prototype.kickGroupMember=function(a,b,c){return null==a.id&&(a=this.getGroup(a)),null==a?c(null):("me"===b&&(b=a.me.identity),b.id||(b=a.getMember(b)),null==b?c(null):this.api("/groups/"+a.id+"/members/"+b.id,"DELETE",function(a){return function(b){return b?c(b):a._loadMe(function(a){return c(a?a:null)})}}(this)))},d.prototype._processGroupMemberships=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q;for(q=this.groups,this.groups={},c=[],d=0,i=a.length;i>d;d++)f=a[d],k={identity:f.identity,role:f.role},l=null!=(n=null!=f?f.group:void 0)?n:{id:f.id},l.me=k,m=0,b=null!=(o=q[l.id])?o:null,null==b?(m=1,b=new bit6.Group(l.id)):delete q[l.id],this.groups[b.id]=b,g=b.update(l),g&&this.emit("group",b,m),this._ensureConversationForGroup(b,g),g&&"left"!==k.role&&c.push(b.id);for(e in q)b=q[e],this.emit("group",b,-1);for(p=[],h=0,j=c.length;j>h;h++)e=c[h],p.push(this._loadGroupWithMembers(e,!1));return p},d.prototype._loadGroupWithMembers=function(a,b,c){return this.api("/groups/"+a,{embed:"members"},function(d){return function(e,f){return d._processGroup(a,f),e&&b?d._loadMe(function(a){return"function"==typeof c?c(a):void 0}):"function"==typeof c?c(e,f):void 0}}(this))},d.prototype._processGroup=function(a,b){var c,d,e,f,g,h,i,j;if(c=this.groups[a],null==c)return void console.log("syncGroup - could not find Group in local DB",a,"data=",b);if(g=0,null==b?null!=(h=c.me)&&(h.role="left"):c.update(b,!0),null!=(i=c.me)?i.identity:void 0)for(j=c.members,d=0,e=j.length;e>d;d++)if(f=j[d],f.id===c.me.identity){c.me.role=f.role;break}return this._ensureConversationForGroup(c,g>=0),this.emit("group",c,g)},d.prototype._ensureConversationForGroup=function(a,b){var c,d,e;return e=0,d=a.getConversationId(),c=this.conversations[d],c||(this.conversations[d]=c=new bit6.Conversation(d),c.updated=a.updated,e=1),e||b?this.emit("conversation",c,e):void 0},d.prototype.sendTypingNotification=function(a){var b;return b=Date.now(),b-this.lastTypingSent>7e3?(this.lastTypingSent=b,this._sendNotification(a,"typing")):void 0},d.prototype.sendNotification=function(a,b,c){return(null!=b?b.length:void 0)<1||"_"===b.charAt(0)?!1:this._sendNotification(a,"_"+b,c)},d.prototype._sendNotification=function(a,b,c){var d,e,f;return e={type:b,from:this.session.identity},null!=c&&(e.data=c),d={to:a,body:JSON.stringify(e)},null!=(f=this.rpc)&&f.call("verto.info",{msg:d},function(a){return function(a,b){}}(this)),!0},d.prototype.startCall=function(a,b){return this._createDialog(!0,a,b)},d.prototype.startPhoneCall=function(a){var b;return b="pstn:"+a,this.startCall(b,{audio:!0})},d.prototype.findDialogByCallID=function(a){var b,c,d,e,f;for(e=this.dialogs,c=0,d=e.length;d>c;c++)if(b=e[c],(null!=(f=b.params)?f.callID:void 0)===a)return b;return null},d.prototype.findDialogByOther=function(a){var b,c,d,e;for(e=this.dialogs,c=0,d=e.length;d>c;c++)if(b=e[c],b.other===a)return b;return null},d.prototype.findDialogByRdest=function(a){var b,c,d,e;for(e=this.dialogs,c=0,d=e.length;d>c;c++)if(b=e[c],b.rdest===a)return b;return null},d.prototype._deleteDialog=function(a){var b,c,d,e,f,g;for(f=this.dialogs,d=c=0,e=f.length;e>c;d=++c)if(b=f[d],b===a){this.dialogs.splice(d,1);break}return 0===this.dialogs.length?(null!=(g=this.capture)&&g.stop(),this.capture=null):void 0},d.prototype._createDialog=function(a,b,c){var d;return(d=this.findDialogByOther(b))?d:(d=new bit6.Dialog(this,a,b,c),this.dialogs.push(d),d.on("error",function(a){return function(a){return console.log("Dialog error: ",d,a)}}(this)),d.on("end",function(a){return function(){return a._deleteDialog(d)}}(this)),d)},d.prototype._createDeviceId=function(){return"web-"+bit6.JsonRpc.generateGUID()},d.prototype._createRtc=function(){return new bit6.Rtc},d.prototype._createRtcCapture=function(){return new bit6.RtcCapture},d.prototype._ensureRtcCapture=function(a,b){return this.capture||(this.capture=this._createRtcCapture(),this.capture.on("video",function(a){return function(b,c){return a._emitVideoEvent(b,null,c)}}(this))),this.capture.request(a,b)},d.prototype._emitVideoEvent=function(a,b,c){return this.emit("video",a,b,c)},d.prototype.getNameFromIdentity=function(a){var b,c,d,e,f,g;if(g=a,null==a)return console.log("getNameFromId null",a),null;if(d=a.split(":"),2!==d.length)return g;switch(d[0]){case"usr":case"pstn":case"mailto":g=d[1];break;case"grp":b=this.getGroup(a),b?(g=null!=(e=null!=(f=b.meta)?f.title:void 0)?e:null,!g&&b.members.length&&(d=function(){var a,d,e,f;for(e=b.members,f=[],a=0,d=e.length;d>a;a++)c=e[a],"user"!==c.role&&"admin"!==c.role||f.push(this.getNameFromIdentity(c.id));return f}.call(this),g=d.length<4?d.join(", "):d[0]+", "+d[1]+" + "+(d.length-2)+" more"),null==g&&(g="Untitled Group")):(console.log("Group not found: "+a),g="Group not found")}return g},d.prototype._handleRtMessage=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q;switch(a.type){case"push":return this._handlePushRtMessage(a.data);case"update":if(null!=(null!=(h=a.data)?h.messages:void 0)&&this._processMessages(a.data.messages),(null!=(i=a.data)&&null!=(j=i.groups)?j.length:void 0)>0){for(k=a.data.groups,q=[],d=0,e=k.length;e>d;d++)b=k[d],q.push(this._loadGroupWithMembers(b.id,!0));return q}break;case"presence":if((null!=a?a.from:void 0)&&null!=(null!=a?a.data:void 0)){if(f=this.presence[a.from],this.presence[a.from]=a.data,null==a.data.status&&(this.presence[a.from].status=null!=(l=null!=f?f.status:void 0)?l:"offline"),g=null!=(m=null!=(n=a.data)?n.profile:void 0)?m:null,g&&null!=this.groups){o=this.groups;for(c in o)b=o[c],b._updateMemberProfile(a.from,g)&&this.emit("group",b,0)}return this.emit("notification",a)}break;case"typing":return this.emit("notification",a);default:if((null!=a&&null!=(p=a.type)?p.length:void 0)>1&&"_"===a.type.charAt(0))return a.type=a.type.substring(1),this.emit("notification",a)}},d.prototype._handlePushRtMessage=function(a){var b,c,d,e;switch(d=bit6.Message.typeFromFlags(a.flags)){case bit6.Message.INC_CALL:return c=bit6.Message.channelFromFlags(a.flags),e={audio:(c&bit6.Message.AUDIO)===bit6.Message.AUDIO,video:(c&bit6.Message.VIDEO)===bit6.Message.VIDEO,data:(c&bit6.Message.DATA)===bit6.Message.DATA},b=this._createDialog(!1,a.sender,e),b.rdest=a.rdest,this.emit("incomingCall",b);case bit6.Message.MISSED_CALL:if(console.log("missed call from",a.sender,"rdest=",a.rdest),b=this.findDialogByRdest(a.rdest),null!=b)return b.hangup();break;case bit6.Message.ACCEPTED_CALL:return console.log("accepted call from",a.sender,"rdest=",a.rdest);case bit6.Message.REJECTED_CALL:return console.log("rejected call from",a.sender,"rdest=",a.rdest);case 256:case 512:case 768:case 1024:return this._loadMe(function(a){return a?console.log("LoadMsgDeltas on push done",a):void 0});default:return console.log("Unknown push: ",a)}},d.prototype._handleRpcNotify=function(a,b){},d.prototype._handleRpcCall=function(a,b,c){var d,e,f,g,h,i;switch(a){case"verto.info":if(null!=(null!=b&&null!=(g=b.msg)?g.body:void 0))try{i=JSON.parse(b.msg.body),this._handleRtMessage(i)}catch(e){f=e,console.log("Exception parsing JSON response verto.info "+f),console.log("  -- RAW {{{"+b.msg.body+"}}}")}break;case"verto.bye":d=this.findDialogByCallID(b.callID),d&&d.handleRpcCall(a,b);break;case"verto.invite":h=b.caller_id_name,h&&(h=h.split("@")),d=this.findDialogByOther(b.caller_id_name),d&&d.handleRpcCall(a,b);break;case"verto.answer":d=this.findDialogByCallID(b.callID),d&&d.handleRpcCall(a,b)}return c(null,{method:a})},d.prototype._connectRt=function(){var a,b,c,d,e;return e=null!=(b=this.session.config)&&null!=(c=b.rtc)?c.vertoServers:void 0,e.length<1?void console.log("Error: no Verto servers"):(d=e[0],a={wsUrl:d.url,login:d.username,password:d.credential,onRpcCall:function(a){return function(b,c,d){return a._handleRpcCall(b,c,d)}}(this),onRpcNotify:function(a){return function(b,c){return a._handleRpcNotify(b,c)}}(this)},this.rpc=new bit6.JsonRpc(a),this.rpc.connect())},d.prototype._disconnectRt=function(){var a;return null!=(a=this.rpc)&&a.close(),this.rpc=null},d.prototype.api=function(){var a,b,d,e;return e=arguments[0],d=3<=arguments.length?c.call(arguments,1,b=arguments.length-1):(b=1,[]),a=arguments[b++],this._api.apply(this,["/app/1"+e].concat(c.call(d),[a]))},d.prototype._api=function(){var a,b,d,e,f,g,h,i;return g=arguments[0],f=3<=arguments.length?c.call(arguments,1,d=arguments.length-1):(d=1,[]),a=arguments[d++],1===f.length?("string"==typeof f[0]&&(e=f[0]),"object"==typeof f[0]&&(b=f[0])):f.length>=2&&(e=f[0],b=f[1]),null==e&&(e="get"),null==b&&(b={}),e=e.toLowerCase(),h=this.apiurl+g,h+=g.indexOf("?")<0?"?":"&",h+="apikey="+this.apikey,"post"!==e&&(h+="&_method="+e),h+="&envelope=1",this.session.token&&(b._auth="bearer "+this.session.token),i=new XMLHttpRequest,i.open("POST",h,!0),i.setRequestHeader("Content-Type","application/json"),i.onreadystatechange=function(){var b,c,d,e;if(4===i.readyState){e=null;try{e=JSON.parse(i.response)}catch(b){return c=b,void("function"==typeof a&&a({status:501,message:"Cannot parse response",data:i.response}))}return null==(null!=e?e.status:void 0)?void("function"==typeof a&&a({status:501,message:"Incorrect envelope",data:i.response})):(d=200===i.status||0===i.status,d&&e.status>=200&&e.status<300?"function"==typeof a?a(null,e.response,e.headers):void 0:"function"==typeof a?a(e.response,null,e.headers):void 0)}},i.send(JSON.stringify(b))},d.prototype.urlencodeJsObject=function(a,b){var c,d,e,f;return e=[],e=function(){var e;e=[];for(d in a)f=a[d],c=b?b+"["+d+"]":d,"object"==typeof f?e.push(this.urlencodeJsObject(f,c)):e.push(encodeURIComponent(c)+"="+encodeURIComponent(f));return e}.call(this),e.join("&")},d.normalizeIdentityUri=function(a){var b,c,d,e,f;if(e=a.indexOf(":"),0>e)return null;switch(c=a.substr(0,e),c=c.trim().toLowerCase(),f=a.substr(e+1),b=d=null,c){case"mailto":f=f.toLowerCase(),b=/[^a-z0-9._%+-@]/,d=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,8}$/;break;case"grp":b=/[\s]/,d=/[0-9a-zA-Z._]{22}/;break;case"tel":b=/[^\\d+]/,d=/^\+[1-9]{1}[0-9]{8,15}$/;break;case"uid":f=f.toLowerCase(),b=/[^0-9a-f-]/,d=/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/;break;case"usr":f=f.toLowerCase(),b=/[^a-z0-9.]/,d=/^[a-z0-9.]+$/;break;default:b=/[^a-zA-Z0-9._%+-@]/}return b&&(f=f.replace(b,"")),f.search(d)<0?null:c+":"+f},d}(bit6.EventEmitter)}.call(this),function(){bit6.Message=function(){function a(a){this.id=null,this.me=null,this.other=null,this.flags=0,null!=a&&this.populate(a)}var b,c,d,e,f,g;return c=4096,d=15,b=240,e=3840,a.DELETED=0,a.SENDING=1,a.SENT=2,a.FAILED=3,a.DELIVERED=4,a.READ=5,a.ANSWER=1,a.MISSED=2,a.NOANSWER=4,a.SMS=16,a.AUDIO=16,a.VIDEO=128,a.DATA=32,a.TEXT=256,a.ATTACH=512,a.GEOLOC=768,a.CUSTOM=1024,a.CALL=1280,a.INC_CALL=1280,a.MISSED_CALL=1536,g={1:"Sending",2:"Sent",3:"Failed",4:"Delivered",5:"Read"},f={1:"Answered",2:"Missed",3:"Failed",4:"No answer"},a.prototype.populate=function(a){var b,c,d,e,f;for(e=["id","flags","me","other","content","data","created","updated","deleted"],f=[],b=0,d=e.length;d>b;b++)c=e[b],null!=(null!=a?a[c]:void 0)?f.push(this[c]=a[c]):f.push(void 0);return f},a.prototype.updateMessage=function(a){return null!=a.deleted&&(this.deleted=a.deleted),a.flags&&(this.flags=a.flags),null!=a.others?null!=this.others?this._updateMessageOthers(this.others,a.others):this.others=a.others:void 0},a.prototype._updateMessageOthers=function(a,b){var c,d,e,f,g,h,i,j,k,l,m;for(k=[],e=0,g=b.length;g>e;e++){for(m=b[e],d=-1,c=f=0,h=a.length;h>f;c=++f)if(i=a[c],i.uri===m.uri){d=c;break}0>d?k.push(a.push(m)):(l=null!=(j=a[d])?j.status:void 0,!l||l<m.status?k.push(a[d].status=m.status):k.push(void 0))}return k},a.prototype.incoming=function(){return 0!==(this.flags&c)},a.prototype.status=function(a){return null!=a&&(this.flags=this.flags&~d|a&d),this.flags&d},a.prototype.channel=function(a){return null!=a&&(this.flags=this.flags&~b|a&b),this.flags&b},a.prototype.type=function(a){return null!=a&&(this.flags=this.flags&~e|a&e),this.flags&e},a.prototype.isCall=function(){return(this.flags&e)===a.CALL},a.prototype.canMarkRead=function(){return this.incoming()&&!this.isCall()&&this.status()<bit6.Message.READ},a.prototype.getConversationId=function(){var a;return a=null!=this.me&&0===this.me.indexOf("grp:")?this.me:this.other,a||console.log("msgConvId is null",a),a},a.prototype.getStatusString=function(){var b,c,h;return h=this.flags&e,c=this.flags&d,b=h===a.CALL?f:g,b[c]},a.prototype.domId=function(){return"m"+this.id},a.fromDomId=function(a){return a.length>0&&"m"===a.charAt(0)?a.substring(1):a},a.typeFromFlags=function(a){return a&e},a.channelFromFlags=function(a){return a&b},a.statusFromFlags=function(a){return a&d},a}()}.call(this),function(){var a=function(a,c){function d(){this.constructor=a}for(var e in c)b.call(c,e)&&(a[e]=c[e]);return d.prototype=c.prototype,a.prototype=new d,a.__super__=c.prototype,a},b={}.hasOwnProperty;bit6.Outgoing=function(b){function c(a){this.client=a,c.__super__.constructor.apply(this,arguments),this.id=bit6.JsonRpc.generateGUID(),this.created=this.updated=Date.now(),this.flags=bit6.Message.TEXT|bit6.Message.SENDING,this.from(this.client.session.identity,this.client.session.displayName)}return a(c,b),c.prototype._export=function(){var a,b,c,d,e;for(d=["id","flags","me","from_name","other","content","data"],e={},a=0,c=d.length;c>a;a++)b=d[a],this[b]&&(e[b]=this[b]);return e},c.prototype.hasAttachment=function(){return null!=this.attachFile},c.prototype.to=function(a){return this.other=a,this},c.prototype.from=function(a,b){return this.me=a,b&&(this.from_name=b),this},c.prototype.text=function(a){return this.content=a,this},c.prototype.attach=function(a){return this.attachFile=a,this.flags=bit6.Message.ATTACH|this.status(),this.progress=0,this.total=-1,this},c.prototype.send=function(a){return this.hasAttachment()?(this._loadAttachmentAndThumbnail(function(b){return function(c){return b.client._processMessage(b),null!=c?"function"==typeof a?a(c):void 0:b._getUploadParams(function(c,d){return null!=c?"function"==typeof a?a(c):void 0:b._uploadAttachmentAndThumbnail(d,function(c){return null!=c?"function"==typeof a?a(c):void 0:b.client._sendMessagePost(b,a)})})}}(this)),this):(this.client._processMessage(this),this.client._sendMessagePost(this,a))},c.prototype._getUploadParams=function(a){var b,c,d;return null==(null!=(c=this.data)?c.type:void 0)?a("Attachment type is not specified",null):(b={type:this.data.type},b.thumb=null!=(d=this.thumbBlob)?d.type:void 0,this.client.api("/me/messages/attach","post",b,a))},c.prototype._loadAttachmentAndThumbnail=function(a){return bit6.Transfer.readFileAsArrayBuffer(this.attachFile,function(b){return function(c,d,e){return c&&console.log("Read file ",d,"err=",c),null!=c?a(c):b._handleAttachmentFileLoaded(d,e,a)}}(this))},c.prototype._uploadAttachmentAndThumbnail=function(a,b){
var c,d,e;return c=this.attachFile,d=0,e=a.uploads.attach,bit6.Outgoing.uploadFile(e.endpoint,e.params,c,function(c){return function(f){return f&&console.log("Main attach uploaded err=",f),null!=f?b(f):(c.data.attach=a.keys.attach,null==c.data.thumb||null==c.thumbBlob?b(null):(e=a.uploads.thumb,bit6.Outgoing.uploadFile(e.endpoint,e.params,c.thumbBlob,function(d){return d&&console.log("Thumb uploaded err=",d),null!=d?b(d):(c.data.thumb=a.keys.thumb,b(null))},function(a,b){return c.progress=a+d,c.total=b+d,c.client.emit("message",c,0)})))}}(this),function(a){return function(b,c){return d=b,a.progress=b,a.total=c,a.client.emit("message",a,0)}}(this))},c.prototype._handleAttachmentFileLoaded=function(a,b,c){var d,e,f,g,h,i,j,k;return k=null!=(i=null!=a?a.type:void 0)?i:"",f=0===k.indexOf("image/"),g=0===k.indexOf("video/"),e=0===k.indexOf("audio/"),f||g?(d=new Blob([b],a),j=(window.URL||window.webkitURL).createObjectURL(d),h=null,f?(h=new Image,h.onload=function(b){return function(){return b._attachmentMediaLoaded(h,a,c)}}(this)):(h=document.createElement("video"),h.setAttribute("preload",""),h.setAttribute("muted",""),h.onloadedmetadata=function(a){return function(){return console.log("Video meta loaded",h.videoWidth,h.videoHeight,h.duration)}}(this),h.onloadeddata=function(b){return function(){return console.log("Video loaded",h),b._attachmentMediaLoaded(h,a,c)}}(this)),h.src=j):e?(this.data={type:a.type},c(null)):c("Cannot handle files with type"+k)},c.prototype._attachmentMediaLoaded=function(a,b,c){return(window.URL||window.webkitURL).revokeObjectURL(a.src),bit6.Outgoing.createThumbnail(a,function(a){return function(d,e){return d&&console.log("Thumb created err=",d),null!=d?c(d):(null!=e&&(a.thumbBlob=bit6.Transfer.dataUrlToBlob(e)),a.data={type:b.type,attach:e,thumb:e},c(null))}}(this))},c.createThumbnail=function(a,b){var c,d,e,f,g,h,i,j,k;return g=320,f=320,k=null!=(h=null!=a?a.videoWidth:void 0)?h:a.width,j=null!=(i=null!=a?a.videoHeight:void 0)?i:a.height,k>j?k>g&&(j*=g/k,k=g):j>f&&(k*=f/j,j=f),c=document.createElement("canvas"),c.width=k,c.height=j,d=c.getContext("2d"),d.drawImage(a,0,0,k,j),e=c.toDataURL("image/jpeg"),b(null,e)},c.uploadFile=function(a,b,c,d,e){var f;return f=new bit6.Outgoing.UploadDataBuilder(b,c),f.build(function(b,c,f){return null!=b?d(b):bit6.Outgoing._upload(a,c,f,d,e)})},c._upload=function(a,b,c,d,e){var f,g,h;return h=new XMLHttpRequest,h.open("POST",a,!0),h.onload=function(a){return d(h.status>=200&&h.status<300?null:{status:h.status,text:h.statusText,info:h.responseText})},h.onerror=function(a){return console.log("xhr error",a),d(a)},h.onabort=function(a){return console.log("xhr cancel"),d(a)},h.onprogress=function(a){return console.log("xhr progress",a)},g=null!=(f=null!=h?h.upload:void 0)?f:null,g&&(g.onload=function(a){return console.log("xhr upload complete",a)},g.onerror=function(a){return console.log("xhr upload error",a)},g.onabort=function(a){return console.log("xhr upload cancel",a)},g.onprogress=function(a){var b;return b=a.lengthComputable?a.total:-1,"function"==typeof e?e(a.loaded,b):void 0}),null!=c&&h.setRequestHeader("Content-Type",c),h.send(b)},c}(bit6.Message),bit6.Outgoing.UploadDataBuilder=function(){function a(a,b){return this._needsFormDataShim()?void this._initMultiPart(a,b):this._createFormData(a,b)}return a.prototype._createFormData=function(a,b){var c,d;this.fd=new FormData;for(c in a)d=a[c],this.fd.append(c,d);return this.fd.append("file",b)},a.prototype._initMultiPart=function(a,b){var c,d;this.boundary=Array(21).join("-")+(+new Date*(1e16*Math.random())).toString(36),this.parts=[];for(c in a)d=a[c],this._append(c,d);return b instanceof File?this.fileToLoad=b:this._append("file",b)},a.prototype._append=function(a,b,c){return this.parts.push("--"+this.boundary+'\r\nContent-Disposition: form-data; name="'+a+'"'),b instanceof Blob&&(null==c&&(c="blob"),this.parts.push('; filename="'+c+'"\r\nContent-Type: '+b.type)),this.parts.push("\r\n\r\n"),this.parts.push(b),this.parts.push("\r\n")},a.prototype.build=function(a){return null!=this.fd?a(null,this.fd):this._ensureFileLoaded("file",this.fileToLoad,function(b){return function(c){return c?a(c):b._completeMultiPart(a)}}(this))},a.prototype._ensureFileLoaded=function(a,b,c){return null==b?c(null):bit6.Transfer.readFileAsArrayBuffer(b,function(b){return function(d,e,f){return d?c(d):(b._append(a,new Blob([f],{type:e.type},e.name)),c(null))}}(this))},a.prototype._completeMultiPart=function(a){var b,c;return this.parts.push("--"+this.boundary+"--"),b=new Blob(this.parts),c=new FileReader,c.onload=function(b){return function(){return a(null,c.result,"multipart/form-data; boundary="+b.boundary)}}(this),c.onerror=function(b){return a(b)},c.readAsArrayBuffer(b)},a.prototype._needsFormDataShim=function(){var a,b,c;return b=navigator.userAgent,c=navigator.vendor,a=~b.indexOf("Android")&&~c.indexOf("Google")&&!~b.indexOf("Chrome"),a&&b.match(/AppleWebKit\/(\d+)/).pop()<=534},a}()}.call(this),function(){var a=function(a,c){function d(){this.constructor=a}for(var e in c)b.call(c,e)&&(a[e]=c[e]);return d.prototype=c.prototype,a.prototype=new d,a.__super__=c.prototype,a},b={}.hasOwnProperty;bit6.RtcCapture=function(b){function c(){c.__super__.constructor.apply(this,arguments),this.options={audio:!1,video:!1,screen:!1},this.preparingScreen=!1,this.preparingMedia=!1,this.errorScreen=null,this.errorMedia=null,this.cbs=[],this.localStream=null,this.localEl=null,this.localScreenStream=null}return a(c,b),c.prototype.getStreams=function(a){var b;return b=[],(a.audio||a.video)&&this.localStream&&b.push(this.localStream),a.screen&&this.localScreenStream&&b.push(this.localScreenStream),b},c.prototype.request=function(a,b){return this._prepareScreenSharing(null!=a?a.screen:void 0,function(c){return function(d){var e,f,g,h;return d&&console.log("RtcCapture.request: Could not get ScreenSharing",d),e=null!=(g=a.audio)?g:c.options.audio,f=null!=(h=a.video)?h:c.options.video,c._prepareCameraMic(e,f,function(a){return a&&console.log("RtcCapture.request: Could not get audio/video",a),c._check(b)})}}(this))},c.prototype._check=function(a){var b,c,d,e,f,g;if(this.preparingScreen||this.preparingMedia)return void this.cbs.push(a);if(c=this.errorMedia,c||this.localStream||(c=this.errorScreen),a(c),this.cbs.length>0){for(g=this.cbs,this.cbs=[],f=[],d=0,e=g.length;e>d;d++)b=g[d],f.push(b(c));return f}},c.prototype.stop=function(){var a;return this.localScreenStream&&(bit6.Rtc.stopMediaStream(this.localScreenStream),this.localScreenStream=null),this.localStream&&(bit6.Rtc.stopMediaStream(this.localStream),this.localStream=null),this.localEl&&(a=this.localEl,this.localEl=null,null!=a.src&&(a.src=""),this.emit("video",a,-1)),this.removeAllListeners()},c.prototype._getScreenSharingOpts=function(a){var b,c;return null!=("undefined"!=typeof navigator&&null!==navigator?navigator.mozGetUserMedia:void 0)?(c={video:{mozMediaSource:"window",mediaSource:"window"}},a(null,c)):(b=function(d){var e;return e=null!=d?d.data:void 0,console.log("WebApp.gotMessage",e),"completed"===(null!=e?e.state:void 0)?(console.log("WebRTC onmsg done"),window.removeEventListener("message",b,!1),c={audio:!1,video:{mandatory:{chromeMediaSource:"desktop",chromeMediaSourceId:d.data.streamId,maxWidth:window.screen.width,maxHeight:window.screen.height}}},a(null,c)):void 0},window.addEventListener("message",b,!1),window.postMessage({requestId:100,data:["screen","window"]},"*"))},c.prototype._prepareScreenSharing=function(a,b){return a===!1&&this.localScreenStream?(this.localScreenStream=null,b(null)):!a==!0?b(null):(this.options.screen=!0,this.localScreenStream?b(null):this.preparingScreen?b(null):(this.preparingScreen=!0,this._getScreenSharingOpts(function(a){return function(d,e){return null!=d?(a.preparingScreen=!1,a.errorScreen=d,b(d)):c.getUserMedia(e,function(c,d){return a.preparingScreen=!1,null!=c&&(a.errorScreen=c),null==c&&(a.localScreenStream=d),b(c)})}}(this))))},c.prototype._prepareCameraMic=function(a,b,d){var e;return this.options.audio===a&&this.options.video===b?d(null):this.preparingMedia?d(null):a||b?(this.options.audio=a,this.options.video=b,e={audio:this.options.audio,video:this.options.video},this.preparingMedia=!0,c.getUserMedia(e,function(a){return function(b,c){return a.preparingMedia=!1,null!=b&&(a.errorMedia=b),a._handleLocalCameraMicStream(c),d(b)}}(this))):(this.options.audio=this.options.video=!1,this._handleLocalCameraMicStream(null),d(null))},c.prototype._handleLocalCameraMicStream=function(a){var b,c,d;return c=this.localStream,this.localStream=a,c&&c!==a&&bit6.Rtc.stopMediaStream(c),b=null!=(d=this.localEl)?d:null,this.options.video&&a!==c?(b||(b=document.createElement("video"),b.setAttribute("autoplay","true"),b.setAttribute("muted","true"),b.muted=!0,this.emit("video",b,1)),this.localEl=bit6.Rtc.attachMediaStream(b,a)):this.options.video||null==b?void 0:(this.localEl=null,b.src="",this.emit("video",b,-1))},c.getUserMedia=function(a,b){var c,d,e,f,g;return g=window,d=navigator,c=null,!c&&(null!=g?g.getUserMedia:void 0)&&(c=g.getUserMedia.bind(g)),!c&&d&&(c=null!=(e=null!=(f=d.getUserMedia)?f:d.mozGetUserMedia)?e:d.webkitGetUserMedia,c&&(c=c.bind(d))),null==c?b("WebRTC not supported. Could not find getUserMedia()"):c(a,function(a){return b(null,a)},b)},c}(bit6.EventEmitter)}.call(this),function(){var a=function(a,c){function d(){this.constructor=a}for(var e in c)b.call(c,e)&&(a[e]=c[e]);return d.prototype=c.prototype,a.prototype=new d,a.__super__=c.prototype,a},b={}.hasOwnProperty;bit6.Rtc=function(b){function c(){return c.__super__.constructor.apply(this,arguments)}return a(c,b),c.prototype.init=function(a,b){return this.outgoing=a,this.pcConstraints={optional:[{DtlsSrtpKeyAgreement:!0}]},this.pcConfig={iceServers:b},this.pc=null,this.remoteEls={},this.outgoingTransfer=null,this.incomingTransfer=null,this.bufferedIceCandidates=[],this.bufferedIceCandidatesDone=!1,this.bufferedOfferAnswer=null,this.hadIceForAudio=!1,this.hadIceForVideo=!1},c.prototype.update=function(a,b,c){var d,e;return this.options=b,this.outgoing&&this._preparePeerConnection(a)?(this.options.data&&null==this.dc&&this._createDataChannel(),e={},(c.audio||c.video)&&(d={},c.audio&&(d.OfferToReceiveAudio=!0),c.video&&(d.OfferToReceiveVideo=!0),e.mandatory=d),this.pc.createOffer(function(a){return function(b){return a._setLocalAndSendOfferAnswer(b)}}(this),function(a){return function(a){return console.log("CreateOffer error",a)}}(this),e)):void 0},c.prototype.stop=function(){var a,b,c,d,e;c=this.remoteEls;for(b in c)a=c[b],null!=a.src&&(a.src=""),this._removeDomElement(a);return this.remoteEls={},null!=(d=this.dc)&&d.close(),this.dc=null,null!=(e=this.pc)&&e.close(),this.pc=null},c.prototype.getRemoteTrackKinds=function(){var a,b,c,d,e,f,g,h,i,j,k,l;for(b=!1,a=!1,k=null!=(g=null!=(h=this.pc)&&"function"==typeof h.getRemoteStreams?h.getRemoteStreams():void 0)?g:[],c=0,e=k.length;e>c;c++)for(j=k[c],i=j.getTracks(),d=0,f=i.length;f>d;d++)l=i[d],"video"!==l.kind||l.muted||(b=!0),"audio"===l.kind&&(a=!0);return{audio:a,video:b}},c.prototype._preparePeerConnection=function(a){var b;return null==this.pc&&(this.pc=this._createPeerConnection()),null==this.pc?!1:(b=a.getStreams(this.options),null!=("undefined"!=typeof window&&null!==window?window.mozRTCPeerConnection:void 0)?this._mozSyncLocalStreams(this.pc,b):this._syncLocalStreams(this.pc,b),!0)},c.prototype._syncLocalStreams=function(a,b){var c,d,e,f,g,h,i,j,k;for(k={},h=a.getLocalStreams(),c=0,f=h.length;f>c;c++)j=h[c],k[j.id]=j;for(d=0,g=b.length;g>d;d++)j=b[d],k[j.id]?delete k[j.id]:a.addStream(j);i=[];for(e in k)j=k[e],i.push(a.removeStream(j));return i},c.prototype._mozSyncLocalStreams=function(a,b){var c,d,e,f,g,h,i,j,k,l,m,n,o;for(o={},j=a.getSenders(),c=0,g=j.length;g>c;c++)m=j[c],o[m.track.id]=m;for(d=0,h=b.length;h>d;d++)for(m=b[d],k=m.getTracks(),f=0,i=k.length;i>f;f++)n=k[f],o[n.id]?delete o[n.id]:a.addTrack(n,m);l=[];for(e in o)m=o[e],l.push(a.removeTrack(m));return l},c.prototype._createPeerConnection=function(){var a,b,c,d,e,f;try{return a=null!=(e=null!=(f=window.RTCPeerConnection)?f:window.mozRTCPeerConnection)?e:window.webkitRTCPeerConnection,d=new a(this.pcConfig,this.pcConstraints),d.onicecandidate=function(a){return function(b){return a._handleIceCandidate(b.candidate)}}(this),d.ondatachannel=function(a){return function(b){return a._createDataChannel(b.channel)}}(this),d.onaddstream=function(a){return function(b){return a._handleRemoteStreamAdded(b.stream)}}(this),d.onremovestream=function(a){return function(b){return a._handleRemoteStreamRemoved(b.stream)}}(this),d.onaddtrack=function(a){return function(a){return console.log("onaddtrack",a)}}(this),d.onremovetrack=function(a){return function(a){return console.log("onremovetrack",a)}}(this),d}catch(b){return c=b,console.log("Failed to create PeerConnection, exception: ",c),null}},c.prototype._createDataChannel=function(a){var b;return a||(b={ordered:!0},a=this.pc.createDataChannel("mydc",b)),this.dc=a,a.binaryType="arraybuffer",a.onopen=function(a){return function(){return a._handleDcOpen()}}(this),a.onclose=function(a){return function(){return a._handleDcClose()}}(this),a.onerror=function(a){return function(b){return a._handleDcError(b)}}(this),a.onmessage=function(a){return function(b){return a._handleDcMessage(b)}}(this)},c.prototype._handleDcOpen=function(){return this.emit("dcOpen")},c.prototype._handleDcClose=function(){return this.outgoingTransfer||this.incomingTransfer?this._handleDcError("DataChannel closed"):void 0},c.prototype._handleDcError=function(a){var b,c,d,e;for(console.log("Data Channel Error:",a),d=[this.outgoingTransfer,this.incomingTransfer],b=0,c=d.length;c>b;b++)e=d[b],e&&(e.err=a),e&&this.emit("transfer",e);return this.outgoingTransfer=this.incomingTransfer=null},c.prototype._handleDcMessage=function(a){var b,c,d;return b=a.data,this.incomingTransfer?null==b.byteLength?console.log("Error: incoming transfer data",b):(c=this.incomingTransfer._gotChunk(b),this.emit("transfer",this.incomingTransfer),c?this.incomingTransfer=null:void 0):null!=b.byteLength?console.log("Error: incoming transfer not created for:",b):(d=JSON.parse(b),d?(this.incomingTransfer=new bit6.Transfer(!1,d),this.emit("transfer",this.incomingTransfer)):console.log("Error: could not parse incoming transfer info:",b))},c.prototype._handleIceCandidate=function(a){var b,c;return null!=(null!=a?a.candidate:void 0)?(c=a.sdpMLineIndex,null==(b=this.bufferedIceCandidates)[c]&&(b[c]=[]),this.bufferedIceCandidates[c].push(a),this.bufferedIceCandidatesDone=!1):(this.bufferedIceCandidatesDone=!0,this._maybeSendOfferAnswer())},c.prototype._maybeSendOfferAnswer=function(){var a;return this.bufferedOfferAnswer&&this.bufferedIceCandidatesDone&&(a=this._mergeSdp(this.bufferedOfferAnswer,this.bufferedIceCandidates),this.bufferedOfferAnswer=null,this.bufferedIceCandidates=[],this.options.audio&&(this.hadIceForAudio=!0),this.options.video&&(this.hadIceForVideo=!0),(this.options.audio&&!this.hadIceForAudio||this.options.video&&!this.hadIceForVideo)&&(this.bufferedIceCandidatesDone=!1),a)?this.emit("offerAnswer",a):void 0},c.prototype._mergeSdp=function(a,b){var c,d,e,f,g,h,i,j;if(0===b.length)return a;for(i=a.sdp,d=[],j=0;(e=i.indexOf("m=",j+1))>=0;)d.push(i.substring(j,e)),j=e;for(d.push(i.substring(j)),i="",g=f=0,h=d.length;h>f;g=++f)c=d[g],0===c.indexOf("m=audio")&&(this.hadIceForAudio=!0),0===c.indexOf("m=video")&&(this.hadIceForVideo=!0),i+=c,g>0&&null!=b[g-1]&&(i+=this._iceCandidatesToSdp(b[g-1]));return a.sdp=i,a},c.prototype._iceCandidatesToSdp=function(a){var b,c,d,e;for(e="",c=0,d=a.length;d>c;c++)b=a[c],e+="a="+b.candidate+"\r\n";return e},c.prototype._handleRemoteStreamAdded=function(a){var b,c,d,e,f,g,h,i;for(a.onaddtrack=function(a){return function(b){return a._handleRemoteTrackAdded(b.target,b.track)}}(this),a.onremovetrack=function(a){return function(b){return a._handleRemoteTrackRemoved(b.target,b.track)}}(this),d=!1,c=!1,g=a.getTracks(),e=0,f=g.length;f>e;e++)i=g[e],"video"!==i.kind||i.muted||(d=!0),"audio"===i.kind&&(c=!0);return b=null,d?(b=document.createElement("video"),this.emit("video",b,1)):c&&(b=document.createElement("audio"),"plugin"===("undefined"!=typeof window&&null!==window?window.webrtcDetectedType:void 0)&&"undefined"!=typeof document&&null!==document&&null!=(h=document.body)&&h.appendChild(b)),b&&(b.setAttribute("autoplay","true"),b=bit6.Rtc.attachMediaStream(b,a)),this.remoteEls[a.id]=b},c.prototype._handleRemoteStreamRemoved=function(a){var b;return a.onaddtrack=null,a.onremovetrack=null,b=this.remoteEls[a.id],delete this.remoteEls[a.id],null!=b?(null!=b.src&&(b.src=""),this._removeDomElement(b)):void 0},c.prototype._handleRemoteTrackAdded=function(a,b){return"video"===b.kind?(this._handleRemoteStreamRemoved(a),this._handleRemoteStreamAdded(a)):void 0},c.prototype._handleRemoteTrackRemoved=function(a,b){return"video"===b.kind?(this._handleRemoteStreamRemoved(a),this._handleRemoteStreamAdded(a)):void 0},c.prototype._removeDomElement=function(a){var b,c,d,e,f,g,h,i;if(e=null!=a&&null!=(g=a.nodeName)&&"function"==typeof g.toLowerCase?g.toLowerCase():void 0,c=!1,"object"===e){if(a.children)for(h=a.children,b=0,d=h.length;d>b;b++)f=h[b],"tag"===f.name&&"audio"===f.value&&(c=!0)}else"audio"===e&&(c=!0);return c?null!=(i=a.parentNode)&&"function"==typeof i.removeChild?i.removeChild(a):void 0:this.emit("video",a,-1)},c.prototype._setLocalAndSendOfferAnswer=function(a){return this.pc.setLocalDescription(a,function(b){return function(){return b.bufferedOfferAnswer={type:a.type,sdp:a.sdp},b._maybeSendOfferAnswer()}}(this),function(b){return function(b){return console.log("Error setting PeerConnection localDescription",b,a)}}(this))},c.prototype.gotRemoteOfferAnswer=function(a,b){var c,d,e;switch(c=window.RTCSessionDescription||window.mozRTCSessionDescription||window.webkitRTCSessionDescription,d=new c(a),a.type){case"offer":return this._preparePeerConnection(b),this.pc.setRemoteDescription(d),this.pc.createAnswer(function(a){return function(b){return a._setLocalAndSendOfferAnswer(b)}}(this),function(a){return function(a){return console.log("CreateAnswer error",a)}}(this));case"answer":return null!=(e=this.pc)?e.setRemoteDescription(d):void 0}},c.prototype.gotHangup=function(a){return this.stop()},c.prototype.startOutgoingTransfer=function(a){var b,c,d,e,f,g;return this.outgoingTransfer?!1:this.dc?"open"!==this.dc.readyState?!1:(this.outgoingTransfer=a,this.dc.send(JSON.stringify(a.info)),c=a.data,d=10,b=16384,f=0,g=c.byteLength,e=0,e=setInterval(function(d){return function(){var h,i,j;if(h=!1,a=d.outgoingTransfer,a&&!a.err||(h=!0),!h){if((null!=(j=d.dc)?j.bufferedAmount:void 0)>50*b)return;i=f+b,i>g&&(i=g),d.dc.send(c.slice(f,i)),f=i,a.progress=f,h=f>=g}return h&&(d.outgoingTransfer=null,clearInterval(e)),a?d.emit("transfer",a):void 0}}(this),d)):!1},c.attachMediaStream=function(a,b){return null!=("undefined"!=typeof window&&null!==window?window.attachMediaStream:void 0)?window.attachMediaStream(a,b):(null!=(null!=a?a.srcObject:void 0)?a.srcObject=b:null!=(null!=a?a.mozSrcObject:void 0)?a.mozSrcObject=b:null!=(null!=a?a.src:void 0)?a.src=window.URL.createObjectURL(b):console.log("Error attaching stream to element",a),a)},c.stopMediaStream=function(a){var b,c,d,e,f;if(a.stop)return a.stop();if(a.getTracks){for(d=a.getTracks(),e=[],b=0,c=d.length;c>b;b++)f=d[b],e.push(null!=f?f.stop():void 0);return e}},c}(bit6.EventEmitter)}.call(this),function(){var a=function(a,c){function d(){this.constructor=a}for(var e in c)b.call(c,e)&&(a[e]=c[e]);return d.prototype=c.prototype,a.prototype=new d,a.__super__=c.prototype,a},b={}.hasOwnProperty,c=[].slice;bit6.Session=function(b){function d(a){this.client=a,d.__super__.constructor.apply(this,arguments),this._clear()}return a(d,b),d.prototype._sprops=["authenticated","authInfo","config","device","identity","displayName","token","userid"],d.prototype._clear=function(){var a,b,c,d;for(d=this._sprops,a=0,b=d.length;b>a;a++)c=d[a],this[c]=null;return this.authenticated=!1},d.prototype.logout=function(a){return this._clear(),this.client._onLogout(a),this.emit("deauth")},d.prototype.getAuthInfo=function(a){return this.authInfo?a(null,this.authInfo):this.api("/info",function(b){return function(c,d){return c?a(c):(b.authInfo=d,a(c,d))}}(this))},d.prototype.login=function(a,b){return a.identity=bit6.Client.normalizeIdentityUri(a.identity),this._auth("login",a,b)},d.prototype.signup=function(a,b){return a.identity=bit6.Client.normalizeIdentityUri(a.identity),this._auth("signup",a,b)},d.prototype.anonymous=function(a){return this._auth("anonymous",{},a)},d.prototype.external=function(a,b){return this._auth("external",{token:a},b)},d.prototype.oauth=function(a,b,c){return this._ensureOauthRedirectUri(b),this.getAuthInfo(function(d){return function(e,f){return e?c(e):d._auth(a,b,c)}}(this))},d.prototype.oauth1_redirect=function(a,b,c){return this._ensureOauthRedirectUri(b),this.api("/"+a,"POST",b,c)},d.prototype._ensureOauthRedirectUri=function(a){var b,c,d,e;return b=null!=(c=a.redirect_uri)?c:a.redirectUri,null==b?a.redirect_uri="undefined"!=typeof window&&null!==window&&null!=(d=window.location)&&null!=(e=d.href)?e.split("?")[0]:void 0:void 0},d.prototype.refresh=function(a){return this._auth("refresh_token",{},a)},d.prototype.save=function(){var a,b,c,d,e;for(e={},d=this._sprops,a=0,b=d.length;b>a;a++)c=d[a],e[c]=this[c];return e},d.prototype.resume=function(a,b){var c,d,e,f,g;for(f=this._sprops,c=0,d=f.length;d>c;c++)e=f[c],this[e]=null!=(g=null!=a?a[e]:void 0)?g:null;return this.refresh(b)},d.prototype._auth=function(a,b,c){return null==b&&(b={}),null==this.device&&(this.device=this.client._createDeviceId()),b.device=this.device,b.embed="config",this.api("/"+a,"POST",b,function(a){return function(b,d){var e,f,g,h;if(b){for(h=["config","identity","token","userid"],e=0,g=h.length;g>e;e++)f=h[e],delete a[f];return c(b)}return a._authDone(d,c)}}(this))},d.prototype._authDone=function(a,b){var c,d,e,f,g,h,i,j,k,l,m,n,o,p;if(null==a.token)return b("Jwt token is missing");try{k=a.token.split("."),e=null!=k?k[1]:void 0,null!=e&&(d=JSON.parse(bit6.Session.base64urlDecode(e)))}catch(f){g=f,console.log("Error parsing Jwt claims",k[1])}if(p=null!=d&&null!=(l=d.sub)?l.split("@"):void 0,null!=p&&2===p.length&&(o=p[0],c=p[1]),null==o||null==c)return b("Jwt token has invalid format");for(this.authenticated=!0,m=["config","identity","token","userid"],h=0,j=m.length;j>h;h++)i=m[h],this[i]=null!=(n=a[i])?n:this[i];return this.client._onLogin(b),this.emit("auth")},d.prototype.api=function(){var a,b,d,e,f;return e=arguments[0],d=3<=arguments.length?c.call(arguments,1,b=arguments.length-1):(b=1,[]),a=arguments[b++],(f=this.client)._api.apply(f,["/auth/1"+e].concat(c.call(d),[a]))},d.base64urlEncode=function(a){return a=btoa(a),a=a.replace(/\+/g,"-").replace(/\//g,"_").replace(/\=/g,"")},d.base64urlDecode=function(a){return a+=new Array(4-(a.length+3&3)).join("="),a=a.replace(/\-/g,"+").replace(/_/g,"/"),a=atob(a)},d}(bit6.EventEmitter)}.call(this),function(){bit6.Transfer=function(){function a(a,b,c){var d;this.outgoing=a,this.info=b,this.progress=0,this.total=null!=(d=this.info.size)?d:0,this.err=null,this.data=null!=c?c:null,this.outgoing||(this.buf=[])}return a.prototype.pending=function(){return this.outgoing&&this.data&&!this.err&&0===this.progress},a.prototype.completed=function(){return this.progress===this.total&&this.data&&!this.err},a.prototype.percentage=function(){return this.total?(100*this.progress/this.total).toFixed(2):0},a.prototype.json=function(a){var b,c,d,e,f,g,h;if(a){for(this.info.type="application/json",h=JSON.stringify(a),b=new Uint8Array(h.length),c=d=0,f=h.length;f>=0?f>d:d>f;c=f>=0?++d:--d)b[c]=h.charCodeAt(c);this.info.size=b.byteLength,this.data=b.buffer}else{if(this.info.type===!1)return null;for(b=new Uint8Array(this.data),h="",c=e=0,g=b.length;g>=0?g>e:e>g;c=g>=0?++e:--e)h+=String.fromCharCode(b[c]);a=JSON.parse(h)}return a},a.prototype._ensureSourceData=function(a){return null!=this.data?a(null):bit6.Transfer.readFileAsArrayBuffer(this.info,function(b){return function(c,d,e){return null!=c&&(b.err=c),null!=e&&null!=d&&(b.info=d),null!=e&&(b.data=e),a(c)}}(this))},a.prototype._gotChunk=function(a){return this.buf.push(a),this.progress+=a.byteLength,this.progress<this.total?!1:(this._prepareReceivedData(),!0)},a.prototype._prepareReceivedData=function(){var a,b,c,d,e,f;for(f=new Uint8Array(this.progress),d=0,e=this.buf,b=0,c=e.length;c>b;b++)a=e[b],f.set(new Uint8Array(a),d),d+=a.byteLength;return this.buf=null,this.data=f.buffer},a.readFileAsArrayBuffer=function(a,b){var c;return c=new FileReader,c.onload=function(d){var e,f;return c.readyState===FileReader.DONE?(e=d.target.result,console.log(a.name+" - read "+e.byteLength+"b"),f={name:a.name,type:a.type,size:a.size},b(null,f,e)):void 0},c.onerror=function(a){return b(a)},c.onabort=function(a){return b(a)},c.readAsArrayBuffer(a)},a.dataUrlToBlob=function(a){var b,c,d,e,f,g,h,i,j,k;if(g=";base64,",i=null,d=null,a.indexOf(g)<0)h=a.split(","),d=h[0].split(":")[1],i=decodeURIComponent(h[1]);else{for(h=a.split(g),d=h[0].split(":")[1],i=atob(h[1]),j=i.length,b=new ArrayBuffer(j),c=new Uint8Array(b),e=f=0,k=j;k>=0?k>f:f>k;e=k>=0?++f:--f)c[e]=i.charCodeAt(e);i=b}return new Blob([i],{type:d})},a}()}.call(this);
    </script>
    <!-- app js code -->
    <script>
      // Uncomment when publishing
var opts = {
    // IMPORTANT! Set your own Bit6 API key
    'apikey': '2h1j5-joou2JqAM421',
};

if (!opts.apikey) {
    alert('Missing "apikey".\nSpecify it in bit6.Client() constructor!');
}

// Keep the instance global for easy access form dev console
var b6 = new bit6.Client(opts);

$(function() {
    // Init the application from demo.js
    window.initApp(b6);
});

    </script>
    <script>
      
// Initialize the application
// b6 - an instance of Bit6 SDK
function initApp(b6) {
$(document).ready(authClicked(false));
    // Disable all audio in this demo
    var disableAudio = false;
    // Current Chat
    var currentChatUri = null;
    // Timer to clear the 'user typing label'. Should be in SDK?
    var typingLabelTimer = 0;
    // Current Group
    var currentGroupId = null;

    // Incoming call from another user
    b6.on('incomingCall', function(c) {
        console.log('Incoming call', c);
        attachCallEvents(c);
        var s = b6.getNameFromIdentity(c.other) + ' is ' + (c.options.video ? 'video ' : '') + 'calling...';
        $('#incomingCallFrom').text(s);
        $('#incomingCall')
            .data({'dialog': c})
            .show();
    });

    // A conversation has changed
    b6.on('conversation', function(c, op) {
        //console.log('onConv', c);
        onConversationChange(c, op);
    });

    // A message has changed
    b6.on('message', function(m, op) {
        //console.log('onMsg', m);
        onMessageChange(m, op);
    });

    // A group has changed
    b6.on('group', function(g, op) {
        console.log('onGrp', op, g);
        // Is this the currently selected group?
        if (currentGroupId === g.id) {
            // Update GroupInfo modal UI
            populateGroupInfoModal(g);
        }
    });

    // Got a real-time notification
    b6.on('notification', function(m) {
        console.log('demo got rt notification', m);
        if (m.type === 'typing') {
            var isSentToGroup = m.to.indexOf('grp:') === 0;
            var key = isSentToGroup ? m.to : m.from;
            if (key === currentChatUri) {
                showUserTyping(m.from);
            }
        }
    });

    // Changes in video elements
    // v - video element to add or remove
    // c - Dialog - call controller. null for a local video feed
    // op - operation. 1 - add, 0 - update, -1 - remove
    b6.on('video', function(v, c, op) {
        var vc = $('#videoContainer');
        if (op < 0) {
            vc[0].removeChild(v);
        }
        else if (op > 0) {
            v.setAttribute('class', c ? 'remote' : 'local');
            vc.append(v);
        }
        // Total number of video elements (local and remote)
        var n = vc[0].children.length;
        if (op !== 0) {
            vc.toggle(n > 0);
        }
        console.log('VIDEO elems.count: ' + n);
        // Use number of video elems to determine the layout using CSS
        var kl = n > 2 ? 'grid' : 'simple';
        vc.attr('class', kl);
    });


    // Common click handler for signup and login buttons
    function authClicked(isNewUser) {
        var get_token = '';
        var calling_id = null;//$('#calling_id').val();
        console.log(calling_id);
//        var id = window.localStorage.getItem('RouteId');
        console.log('end');
        $.ajax({
            type: "GET",
            url: "/generate-token",
            cache: false,
            success: function (response) {
                // alert(response);
              
                console.log(response.data);
                get_token = response.data.jwt_token;
                calling_id = response.data.send_to;
                b6.session.external(get_token, function (err) {
                    // Done! Now you can use all the Bit6 communication APIs.
                    // For example, send a message to a Parse user with username 'john'
                    var name = b6.getNameFromIdentity(b6.session.identity);
                    console.log(name);
                    // b6.compose(calling_id).text('sending...').send();
                    console.log(get_token);
                    console.log(err);
                    if(calling_id!=null)
                    {
                    b6.compose('usr:' + calling_id).text('Hello Admin, you are having a conversation request by '+ '<?php echo Auth::user()->name ?>'+'').send();
                    }
                    console.log('auth done');
                   // $('#authUsername').val('');
                    //$('#authPassword').val('');
                    console.log('I am checking you before runb');
                    loginDone();
                    // $("#depreload").delay(1).fadeOut();
                    $(".animationload").delay(1).fadeOut("slow");
                   // var chatwith = getChatTitleName();
                    //passDataWIthAjaxCall(chatwith, 'Questionnario', 'startConversation', 'inMessaging', '');
                    
                });

            }

        });
        return false;
    }

    // User has completed the login procedure
    function loginDone() {
        // The logged-in user display name
        var name = b6.getNameFromIdentity(b6.session.identity);
        b6.session.displayName = name;
        // Update the UI
        $('#welcome').toggle(false);
        $('#main').removeClass('hidden');
        $('#loggedInNavbar').removeClass('hidden');
        $('#loggedInUser').text(b6.session.displayName);
        selectFirstChat();
        $('body').removeClass('detail');
    }

    // Show the first chat
    function selectFirstChat() {
        // Do we have more chats?
        var chats = $('#chatList').children();

        if (chats.length > 0) {
            // Simulate a click on the first chat
            console.log('Selecting first chat');
            chats.first().click();
        }
        // No more chats
        else {
            // Clear message lists etc
            console.log('No more chats to select');
            showChat(null);
        }
    }

    // Update Conversation View
    function onConversationChange(c, op) {
        var chatList = $('#chatList');

        
        var tabId = tabDomIdForConversation(c);
        var msgsId = msgsDomIdForConversation(c);
        var tabDiv = $(tabId);
        var msgsDiv = $(msgsId);

        // Conversation deleted
        if (op < 0) {
            if (!c.deleted) {
                console.log('Warning: Deleting a conversation with no deleted property!', c);
            }
            if (tabDiv.length === 0 || msgsDiv.length === 0) {
                console.log('Warning: Deleting a conversation with no DOM element!', c);
            }
            tabDiv.remove();
            msgsDiv.remove();
            // Current conversation was deleted
            if (c.id === currentChatUri) {
                // Select the first chat
                selectFirstChat();
            }
            return;
        }

        // New conversation
        if (op > 0) {
            if (c.deleted) {
                console.log('Error: Adding a deleted conversation', c);
                return;
            }
            if (tabDiv.length > 0 || msgsDiv.length > 0) {
                console.log('Error: Adding a conversation that has DOM elements!', c);
            }

            // Entry in the Chat List
            tabDiv = $('<div class="tab" />')
                .attr('id', tabId.substring(1))
                .append('<strong />')
                .append('<span />')
                .append('<em />');
            chatList.append(tabDiv);
            // Create a container for message list for this conversation
            msgsDiv = $('<div class="msgs" />')
                .attr('id', msgsId.substring(1))
                .hide();
            $('#msgList').append(msgsDiv);
        }


        // Update Conversation data
        var stamp = getRelativeTime(c.updated);
        var latestText = '';
        var lastMsg = c.getLastMessage();
        if (lastMsg) {
            // Show the text from the latest conversation
            if (lastMsg.content) {
                latestText = lastMsg.content;
            }
            // If no text, but has an attachment, show the mime type
            else if (lastMsg.data && lastMsg.data.type) {
                latestText = lastMsg.data.type;
            }
        }
        var title = b6.getNameFromIdentity(c.id);
        if (c.unread > 0) {
            title += ' (' + c.unread + ')';
        }

        // Apply data to DOM
        tabDiv.children('strong').html(title);
        tabDiv.children('span').html(latestText);
        tabDiv.children('em').html(stamp);

        // If the updated conversation is newer than the top one -
        // move this conversation to the top
        var top = chatList.children(':first');
        if (top.length > 0) {
            var topTabId = top.attr('id');
            var topConvId = domIdToConversationId(topTabId);
            var topConv = b6.getConversation(topConvId);
            if (topConv && topConv.id !== c.id && c.updated > topConv.updated) {
                top.before(tabDiv);
            }
        }
        // Is this the current conversation?
        if (c.id === currentChatUri) {
            // Update chat title
            showChatTitle();
        }
    }

    // Update Message View
    function onMessageChange(m, op) {
      
        var divId = domIdForMessage(m);
        var div = $(divId);

        // Message deleted
        if (op < 0) {
            console.log('Deleting msg div', m);
            if (!m.deleted) {
                console.log('Warning: Deleting a message with no deleted property!', m);
            }
            if (div.length === 0) {
                console.log('Warning: Deleting a message with no DOM element!', m);
            }
            div.remove();
            return;
        }

        // Message added
        if (op > 0) {
            if (m.deleted) {
                console.log('Error: Adding a deleted message', m);
                return;
            }
            if (div.length > 0) {
                console.log('Error: Adding a message that has a DOM element!', m);
            }

            var cssClass = m.incoming() ? 'other' : 'me';

            div = $('<div class="msg ' + cssClass + '" />').attr('id', divId.substring(1));

            // This message has an attachment
            if (m.data && m.data.type) {
                var attachType = m.data.type;
                var href = m.data.attach;
                // We have a thumbnail and this is not an audio file
                if (m.data.thumb && attachType.indexOf('audio/') < 0) {
                    var thumbImg = m.data.thumb;
                    div.append('<a class="thumb" href="' + href + '" target="_new"><img src="' + thumbImg + '" /></a>');
                }
                // Show Play button
                else {
                    var btn = $('<button class="btn btn-info"/>')
                        .text('Play')
                        .data('src', href)
                        .click(function() {
                            var src = $(this).data('src');
                            var audio = new Audio(src);
                            audio.play();
                        });
                    div.append(btn);
                }
            }
            // Message content to show
            var text = m.content;

            // This is a call history item
            if (m.isCall()) {
                var ch = m.channel();
                var r = [];
                if (ch & bit6.Message.AUDIO) {
                    r.push('Audio');
                }
                if (ch & bit6.Message.VIDEO) {
                    r.push('Video');
                }
                if (ch & bit6.Message.DATA) {
                    if (r.length === 0) {
                        r.push('Data');
                    }
                }
                text = r.join(' + ') + ' Call';
                if (m.data && m.data.duration) {
                    var dur = m.data.duration;
                    var mins = Math.floor(dur / 60);
                    var secs = dur % 60;
                    text += ' - ' + (mins < 10 ? '0' : '') + mins + ':' + (secs < 10 ? '0' : '') + secs;
                }
            }

            // Text content
            if (text) {
                div.append('<span>' + text + '</span>');
            }
            // Timestamp
            div.append('<i />');
            // Message status
            div.append('<em />');

            // Find the container for this message
            var convId = m.getConversationId();
            var c = b6.getConversation(convId);
            var msgsDiv = $( msgsDomIdForConversation(c) );
            msgsDiv.append(div);

            // If the conversation for this message is visible
            if (msgsDiv.is(':visible')) {
                // Scroll to the bottom of the conversation
                scrollToLastMessage();
                // Mark this new message as read since it is on the screen
                if (m.incoming()) {
                    b6.markMessageAsRead(m);
                }
                // If we had user 'typing' indicator - clear it
                showUserTyping(false);
            }
        }

        // Update Message data

        // Latest updated stamp
        var stamp = getRelativeTime(m.updated);

        // Status string
        var status;
        if (m.incoming()) {
            status = b6.getNameFromIdentity(m.other) + ' ' + m.getStatusString();
        }
        else {
            status = getMessageStatusString(m);
        }

        // Apply data to DOM
        div.children('i').text(stamp);
        div.children('em').text(status);
    }

    function showUserTyping(ident) {
        clearInterval(typingLabelTimer);
        if (ident) {
            typingLabelTimer = setTimeout(function() {
                $('#msgOtherTyping').toggle(false);
            }, 10000);
            ident = b6.getNameFromIdentity(ident);
            var txt = ident + ' is typing...';
            $('#msgOtherTyping').html(txt);
        }
        $('#msgOtherTyping').toggle(ident ? true : false);
    }


    function getMessageStatusString(m) {
        // Is this an outgoing message?
        if (!m.incoming()) {
            // Is the message being sent?
            if (m.status() === bit6.Message.SENDING) {
                // Do we have upload progress info?
                if (m.progress && m.total) {
                    var s = '' + m.progress;
                    // We know total size of the message attachments
                    if (m.total > 0) {
                        var perc = Math.floor(m.progress * 100 / m.total);
                        s = perc + '% of ' + ( m.total < 1024 ? m.total : (m.total >> 10) + 'k' );
                    }
                    return s;
                }
            }
            // Multiple destinations
            if (m.others) {
                var d = [];
                // Was it delievered to any destinations?
                for(var i=0; i < m.others.length; i++) {
                    var o = m.others[i];
                    if (o.status === bit6.Message.DELIVERED || o.status === bit6.Message.READ) {
                        d.push(b6.getNameFromIdentity(o.uri) + ' ' + o.status);
                    }
                }
                // List destinations it was delivered to
                if (d.length) {
                    return d.join(', ');
                }
            }
        }
        return m.getStatusString();
    }

    function getRelativeTime(stamp) {
        var now = Date.now();
        // 24 hours in milliseconds
        var t24h = 24 * 60 * 60 * 1000;
        var d = new Date(stamp);
        var s = (now - stamp > t24h) ? d.toLocaleDateString() : d.toLocaleTimeString();
        return s;
    }

    function showChat(uri) {
        console.log('Show messages for', uri);

        //if (uri.indexOf('grp:') == 0) {
        //    b6.api('/groups/'+uri.substring(4), function(err, g) {
        //        console.log('Got group err=', err, 'group=', g);
        //    });
        //}

        // Hide 'user typing' if switching to a different chat
        if (uri !== currentChatUri) {
            showUserTyping(false);
        }

        // Current conversation identity
        currentChatUri = uri;

        // Show current Chat title - participants
        showChatTitle();

        // Nothing to show
        if (!uri) {
            $('#chatButtons').toggle(false);
            $('body').removeClass('detail');
            return;
        }

        $('body').addClass('detail');

        var conv = b6.getConversation(uri);
        // Mark all messages as read
        if (b6.markConversationAsRead(conv) > 0) {
            // Some messages have been marked as read
            // update chat list
            console.log('Messages marked as read');
        }

        $('#chatButtons').toggle(true);
        $('#groupInfoButton').toggle(conv.isGroup());

        var msgsDiv = $( msgsDomIdForConversation(conv) );
        // Show only message container for this conversation
        // Hide all the other message containers
        msgsDiv.show().siblings().hide();
        // Scroll to the bottom of the conversation
        scrollToLastMessage();

        // Request focus for the compose message text field
        //$('#msgText').focus();
    }

    function showChatTitle() {
        var uri = currentChatUri;
        var t = '';
        if (uri) {
            var conv = b6.getConversation(uri);
            t = b6.getNameFromIdentity(conv.id);
        }
        $('#chatTitle').text(t);
    }

    // Get jQuery selector for a Message
    function domIdForMessage(m) {
        return '#msg__' + m.domId();
    }

    // Get Chat Tab jQuery selector for a Conversation
    function tabDomIdForConversation(c) {
        return '#tab__' + c.domId();
    }

    // Get Messages Container jQuery selector for a Conversation
    function msgsDomIdForConversation(c) {
        return '#msgs__' + c.domId();
    }

    // Convert element id to a Conversation id
    function domIdToConversationId(id) {
        var r = id.split('__');
        id = r.length > 0 ? r[1] : id;
        return bit6.Conversation.fromDomId(id);
    }

    // Convert element id to a Message id
    function domIdToMessageId(id) {
        var r = id.split('__');
        id = r.length > 0 ? r[1] : id;
        return bit6.Message.fromDomId(id);
    }

    // Scroll to the last message in the messages list
    function scrollToLastMessage() {
        var t = $('#msgList');
        t.scrollTop( t[0].scrollHeight );
    }

    // I wonder what this function does...
    function sendMessage() {
        var text = $('#msgText').val();
        var dest = currentChatUri;
        if (!text || !dest) {
            return;
        }
        $('#msgText').val('');
        console.log('Send message to=', dest, 'content=', text);
        b6.compose(dest)
                .text(text)
                .send(function (err, m) {
                    console.log('sendMessage result=', m, 'err=', err);
                });
    }
    // User selected file(s) to attach to a message
    function handleAttachFiles(files) {
        // files is a FileList of File objects. List some properties.
        for (var i = 0, f; f = files[i]; i++) {
            console.log(f.name + ' - selected - type: ' + (f.type || 'n/a') + ' size: ' + f.size + 'b');
            handleAttachFile(f);
        }
    }

    // Send each attached file as a separate message
    function handleAttachFile(f) {
        var dest = currentChatUri;
        if (!f || !dest) {
            return;
        }
        console.log ('Send attachment to=', dest, 'file=', f);
        b6.compose(dest)
            .attach(f)
            .send(function(err, m) {
                console.log('sendMessage attach result=', m, 'err=', err);
            });
    }

    // User dropped files in the chat messages area
    function handleAttachFilesDrop(e) {
        var evt = e.originalEvent;
        evt.stopPropagation();
        evt.preventDefault();
        // FileList object
        var files = evt.dataTransfer.files;
        handleAttachFiles(files);
    }

    // User is dragging files over the chat messages area
    function handleAttachFilesDragOver(e) {
        var evt = e.originalEvent;
        evt.stopPropagation();
        evt.preventDefault();
        // Explicitly show this is a copy
        evt.dataTransfer.dropEffect = 'copy';
    }

    // Start an outgoing call
    function startOutgoingCall(to, video, screen) {
        // Outgoing call params
        var opts = {
            audio: !disableAudio,
            video: video,
            screen: screen
        };
        // Start the outgoing call
        var c = b6.startCall(to, opts);
        attachCallEvents(c);
        updateInCallUI(c);
    }

    // Start an outgoing phone call
    function startPhoneCall(to) {
        var c = b6.startPhoneCall(to);
        attachCallEvents(c);
        updateInCallUI(c);
    }

    // Attach call state events to a RtcDialog
    function attachCallEvents(c) {
        // Call progress
        c.on('progress', function() {
            showInCallName();
            console.log('CALL progress', c);
        });
        // Call answered
        c.on('answer', function() {
            console.log('CALL answered', c);
        });
        // Error during the call
        c.on('error', function() {
            console.log('CALL error', c);
        });
        // Call ended
        c.on('end', function() {
            showInCallName();
            console.log('CALL ended', c);
            // No more dialogs?
            if (b6.dialogs.length === 0) {
                // Hide InCall UI
                $('#detailPane').removeClass('hidden');
                $('#inCallPane').addClass('hidden');
            }
            // Hide Incoming Call dialog
            // TODO: check that it was for this dialog
            $('#incomingCall')
                .data({'dialog': null})
                .hide();
        });
    }

    function updateInCallUI(c, opts) {
        showInCallName();

        $('body').addClass('detail');

        $('#detailPane').addClass('hidden');
        $('#inCallPane').removeClass('hidden');

        $('#incallVideo').toggleClass('active', c.options.video);
        $('#incallScreen').toggleClass('active', c.options.screen);

        // Start/update the call
        c.connect(opts);
    }

    // Show all the call participants
    function showInCallName() {
        var s = '';
        for(var i in b6.dialogs) {
            var d = b6.dialogs[i];
            if (i > 0) {
                s += ', ';
            }
            s += b6.getNameFromIdentity(d.other);
        }
        $('#inCallOther').text(s);
    }

    // Show Group Info modal
    function showGroupInfo(g) {
        currentGroupId = g.id;
        // Populate the UI
        populateGroupInfoModal(g);
        // Show modal
        $('#groupInfoModal').modal('show');
    }

    function populateGroupInfoModal(g) {
        $('#groupInfoId').text(g.id);
        $('#groupInfoMe').text(JSON.stringify(g.me));
        $('#groupInfoMetaRaw').text(JSON.stringify(g.meta, null, 2));
        $('#groupInfoPermsRaw').text(JSON.stringify(g.permissions, null, 2));
        $('#groupInfoMembersRaw').text(JSON.stringify(g.members, null, 2));
        var tbody = $('#groupInfoMembers').empty();
        for(var i in g.members) {
            var m = g.members[i];
            console.log('Member', m);
            var tr = $('<tr/>');
            tr.append('<td>' + m.id + '</td>');
            tr.append('<td>' + m.role + '</td>');
            tr.append('<td>' + (m.status ? m.status : '') + '</td>');
            // Leaving myself or kicking somebody else?
            var removeMemberLabel = m.id === g.me.identity ? 'leave' : 'kick';
            if (m.role !== 'left') {
                tr.append('<td><a href="#">' + removeMemberLabel + '</a></td>');
            }
            tbody.append(tr);
        }
    }


    console.log('Bit6 Demo Ready!');

    // Hide 'Typing' notification
    $('#msgOtherTyping').toggle(false);
    // Hide 'IncomingCall' alert
    $('#incomingCall').toggle(false);

    // Fix input elements within dropdown click problem
    $('.dropdown input, .dropdown label').click(function(e) {
        e.stopPropagation();
    });

    if (disableAudio) {
        $('#inCallAudioDisabled').removeClass('hidden');
    }


    // Login click
    $('#loginButton').click(function() {return authClicked(false);});

    // Signup click
    $('#signupButton').click(function() {return authClicked(true);});

    // Click on a tab in the chat list shows the messages
    $('#chatList').on('click', '.tab', function(e) {
        var id = $(this).attr('id');
        var convId = domIdToConversationId(id);
        // Do we have ongoing calls?
        if (b6.dialogs.length > 0) {
            var d = b6.dialogs[0];
            // Add the user to the conversation
            startOutgoingCall(convId, d.options.video);
        }
        // No ongoing calls
        else {
            // Select the chat
            showChat(convId);
        }
    });

    // Clicking on Navbar takes you back into the chat list
    // Useful on small screens
    $('#backToList').click(function() {
        $('body').removeClass('detail');
    });

    // When GroupInfo modal is closed, clear currentGroupId
    $('#groupInfoModal').on('hidden.bs.modal', function () {
        currentGroupId = null;
    });


    // Click on a message deletes it
    //$('#msgList').on('click', '.msg', function(e) {
    //    var id = $(this).attr('id');
    //    var msgId = domIdToMessageId(id);
    //    console.log('Clicked to delete message', msgId);
    //    b6.deleteMessage(msgId, function(err, result) {
    //        console.log('Msg deleted err=', err, 'result=', result);
    //    });
    //});

    // When user clicks on New Chat, give focus to Username
    $('#newChatDropdown').on('shown.bs.dropdown', function () {
        $('#newChatUsername').val('');
        setTimeout(function() {$('#newChatUsername').focus();}, 100);
    });

    // Start a new chat
    $('#newChatStart').click(function() {
        var v = $('#newChatUsername').val().trim();
        console.log('Start chat with' + v);
        // Closes the dropdown but then you cannot open it again
        //$('#newChatDropdown').dropdown('toggle');
        // Slightly hackier way to close the dropdown
        $('body').trigger('click');
        if (v) {
            if (v.indexOf(':') < 0) {
                v = 'usr:' + v;
            }
            b6.addEmptyConversation(v);
            showChat(v);
        }
        return false;
    });

    // Create a new Group
    $('#newGroupCreate').click(function() {
        var t = $('#newGroupTitle').val().trim();
        console.log('Create a group with title: ' + t);
        // Closes the dropdown but then you cannot open it again
        //$('#newChatDropdown').dropdown('toggle');
        // Slightly hackier way to close the dropdown
        $('body').trigger('click');
        var opts = {};
        if (t) {
            opts.meta = {title: t};
        }
        b6.createGroup(opts, function(err, g) {
            console.log('Group created', g, err);
        });
        //showChat(uri);
        return false;
    });

    // Add a new group member
    $('#newMemberButton').click(function() {
        var v = $('#newMemberUsername').val().trim();
        var g = b6.getGroup(currentGroupId);
        if (v && g) {
            $('#newMemberUsername').val('');
            // No URI scheme
            if (v.indexOf(':') < 0) {
                // Assume a username
                v = 'usr:' + v;
            }
            b6.inviteGroupMember(g, v, 'user', function(err) {
                console.log('Member added to group err=', err);
            });
        }
        return false;
    });

    // Send Message click
    $('#sendMsgButton').click(function() {
        console.log('Send message clicked');
        sendMessage();
    });

    // Selected attachment file
    $('#attachFile').change(function(evt) {
        console.log('Attach clicked');
        var files = evt.target.files; // FileList object
        handleAttachFiles(files);
    });

    // Files to attach can be dropped in the messages area
    $('#detailPane')
        .on('dragover', handleAttachFilesDragOver)
        .on('drop', handleAttachFilesDrop);


    // Delete a Conversation
    $('#deleteChatButton').click(function() {
        console.log('Delete current conversation');
        b6.deleteConversation(currentChatUri, function(err) {
            console.log('Conversation deleted');
        });
        return false;
    });

    // Show Group info
    $('#groupInfoButton').click(function() {
        var g = b6.getGroup(currentChatUri);
        console.log('Show group info for ' + currentChatUri, g);
        if (g) {
            showGroupInfo(g);
        }
        return false;
    });

    // Member action in GroupInfo Modal
    $('#groupInfoMembers').on('click', 'a', function(e) {
        console.log(e);
        var t = $(this);
        var idx = t.parents('tr').index();
        console.log('Removing group member idx', idx);
        var g = b6.getGroup(currentChatUri);
        if (g) {
            var m = g.members[idx];
            console.log('Removing group member', m);
            b6.kickGroupMember(g, m, function(err) {
                console.log('Member removal result err=', err);
            });
        }
    });

    // Start a voice call
    $('#audioCallButton').click(function() {
        console.log('Audio call clicked');
        startOutgoingCall(currentChatUri, false, false);
    });

    // Start a video call
    $('#videoCallButton').click(function() {
        console.log('Video call clicked');
        startOutgoingCall(currentChatUri, true, false);
    });

    // Start a screen sharing call
    $('#screenCallButton').click(function() {
        console.log('ScreenShare call clicked');
        startOutgoingCall(currentChatUri, false, true);
    });

    // Start a phone call
    $('#phoneCallButton').click(function() {
        console.log('Phone call clicked');
        // For this demo, call a helpdesk of a well-known store
        startPhoneCall('+18004663337');
    });

    // Key down event in compose input field
    $('#msgText').keydown(function() {
        console.log('keydown in compose');
        b6.sendTypingNotification(currentChatUri);
    });

    // Send message when user hits Enter
    $('#msgText').keyup(function(e) {
        var code = e.which;
        if (code === 13) {
            e.preventDefault();
            sendMessage();
        }
    });

    // Paste event. If a file is pasted - send it as an attachment
    $('#msgText').on('paste', function(e) {
        var files = [];
        var evt = e.originalEvent;
        var clipboardData = evt.clipboardData || {};
        var items = clipboardData.items || [];
        for (var i = 0; i < items.length; i++) {
            var f = items[i].getAsFile();
            if (f) {
                files.push(f);
            }
        }
        if (files.length > 0) {
            evt.stopPropagation();
            evt.preventDefault();
            handleAttachFiles(files);
        }
    });


    // 'Answer Incoming Call' click
    $('#answerAudio').click(function() {
        var e = $('#incomingCall').hide();
        var d = e.data();
        // Call controller
        if (d && d.dialog) {
            var c = d.dialog;
            // Accept the call, send local audio only
            updateInCallUI(c, {audio: true, video: false});
            e.data({'dialog': null});
        }
    });

    $('#answerVideo').click(function() {
        var e = $('#incomingCall').hide();
        var d = e.data();
        // Call controller
        if (d && d.dialog) {
            var c = d.dialog;
            // Accept the call, send local audio+video
            updateInCallUI(c, {audio: true, video: true});
            e.data({'dialog': null});
        }
    });

    // 'Reject Incoming Call' click
    $('#reject').click(function() {
        var e = $('#incomingCall').hide();
        var d = e.data();
        // Call controller
        if (d && d.dialog) {
            // Reject call
            d.dialog.hangup();
            e.data({'dialog': null});
        }
    });

    $('#incallVideo').click(function() {
        var x = b6.dialogs.slice();
        // Adjust only the first call controller
        if (x.length > 0) {
            var c = x[0];
            // Toggle video
            var t = !c.options.video;
            updateInCallUI(c, {video: t});
        }
    });

    $('#incallScreen').click(function() {
        var x = b6.dialogs.slice();
        // Adjust only the first call controller
        if (x.length > 0) {
            var c = x[0];
            // Toggle screen
            var t = !c.options.screen;
            updateInCallUI(c, {screen: t});
        }
    });

    // 'Call Hangup' click
    $('#hangup').click(function() {
        $('#detailPane').removeClass('hidden');
        $('#inCallPane').addClass('hidden');
        // Hangup all active calls
        var x = b6.dialogs.slice();
        for (var i in x) {
            console.log('multi-hangup: ', x[i]);
            x[i].hangup();
        }
    });

    // Logout click
    $('#logout').click(function() {
        currentChatUri = null;
        $('#welcome').toggle(true);
        $('#main').addClass('hidden');
        $('#loggedInNavbar').addClass('hidden');
        $('#loggedInUser').text('');
        $('#chatList').empty();
        $('#msgList').empty();
        b6.session.logout();
    });

}

    </script>
  </body>
</html>
