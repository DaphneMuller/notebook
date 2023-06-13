<?php
$requirements = [
	'apiVersion' => 'v1',
];
return [
	'routes' => [
		['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
		['name' => 'config#setConfig', 'url' => '/config', 'verb' => 'PUT'],
	],
'ocs' => [
		['name' => 'notes#getUserNotes', 'url' => '/api/{apiVersion}/notes', 'verb' => 'GET', 'requirements' => $requirements],
		['name' => 'notes#exportUserNote', 'url' => '/api/{apiVersion}/notes/{id}/export', 'verb' => 'GET', 'requirements' => $requirements],
		['name' => 'notes#addUserNote', 'url' => '/api/{apiVersion}/notes', 'verb' => 'POST', 'requirements' => $requirements],
		['name' => 'notes#editUserNote', 'url' => '/api/{apiVersion}/notes/{id}', 'verb' => 'PUT', 'requirements' => $requirements],
		['name' => 'notes#deleteUserNote', 'url' => '/api/{apiVersion}/notes/{id}', 'verb' => 'DELETE', 'requirements' => $requirements],
	],
];