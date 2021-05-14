<?php $__env->startSection('content'); ?>

	<p>This is the list of the sessions requested by our guest</p>

	<table>
		<tr>
			<th>Complete Name</th>
			<th>Email Address</th>
			<th>Contact No.</th>
			<th>Birthdate</th>
			<th>Religion</th>
			<th>BS Date</th>
			<th>BS Time</th>
			<th>BS Location</th>
		</tr>
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\final-exam\resources\views/requests.blade.php ENDPATH**/ ?>