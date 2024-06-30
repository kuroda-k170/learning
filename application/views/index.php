<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ja">
<head>

	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Top Page</title>

	<link rel="apple-touch-icon" href="icon.png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
			rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
			crossorigin="anonymous"
	>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
			integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			crossorigin="anonymous">
	</script>
</head>

<body>
	<!-- ボタンをおしたら、jsのイベントが動作してプルダウンの中に配列が置き換わる -->
<div class="container">
	<select name="pulldown" class="form-select" aria-label="Default select example">
		<option selected>Open this select menu</option>
		<option value="1">One</option>
		<option value="2">Two</option>
		<option value="3">Three</option>
	</select>
	<div id="add">
	</div>
	<div class="container">
		<button id="change" type="button" class="btn btn-primary">書き換え</button>
	</div>
</div>

<script >
// <script src="../js/index.js">
	let test = 'test';
	var users = [
		{
		name: '黒田',
		id: '4528',
		job_type: 10
		},
		{
		name: '加藤',
		id: '4158',
		job_type: 10
		},
		{
		name: '小泉',
		id: '4558',
		job_type: 10
		},
		{
		name: '田中',
		id: '3558',
		job_type: 20
		},
		{
		name: '遠藤',
		id: '3598',
		job_type: 20
		},
		{
		name: '林',
		id: '3550',
		job_type: 20
		},
		{
		name: '山田',
		id: '2558',
		job_type: null
		},
	];
	var list = [
		{
            '0': 'すべて'
        },
        {
            '-1': '担当者登録なし'
        },
	];

	$.each(users, function(index, tantou) {
    var jobCategory = tantou.job_type == '10' ? '医者' : (tantou.job_type == '20' ? '看護師' : '事務');

    if (!list[jobCategory]) {
        list[jobCategory] = {};
    }

    list[jobCategory][tantou.id] = tantou.name;
	});

	$('#change').click(function() {
		$('[name = "pulldown"]').empty();
		// $('[name = "pulldown"]').append(list);
		$('#add').append(list);
		console.log(list);
	})

</script>
</body>
</html>
