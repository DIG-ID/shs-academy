
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
					document.getElementById("countdown-section").style.display = "none";
					document.body.classList.add("no-countdown");
					clearInterval(x);
				}
				//seconds
			}, 0)
}());
</script>

<div id="countdown-section" class="countdown-section">
	<div class="container container__inside">
		<div class="row">

			<div class="col-3">
				<div class="countdown-section__box">
					<span id="days"></span>
					Days
				</div>
			</div>

			<div class="col-3">
				<div class="countdown-section__box">
					<span id="hours"></span>
					Hours
				</div>
			</div>

			<div class="col-3">
				<div class="countdown-section__box">
					<span id="minutes"></span>
					Minutes
				</div>
			</div>

			<div class="col-3">
				<div class="countdown-section__box">
					<span id="seconds"></span>
					Seconds
				</div>
			</div>

		</div>
	</div>
</div>
