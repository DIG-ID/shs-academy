<?php $event_start_date = get_field( 'event_duration_event_start_date' ); ?>

<script type="text/javascript">
(function () {
	const second = 1000,
				minute = second * 60,
				hour = minute * 60,
				day = hour * 24;

	const countDown = new Date("<?php echo $event_start_date; ?>").getTime(),
			x = setInterval(function() {    

				const now = new Date().getTime(),
							distance = countDown - now;

					document.getElementById("days").innerText = Math.floor(distance / (day)),
					document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
					document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
					document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

				//do something later when date is reached
				if (distance < 0) {
					document.getElementById("countdown").style.display = "none";
					clearInterval(x);
				}
				//seconds
			}, 0)
}());
</script>

<div class="countdown-section">
	<div class="container container__inside">
		<ul id="row countdown">
			<li class="col-3"><span id="days"></span>Days</li>
			<li class="col-3"><span id="hours"></span>Hours</li>
			<li class="col-3"><span id="minutes"></span>Minutes</li>
			<li class="col-3"><span id="seconds"></span>Seconds</li>
		</ul>
	</div>
</div>
