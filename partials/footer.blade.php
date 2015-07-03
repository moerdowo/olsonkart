﻿<!-- Clients starts -->
<div class="clients blocky">
	<div class="container">
    	<div class="row"></div>
	</div>
</div>
<!-- Clients ends -->

<!-- Footer starts -->
<footer>
    <div class="container">
			<div class="row">
                <!-- <div class="col-md-3 col-sm-3">
                    <div class="fwidget">
                       <h4>About</h4>
                       <hr />
                    </div>
                </div> -->

                @foreach($tautan as $key=>$group)
                    @if($key!=2)
                	<div class="col-md-4 col-sm-4">
                    	<div class="fwidget">
                    		<h4>{{$group->nama}}</h4>
                    		<hr />
                    		<ul>
	                       		<li>
	                            @foreach($group->link as $key=>$link)
                                    <a class="invarseColor" href='{{menu_url($link)}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
	                                <br>
	                            @endforeach
	                    		</li>
                    		</ul>
                    	</div>
                	</div>    
                	@endif    
                @endforeach
                <div class="col-md-4 col-sm-4">
					<div class="fwidget">
						<h4>Get In Touch</h4>
						<hr />
						<div class="address">
							<p><i class="icon-home color contact-icon"></i> {{$kontak->alamat}}. </p>
							<p><i class="icon-phone color contact-icon"></i> {{$kontak->telepon}}</p>
							<p><i class="icon-envelope color contact-icon"></i> <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></p>
						</div>
					</div>
				</div>

			</div>
			<hr/>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="client">
						@if(!empty($bank))	
							@foreach(list_banks() as $value)	
							<img src="{{bank_logo($value)}}" alt="{{$value->name}}" class="img-responsive logo-bank" />
							@endforeach	
						@endif	
						@if(count(list_payments()) > 0)
							@foreach(list_payments() as $pay)
								@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
								<img src="{{url('img/bank/ipaymu.jpg')}}" alt="support ipaymu" class="img-responsive logo-bank" />
								@endif
							@endforeach
						@endif
						@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
						<img src="{{url('img/bank/doku.jpg')}}" alt="support doku myshortcart" class="img-responsive logo-bank" />
						@endif
					</div>
				</div>
			</div>
			<hr />
			<div class="copy text-center">
				{{ Theme::place('title') }} Copyright {{date('Y')}} © - Powered by <a target="_blank" href="http://jarvis-store.com">Jarvis Store</a>
			</div>
		</div>
	</footer>
	<!-- Footer ends -->
{{pluginPowerup()}}