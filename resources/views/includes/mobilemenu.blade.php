<div class="mobile-menu">
	<div class="footer">
		    <div class="col-xs-3 column">
	    		<a href="{{ url('home') }}">
	    			<img class="menu-icon" src="{{ URL::asset('icons/HomeIconWhite.svg') }}" alt="">
	    		</a>
		    </div>
		    <div class="col-xs-3 column">
	    		<a href="{{ url('home') }}">

					</a>
				</div>
				<div class="col-xs-3 column">
					<a href="{{ url('home') }}">

					</a>
				</div>
				<div class="col-xs-3 column">
					<a href="{{ url('notifications') }}" class="notificationIcon">
						<img class="menu-icon" src="{{ URL::asset('icons/MessagesIconWhiteAlt.svg') }}" alt="">
						<span class="notificationCount">{{$notificationCount}}</span>
					</a>
				</div>
	</div>
</div>
