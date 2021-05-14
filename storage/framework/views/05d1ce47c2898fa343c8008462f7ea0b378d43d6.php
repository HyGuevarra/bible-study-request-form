	<div class="space"></div>

	<div class="daily-verse" id="ourmanna-verse">Loading...</div>
	<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('request.details')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<label for="cname">Complete Name:</label><br>
		<input type="text" id="cname" name="cname"><br>

		<label for="email">Email Address:</label><br>
		<input type="email" id="email" name="email"><br>

		<label for="contactnum">Contact Number:</label><br>
		<input type="number" id="contactnum" name="contactnum"><br>

		<label for="bdate">Birthdate:</label><br>
		<input type="date" id="bdate" name="bdate"><br>

		<label for="religion">Religious Affiliation:</label><br>
		<input type="text" id="religion" name="religion"><br><br>

		<label for="bsdate">Bible Study Date:</label><br>
		<input type="date" id="bsdate" name="bsdate"><br>

		<label for="bstime">Bible Study Time:</label><br>
		<input type="time" id="bstime" name="bstime"><br>

		<label for="bslocation">Bible Study Location/Address:</label><br>
		<input type="text" id="bslocation" name="bslocation"><br><br><br>

		<input type="submit">
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\final-exam\resources\views/form.blade.php ENDPATH**/ ?>