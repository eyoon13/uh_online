$(document).ready(function () {

	$('.dropdown-toggle').dropdown();

	$('#cred_select').change(function(){
		console.log($('#cred_select').val());
		if($('#cred_select').val()=="CERT"){
			$('#aos_select')
			.empty()
			.append('<option value="" selected="selected">All</option>')
			.append('<option value="1">Accounting</option>')
			.append('<option value="2">Business</option>')
			.append('<option value="10">Management</option>')
			.append('<option value="14">Public Administration</option>')
			.append('<option value="15">Risk Management and Insurance (RMI)</option>')
			.append('<option value="17">Substance Abuse &amp; Addictions Studies</option>')
		}
		if($('#cred_select').val()=="AA"){
			$('#aos_select')
			.empty()
			.append('<option value="" selected="selected">All</option>')
			.append('<option value="1">Accounting</option>')
			.append('<option value="4">Education</option>')
			.append('<option value="8">Liberal Arts</option>')
			.append('<option value="18">Writing</option>')
		}
		if($('#cred_select').val()=="BA"){
			$('#aos_select')
			.empty()
			.append('<option value="" selected="selected">All</option>')
			.append('<option value="1">Accounting</option>')
			.append('<option value="2">Business</option>')
			.append('<option value="4">Education</option>')
			.append('<option value="6">Interdisciplinary Studies</option>')
			.append('<option value="11">Nursing</option>')
			.append('<option value="12">Political Science</option>')
			.append('<option value="13">Psychology</option>')
			.append('<option value="14">Public Administration</option>')
		}
		if($('#cred_select').val()==""){
			$('#aos_select')
			.empty()
			.append('<option value="" selected="selected">All</option>')
			.append('<option value="1">Accounting</option>')
			.append('<option value="2">Business</option>')
			.append('<option value="3">Disability Studies</option>')
			.append('<option value="4">Education</option>')
			.append('<option value="5">Indigenous Language and Culture Education</option>')
			.append('<option value="6">Interdisciplinary Studies</option>')
			.append('<option value="7">Kinesiology and Rehabilitation Science</option>')
			.append('<option value="8">Liberal Arts</option>')
			.append('<option value="9">Library and Information Sciences</option>')
			.append('<option value="10">Management</option>')
			.append('<option value="11">Nursing</option>')
			.append('<option value="12">Political Science</option>')
			.append('<option value="13">Psychology</option>')
			.append('<option value="14">Public Administration</option>')
			.append('<option value="15">Risk Management and Insurance (RMI)</option>')
			.append('<option value="16">Social Work</option>')
			.append('<option value="17">Substance Abuse &amp; Addictions Studies</option>')
			.append('<option value="18">Writing</option>')
		}
	});

});