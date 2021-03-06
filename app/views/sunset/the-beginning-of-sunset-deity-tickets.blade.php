<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-tickets.css'); }}
		<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
		<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
		<title>Get Tickets!</title>
	</head>
	<body>
		<div class="col-md-12 text-center padding-0">
    		<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/announcement"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/logo.png')}}" class="center-block img-responsive"></a>
		</div>
		<div class="col-md-8 col-md-offset-2 text-center padding-0">
			<p>
		    	We are thrilled to welcome you to the show. Through Sunset Deity's production, we inquire to find what's fresh and bringing it to the stage for wide appreciation; and you are part of the magic that make everything happens. 
		    </p>
		</div>
    	<div class="container-fluid sunset-sub">
			<div class="row sub">
				<div class="container-fluid">
					<div class="row form">
						<div class="col-xs-12 text-center" style="margin-top:55px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/1 get.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-right">
				    		{{Form::open(array('url' => 'new_TBSD_order', 'method' => 'POST', 'role' => 'form'))}}
								<div class="form-group">	
									{{Form::text('name','', array('class' => 'form-control underlined', 'placeholder' => 'name'))}}
								</div>
								<div class="form-group">	
									{{Form::text('mail','', array('class' => 'form-control underlined', 'placeholder' => 'email address'))}}
								</div>
								<div class="form-group">	
									{{Form::text('phone','', array('class' => 'form-control underlined', 'placeholder' => 'phone number'))}}
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center" style="margin-top:55px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/2 show.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-1 col-sm-offset-3 text-center padding-0">
				    		<div class="form-group shows">
								<label class="radio-inline">
								 	{{Form::radio('show_id', '1', true)}}
								 	<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/tanggal/a.png')}}" class="center-block img-responsive"><br/>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-1 text-center padding-0">
				    		<div class="form-group shows">
								<label class="radio-inline">
									{{Form::radio('show_id', '2')}}
									<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/tanggal/b.png')}}" class="center-block img-responsive"><br/>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-1 text-center padding-0">
				    		<div class="form-group shows">	
								<label class="radio-inline">
									{{Form::radio('show_id', '3')}}
									<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/tanggal/c.png')}}" class="center-block img-responsive"><br/>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-1 text-center padding-0">
				    		<div class="form-group shows">
								<label class="radio-inline">
								 	{{Form::radio('show_id', '4')}}
								 	<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/tanggal/d.png')}}" class="center-block img-responsive"><br/>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-1 text-center padding-0">
				    		<div class="form-group shows">
								<label class="radio-inline">
									{{Form::radio('show_id', '5')}}
									<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/tanggal/e.png')}}" class="center-block img-responsive"><br/>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-1 text-center padding-0">
				    		<div class="form-group shows">
								<label class="radio-inline">
									{{Form::radio('show_id', '6')}}
									<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/tanggal/f.png')}}" class="center-block img-responsive"><br/>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center" style="margin-top:20px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/3 class.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-2 col-sm-offset-3 text-center" style="margin-top:5px;margin-bottom:30px;">
							<div class="form-group class">
								<label class="radio-inline">
								 	{{Form::radio('class', '1', true)}}
								 	<p>REGULAR</p>
								 	<p>Rp 50.000</p>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-2 text-center" style="margin-top:5px;margin-bottom:30px;">
							<div class="form-group class">
								<label class="radio-inline">
									{{Form::radio('class', '2')}}
									<p>VIP</p>
									<p>Rp 100.000</p>
								</label>
							</div>
						</div>
						<div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
				    		<div class="form-group">
								{{Form::select('amount', array('1' => '1', '2' => '2', '3' => '3', '4' => '4'), '1', ['class' => 'form-control'])}}
							</div>
						</div>
					</div><br/>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1 text-center" style="margin-top:-10px;margin-bottom:30px;">
							<div class="form-group">
								{{Form::submit('Order', array('class' => 'buy-tickets'))}}
							</div>
							{{Form::close()}}
						</div>
					</div>
					<div id="row">
						<div class="col-md-2 col-md-offset-5 text-center padding-0 faq">
				    		<a href="" data-toggle="modal" data-target="#faq"><p>Read FAQ</p></a>
						</div>
						<div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div id="faq-content" class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>
										<p class="text-left"><b>1. Saya sudah memesan dan memasukkan data dalam website merchantofemotion.com, tetapi belum mendapatkan email konfirmasi. Apa yang harus saya lakukan?</b></p>
										<p class="text-left">Anda bisa mencoba untuk memasukkan ulang data pemesanan dalam website (ada kemungkinan tidak stabilnya koneksi internet mempengaruhi input dalam website kami). Apabila email konfirmasi masih belum diterima setelah Anda memasukkan data kembali, silakan hubungi Dea di +6281910064981 atau email ke info@merchantofemotion.com. Kami akan hubungi Anda untuk konfirmasi dalam 1x24 jam.</p>
										<p class="text-left"><b>2. Apakah saya dapat memilih tempat duduk di hari pertunjukan dalam kelas tiket yang telah saya beli?</b></p>
										<p class="text-left">Tempat duduk untuk Pementasan Sunset Deity tersedia dalam dua kelas, yaitu VIP dan Reguler. Setelah mengecek kelas tiket yang Anda beli, pemilihan kursi dilakukan dengan sistem first-come, first-served—ada baiknya Anda datang lebih awal untuk mendapatkan tempat duduk menonton yang ideal menurut Anda.</p>
										<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/seats.jpg')}}" class="center-block img-responsive">
										<p class="text-left"><b>3. Apakah ada diskon pembelian tiket untuk pementasan ini?</b><p>
										<p class="text-left">Promo diskon hanya berlaku untuk pemesanan offline (melalui narahubung Dea di +62 819 1006 4981 atau LINE ID: deacm). Dapatkan diskon 10% untuk pelajar (dengan menyertakan foto atau scan kartu pelajar saat mengirim bukti pembayaran) untuk seluruh pertunjukan petang (16.00) pada 23 - 25 Januari 2015.<p>
										<p class="text-left"><b>4. Jika saya telah memesan tiket pada hari dan waktu pertunjukan tertentu, apakah dapat saya tukar dengan hari dan waktu pertunjukan lain?</b><p>
										<p class="text-left">Sehubungan dengan terbatasnya kursi yang tersebar dalam 6 kali pertunjukan berbeda (23-25 Januari 2015, petang dan malam untuk masing-masing harinya), dengan menyesal kami tidak menerima penukaran tiket untuk hari dan waktu pertunjukan berbeda. Mohon pastikan jadwal Anda sebelum memesan kelas tiket.<p>
										<p class="text-left"><b>5. Apakah akan ada nomor kursi? Jika ada bagaimana saya memastikannya?</b></p>
										<p class="text-left">Ya, nomor kursi akan kami sematkan, namun nomor tidak akan tertera pada bukti pembayaran yang Anda dapatkan. Anda akan mendapatkan nomor kursi saat menukar tiket di hari pertunjukan.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2 text-center">
							@if(Session::has('success'))
							    <div class="alert-box success">
							        <h5>{{ Session::get('success') }}</h5>
							    </div>
							@elseif(Session::has('failure'))
							    <div class="alert-box failure">
							        <h5>{{ Session::get('failure') }}</h5>
							    </div>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center" style="margin-top:20px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/border.png')}}" class="center-block img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center padding-0" style="margin-top:0px;margin-bottom:30px;">
    		<a href="http://recollectionofsunset.blogspot.com/"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/gif-1.gif')}}" class="center-block img-responsive"></a>
		</div>
		<div class="col-md-6 col-md-offset-3 text-center" style="margin-top:0px;margin-bottom:0px;">
    		<p>
    			Visit Merchant of Emotion's Production Blog to get to know the story behind Sunset Deity's theatrical show.
    		</p>
    		<p>
    			Subscribe your email to catch updates on Sunset Deity's developments.
    		</p>
		</div>
    	<div class="col-xs-8 col-xs-offset-2 text-center" style="margin-top:10px;margin-bottom:0px;">
    		{{Form::open(array('url' => 'newtbsdsub', 'method' => 'POST', 'class' => 'form-inline'))}}
				<div class="form-group">	
					{{Form::text('mail','', array('class' => 'form-control underlined', 'placeholder' => 'email address'))}}
				</div>
				{{Form::submit('Submit', array('class' => 'submit-button'))}}
			{{Form::close()}}
		</div>
		<div class="col-xs-8 col-xs-offset-2 text-center" style="margin-top:10px;margin-bottom:10px;">
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
		<div class="col-xs-8 col-xs-offset-2 text-center">
			<a href="http://facebook.com/pages/Merchant-of-Emotion/917903188237791"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/facebook.png')}}" class="socmed"></a>
			<a href="http://instagram.com/merchofemotion"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/instagram.png')}}" class="socmed"></a>
			<a href="http://twitter.com/MerchofEmotion"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/twitter.png')}}" class="socmed"></a>
		</div>
		<div class="col-xs-8 col-xs-offset-2 text-center" style="margin-top:25px;margin-bottom:25px;">
			<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/announcement"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/home.png')}}" class="to-home"></a>
		</div>
</body>
</html>