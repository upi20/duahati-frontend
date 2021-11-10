<?php
defined('BASEPATH') or exit('No direct script access allowed');
$config['datatables'] = [
	'scripts' => [
		'assets/plugins/datatable/js/jquery.dataTables.min.js',
		'assets/plugins/datatable/js/dataTables.bootstrap5.min.js',
	],
	'styles' => [
		// 'assets/plugins/datatable/css/bootstrap.min.css',
		'assets/plugins/datatable/css/dataTables.bootstrap5.min.css',
	]
];

$config['datatables-btn'] = [
	'scripts' => [
		'assets/plugins/datatables-buttons/js/dataTables.buttons.min.js',
		'assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
		'assets/plugins/datatables-buttons/js/buttons.html5.min.js',
		'assets/plugins/datatables-buttons/js/buttons.print.min.js',
		'assets/plugins/datatables-buttons/js/buttons.colVis.min.js',
		'assets/plugins/jszip/jszip.min.js',
		'assets/plugins/pdfmake/pdfmake.min.js',
		'assets/plugins/pdfmake/vfs_fonts.js'
	]
];

$config['validation'] = [
	'scripts' => [
		'assets/plugins/jquery-validation/jquery.validate.min.js',
		'assets/plugins/jquery-validation/additional-methods.min.js'
	]
];

$config['icheck'] = [
	'styles' => [
		'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'
	]
];

$config['select2'] = [
	'styles' => [
		'assets/plugins/select2/style.css',
	],
	'scripts' => [
		'assets/plugins/select2/script.js',
	]
];

$config['summernote'] = [
	'styles' => [
		'assets/plugins/summernote/summernote-bs4.css'
	],
	'scripts' => [
		'assets/plugins/summernote/summernote-bs4.js'
	]
];

$config['summernote-audio'] = [
	'styles' => [
		'assets/plugins/summernote-audio/summernote-audio.css'
	],
	'scripts' => [
		'assets/plugins/summernote-audio/summernote-audio.js'
	]
];

$config['masonry'] = [
	'scripts' => [
		'assets/plugins/masonry/masonry.pkgd.min.js'
	]
];

$config['switch'] = [
	'styles' => [
		'assets/plugins/bootstrap-switch-button/css/bootstrap-switch-button.min.css'
	],
	'scripts' => [
		'assets/plugins/bootstrap-switch-button/js/bootstrap-switch-button.min.js'
	]
];
