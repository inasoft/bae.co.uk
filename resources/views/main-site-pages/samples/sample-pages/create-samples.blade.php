@include('admin.dashboard-layout.header')
{!! Html::style('admin-dashboard/css/alertify.min.css') !!}
{!! Html::script('admin-dashboard/js/alertify.min.js') !!}

<div class="container" style="margin-top:5%; margin-bottom:5%;">
    <div class="row">
        <h3 class="sample">
            Create Sample Page
        </h3>
        <div class="container app" ng-app="textAngularTest" ng-controller="wysiwygeditor">
            <div class="topic-section">
            <div class="topic-section-head">
                <h3 class="head">
                    Topic
                </h3>
                </div>
                <input type="text" name="htmlTopicContent" ng-model="htmlTopicContent"  style="max-height: 70px;" />
              
            </div>
            
            <div class="read_more-section">
            <div class="read-more-head">
                <h3 class="head">
                    Short Description
                </h3>
                </div>
                <input type="text" name="readContent" ng-model="read_more"  style="max-height: 120px;  height: auto;
  overflow: auto;" />
               
            </div>
            <div class="content-section">
            <div class="content-section-head">
                <h3 class="head">
                    Content
                </h3>
                </div>
                <div name="htmlcontent" ng-model="htmlcontent" ta-disabled="disabled" text-angular="text-angular" style="min-height:150px;">
                </div>
            </div>
           
            <div class="center-block mrgin_top">
                <button class="btn btn-info" ng-click="htmlcontent = orightml" type="button">
                    Reset
                </button>
                <button class="btn btn-info" ng-click="sendData(htmlcontent,read_more, htmlTopicContent)" type="button">
                    Publish Data
                </button>
            </div>
            <text-angular name="htmlcontent">
            </text-angular>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js">
        </script>
    </div>
</div>
<style type="text/css">
   .content-section .ta-editor{
    min-height: 400px;
   }

   .ta-editor {
  
  height: auto;
  overflow: auto;
  font-family: inherit;
  font-size: 100%;
      width: 80%;
}

.row{
  font-size: 14px;
}

.head{
	    font-size: 30px;
    margin-bottom: 20px;
}

.sample{
	font-size: 30px;
    color: #fff;
    margin-left: 14px;
    background: linear-gradient(to right, #a9c600 , #3aa2d0, #000);
    width: 335px;
    padding: 6px;
}


.mrgin_top{
	    margin-top: 25px;
}



</style>
<script type="text/javascript">
    angular.module("textAngularTest", ['textAngular']).
  controller('wysiwygeditor', function($scope, $http){
    $scope.orightml = '';
    $scope.htmlcontent = $scope.orightml;
    $scope.disabled = false;
    $scope.htmlTopicContent='';
    $scope.read_more='';
    $scope.sendData=function(htmlcontent, read_more, topic){
      console.log(htmlcontent);
      console.log(topic);
      $http({
                        method: 'POST',
                        url: '/api/create/sample',
                        data: {
                          "topic": '<p>' + topic+ '</p>',
                          "short_description":'<p>' + read_more + '</p>',
                          "content":htmlcontent

                        },
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                       
                        if(response.data.success=='success'){
                          
                           $scope.orightml = '';
                           $scope.htmlcontent = $scope.orightml;
                           $scope.disabled = false;
                           $scope.htmlTopicContent='';
                           $scope.read_more='';
                           alertify.success(response.data.message);
                        }
                        else{
                           alertify.error(response.data.message);
                        }
                        


                    }, function errorCallback(response) {
                     
                        console.log(response);
                    });

    }

  });
</script>
@include('admin.dashboard-layout.footer')
