<?php

function notificationHead($customer,$comment,$date){
    $html = '<div class="row">
                <div class="col-sm-2 col-xs-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div>
                </div>
                <div class="col-sm-10 col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">';
    $html .= '<strong style="padding-left: 5px;">'.$customer.'</strong> <span class="text-muted pull-right">'.$date.'</span></div>';
    $html .= '<div class="panel-body">'.$comment.'</div></div></div></div>';
    
    return $html;
}

function subscribersBlock($subscribes) {
    if($subscribes){
		foreach($subscribes as $subscribe){
			echo ('<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
				<div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
					<div class="service-icon-three"><i class="fa fa-building"></i></div>
					<a href = "<?=PROOT?>home/promoterpage/'.$subscribe->promoter.'"><h4>'.$subscribe->promoter.'</h4></a>
				</div>
			</div>');
		}
	} else {
		echo ('<div class="single-blog wow fadeIn">
			<div class="blog-details">
				<div class="blog-meta"></div>
				<h3>You have not subscribed any promoters</h3>
			</div>
		</div><br/>');
    }
}