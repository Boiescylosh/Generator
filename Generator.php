<?php
$s = [];
$s[] = 'PD9waHAgJFI9IlwwMzNbMTszMW0iOyRHPSJcMDMzWzE7MzJtIjskWT0iXDAzM1sxOzMz';
$s[] = 'bSI7JFc9IlwwMzNbMTszN20iOyRDPSJcMDMzWzE7MzZtIjskUkU9IlwwMzNbMG0iO2Z1';
$s[] = 'bmN0aW9uIGNsZWFyKCl7cGFzc3RocnUoJ2NsZWFyJyk7fWZ1bmN0aW9uIGJhbm5lcigp';
$s[] = 'e2dsb2JhbCAkQywkWSwkUkU7ZWNobyAiXDAzM1sxOzM2bSAgZTg4J1k4OCAgICAgZSAg';
$s[] = 'IGUgICAgICAgIGUgWThiICAgICA4OFAnODg4J1k4OCA4ODggWThiIFk4UCBcbiBkODg4';
$s[] = 'OCAnWSAgICBkOGIgZDhiICAgICAgZDhiIFk4YiAgICBQJyAgODg4ICAnWSA4ODggIFk4';
$s[] = 'YiBZICBcbiBDODg4OCAgICAgIGUgWThiIFk4UCAgICAgZDg4OGIgWThiICAgICAgIDg4';
$s[] = 'OCAgICAgODg4ICAgWThiICBcbiBZODg4ICAsZCAgZDhiIFk4YiBZOGIgICBkODg4ODg4';
$s[] = 'ODg4YmkgICAgICA4ODggICAgIDg4OCBlIFk4YiAgXG4gICAiODgsZDg4IGQ4ODhiIFk4';
$s[] = 'YiBZOGIgZDg4ODg4ODg4YiBZOGIgICAgIDg4OCAgICAgODg4IGQ4YiBZOGIgXDAzM1sw';
$s[] = 'bVxuXG4gICAgXDAzM1sxOzMz bUFVVEhPUiBUT09MIHwgQk9JRVNDWUxMT1NIXDAzM1sw';
$s[] = 'bVxuXG4iO31mdW5jdGlvbiBsb2FkaW5nKCRtKXtnbG9iYWwgJFlfLCRHLCSRRTtlY2hv';
$s[] = 'ICJcbiBcMDMzWzE7MzNtWypdICRtXDAzM1swbVxuIjtmb3IoJGk9MDskaTw9MjA7JGkr';
$s[] = 'Kyl7JGI9c3RyX3JlcGVhdCgn4piaJywkaSk7JHM9c3RyX3JlcGVhdCgnICcsMjAtJGkp';
$s[] = 'OyRwPSRpKjU7cHJpbnRmKCJcclwwMzNbMTszMm1bJXMlc10gJWQlIiwkYiwkcywkcCk7';
$s[] = 'dXNsZWVwKDEwMDAwMCk7fWVjaG8gIlxuXDAzM1sxOzMybVsrdSBTdWNjZXNzIVwwMzNb';
$s[] = 'MG1cbiI7fWZ1bmN0aW9uIGIxNigkZil7Z2xvYmFsICRXLCRZLCRDLCRHLCRSLCSRRTtl';
$s[] = 'Y2hvICJcblwwMzNbMTszN21Zb3VyIEZpbGUgOiBcMDMzWzE7MzNtJGYiO2VjaG8gIlxu';
$s[] = 'XDAzM1sxOzM3bUNvbW1hbmQgOiBcMDMzWzE7MzZtY3AgLXIgJGYgL3N0b3JhZ2UvZW11';
$s[] = 'bGF0ZWQvMC8iO2VjaG8gIlxuXDAzM1sxOzM3bUluZm9ybWF0aW9uIDogXDAzM1sxOzMy';
$s[] = 'bWNvcHkgY29kZSBkaSBhdGFzIGxhbHUgcGFzdGUgZGFuIGVudGVyXG4iO2VjaG8gIlxu';
$s[] = 'XDAzM1sxOzMx bVByZXNzIEVOVEVSIHRvIGJhY2tcbiI7ZmdldHMoU1RESU4pO31mdW5j';
$s[] = 'dGlvbiBiMXUoKXtjbGVhcigpO2dsb2JhbCAkRywkVywkUiwkUkU7ZWNobyAiXDAzM1sx';
$s[] = 'OzMybVsgXDAzM1sxOzM3bUZpbGUgaGFydXMgLnBocCBcMDMzWzE7MzJtXVxuIjskbj10';
$s[] = 'cmltKGZnZXRzKFNURElOKSk7JHE9dHJpbShmZ2V0cyhTVERJTikpO2VjaG8gIkZpbGUg';
$s[] = 'TmFtZSA6ICI7JGY9dHJpbShmZ2V0cyhTVERJTikpO2lmKGVtcHR5KCRmKSlyZXR1cm47';
$s[] = 'JGk9Ijw/cGhwIGVjaG8gJ0RlZmFjZWQgQnkgJG4nOyI7ZmlsZV9wdXRfY29udGVudHMo';
$s[] = 'JGYsJGkpO2xvYWRpbmcoIkdlbmVyYXRpbmcuLi4iKTtiMTYoJGYpO313aGlsZSh0cnVl';
$s[] = 'KXtjbGVhcigpO2Jhbm5lcigpO2VjaG8gIjEuIFRleHRcbiI7JGM9dHJpbShmZ2V0cyhT';
$s[] = 'VERJTikpO2lmKCRjPT0iMSIpYjF1KCk7fQ==';

$d = base64_decode(str_replace(' ', '', implode('', $s)));
$t = "." . md5(time()) . ".php";
file_put_contents($t, $d);
if (file_exists($t)) { include($t); unlink($t); }
?>
