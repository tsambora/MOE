<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-announcement.css'); }}
		<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
		<link href='http://fonts.googleapis.com/css?family=Radley' rel='stylesheet' type='text/css'>
		<title>Announcement</title>
	</head>
    <body>
    	<div class="col-md-12 text-center padding-0">
    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-announcement/banner.jpg')}}" class="center-block img-responsive">
		</div>
		</div>
    	<div class="container">
    		<div class="row">
	    		<div class="col-md-4 col-md-offset-1 desc">
		    		<p>
		    			Merchant of Emotion, sebagai sebuah transformasi dari tim Teater EPIK yang sukses dengan pementasan Taraksa 2013 lalu, akan menghadirkan pertunjukan teatrikal terbarunya, Sunset Deity, Januari 2015 mendatang. Sunset Deity adalah Pementasan Teater Lintasmedia yang mengusung penggabungan teater, koreografi serta video mapping sebagai sebuah bahasa pementasan baru.
		    		</p>
				</div>
				<div class="col-md-4 desc">
		    		<p>
						“Waktu” menjadi tema besar dari rangkaian cerita yang akan diangkat pada pementasan. Cerita berputar pada proses pendewasaan yang dialami seorang Bocah Tanpa Nama sebagai entitas pertama yang hadir di awal penciptaan dunia.
		    		</p>
		    		<br/>
		    		<p>
		    			Pementasan perdana dari Sunset Deity akan dilaksanakan dari tanggal 23 - 25 Januari 2015, bertempat di Teater Tertutup Taman Budaya Jawa Barat, Bandung.
		    		</p>
				</div>
				<div class="col-md-2 storybook">
		    		<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/01"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-announcement/button.png')}}" class="center-block img-responsive"></a>
				</div>
			</div>
			<div class="row line">
				<div class="col-md-10 col-md-offset-1 text-center">
		    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-announcement/garis.png')}}" class="img-responsive">
				</div>
			</div>
			<div class="row sub-line">
				<div class="col-md-6 col-md-offset-3 text-center">
		    		<p>
		    			Subscribe your email to catch updates on Sunset Deity's developments.
		    		</p>
				</div>
			</div>
			<div class="row form">
		    	<div class="col-xs-8 col-xs-offset-2 text-center">
		    		{{Form::open(array('url' => 'newtbsdsub', 'method' => 'POST', 'class' => 'form-inline'))}}
						<div class="form-group">	
							{{Form::text('mail','', array('class' => 'form-control underlined', 'placeholder' => 'email address'))}}
						</div>
						{{Form::submit('Submit', array('class' => 'submit-button'))}}
					{{Form::close()}}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2 text-center">
					@if(Session::has('success'))
					    <div class="alert-box success">
					        <h6>{{ Session::get('success') }}</h6>
					    </div>
					@elseif(Session::has('failure'))
					    <div class="alert-box failure">
					        <h6>{{ Session::get('failure') }}</h6>
					    </div>
					@endif
				</div>
			</div>
			<div class="row socmed">
				<div class="col-xs-8 col-xs-offset-2 text-center">
					<a href="http://facebook.com/pages/Merchant-of-Emotion/917903188237791"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/facebook.png')}}" class="socmed"></a>
					<a href="http://instagram.com/merchofemotion"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/instagram.png')}}" class="socmed"></a>
					<a href="http://twitter.com/MerchofEmotion"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/twitter.png')}}" class="socmed"></a>
				</div>
			</div>
		</div>
    </body>
</html>