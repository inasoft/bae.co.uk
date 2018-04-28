<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Best Assignment Experts| Sample Solutions</title>
<meta name="description" content="Best Assignment Writing Services | Best Assignment Experts Sample Solutions for ready reference">
@include('layout.header') 

 <style type="text/css">
 body {   
    font-family: 'Raleway'!important;
    font-size: 15px !important;
    text-align: justify !important; 
    line-height: 1.55 !important;
}
h1,h2,h3, p, span { 
    font-family: 'Raleway'!important;
    font-size: 15px !important;
    text-align: justify !important; 
    line-height: 1.55 !important;
    color: #595959 !important;
}

h4{
	color: #fff;
    margin: 0px;
	text-transform: uppercase;
}

.price, .price span, .price p{
	 font-family: 'Raleway'!important;
    font-size: 25px !important;
    font-weight: 600 !important;
    color: #f27c66 !important;
	

}


.ta-editor {
  min-height: 300px;
  height: auto;
  overflow: auto;
  font-family: inherit;
  font-size: 100%;
  box-shdaow : none!important;
}

.ta-toolbar .btn {
  border-radius : 0;
  padding : 5px;
  min-width : 30px;
  background-color : #fff;
  color : #333;
}
[text-angular] { 
  position : relative;
}
.ta-toolbar { 
  position : absolute ;
  top : 0;
  right : 0;
}
@media all and (max-width: 699px) {
  .ta-toolbar { position : absolute; }
  .ta-editor { padding-top : 30px; }
}

@media all and (max-width: 250px) {
  .ta-toolbar { display : none; }
}
.ta-toolbar .btn-group { 
  margin : 0!important;
  
}
.ta-editor {
  border :1px solid #EEE;
  border-raidus : 3px!important;
}

.banner-offer .banner-text h2 {
    font-size: 35px !important;
    font-weight: 700 !important;
    color: #fff !important;
    line-height: 1 !important;
}
.banner-offer .banner-text:first-child h2 {
    font-weight: 500 !important;
}
#page-meta {
  background: #18bb7c ;
    color: #fff ;
    font-weight: 500 ;
}
footer section h3, footer section p, footer div p{
  color: #fff !important;
}
</style>

<div class="page-content woocommerce">
		<div class="container clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-9">
                                    @if(Auth::user()?Auth::user()->hasRole('admin'):0)
                                   <a class="cws-button border-radius alt" href="/create-samples">Create Samples</a>
                                    @endif
                                    @if(Session::has('sample_delete'))
                                    <div class="show-del">{{Session::get('sample_delete')}}</div>
                                    {{Session::forget('sample_delete')}}
                                    @endif
					<div id="page-meta" class="group">						
						<div id="list-or-grid">
						<h4>Sample Solutions</h4>							
						</div>						
					</div>
					<ul class="products list-view">	
                                            @foreach($sampleData as $sample)
						<li class="product">
							<div class="picture">
								<div class="ribbon ribbon-blue">
									<div class="banner">
										<div class="text">New</div>
									</div>
								</div>
								<span class="hover-effect"></span>
								<div class="link-cont">
								</div>
								
							</div>
							<div class="price">
								<a href="/samples/{{strtolower(str_replace(' ','-',$sample->page_title_tag))}}"><span class="amount">{!! html_entity_decode($sample->title) !!}</span></a>
							</div>
							<br>

							
							<div class="product-description">
								<div class="full-description">
                                                                <p>{!! $sample->short_desc !!}</p>
								</div>
							</div>	
                                                        @if(Auth::user()?Auth::user()->hasRole('admin'):0)
                                                        <a href="/delete/{{$sample->id}}"  data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <!-- <i class="fa fa-shopping-cart"></i> --> Delete</a>
                                                        @endif
							<a href="/samples/{{strtolower(str_replace(' ','-',$sample->page_title_tag))}}"  data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <!-- <i class="fa fa-shopping-cart"></i> --> Read More</a>
                                                        
						</li>
					    @endforeach
					</ul>
					
																			
					 
				</div>
				 @include('layout.right-sidebar')
			</div>
		</div>
	</div>

@include('layout.footer')