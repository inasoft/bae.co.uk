<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>{!! html_entity_decode($sampleData->page_title_tag) !!}</title>

<meta name="description" content="Best Assignment Experts | Best Writing Services | {!! html_entity_decode($sampleData->page_meta_tag) !!}">

@include('layout.header')
<style type="text/css">
  body {   
    font-family: 'Raleway'!important;
    font-size: 15px !important;
    text-align: justify !important; 
}
h1,h2,h3, p, span { 
    font-family: 'Raleway'!important;
    font-size: 15px !important;
    text-align: justify !important; 
}
img{
  display: none;
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
</style>
  <div class="page-content container clear-fix">
    <div class="grid-col-row">      
      <div class="grid-col grid-col-9">
      <a class="cws-button border-radius alt" href="/samples"><h1>Back to Samples</h1></a><br><br>
        <main>                                    
          <section class="clear-fix">                                            
            <p class="fs-18"><strong>{!! html_entity_decode($sampleData->title) !!}</strong></p>
            <p>{!! html_entity_decode($sampleData->content) !!}</p>
            </section>
          <hr class="divider-color" />           
        </main>       
      </div>
      @include('layout.right-sidebar')
    </div>
  </div>  
@include('layout.footer')