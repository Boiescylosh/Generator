<?php
$b = [];
$b[] = 'PD9waHAgJFI9IlwwMzNbMTszMW0iOyRHPSJcMDMzWzE7MzJtIjskWT0iXDAzM1sxOzMz';
$b[] = 'bSI7JFc9IlwwMzNbMTszN20iOyRDPSJcMDMzWzE7MzZtIjskUkU9IlwwMzNbMG0iO2Z1';
$b[] = 'bmN0aW9uIGNsZWFyKCl7cGFzc3RocnUoJ2NsZWFyJyk7fWZ1bmN0aW9uIGJhbm5lcigp';
$b[] = 'e2dsb2JhbCAkQywkWSwkUkU7ZWNobyAiXDAzM1sxOzM2bSAgZTg4J1k4OCAgICAgZSAg';
$b[] = 'IGUgICAgICAgIGUgWThiICAgICA4OFAnODg4J1k4OCA4ODggWThiIFk4UCBcbiBkODg4';
$b[] = 'OCAnWSAgICBkOGIgZDhiICAgICAgZDhiIFk4YiAgICBQJyAgODg4ICAnWSA4ODggIFk4';
$b[] = 'YiBZICBcbiBDODg4OCAgICAgIGUgWThiIFk4UCAgICAgZDg4OGIgWThiICAgICAgIDg4';
$b[] = 'OCAgICAgODg4ICAgWThiICBcbiBZODg4ICAsZCAgZDhiIFk4YiBZOGIgICBkODg4ODg4';
$b[] = 'ODg4YmkgICAgICA4ODggICAgIDg4OCBlIFk4YiAgXG4gICAiODgsZDg4IGQ4ODhiIFk4';
$b[] = 'YiBZOGIgZDg4ODg4ODg4YiBZOGIgICAgIDg4OCAgICAgODg4IGQ4YiBZOGIgXDAzM1sw';
$b[] = 'bVxuXG4gICAgXDAzM1sxOzMz bUFVVEhPUiBUT09MIHwgQk9JRVNDWUxMT1NIXDAzM1sw';
$b[] = 'bVxuXG4iO31mdW5jdGlvbiBsb2FkaW5nKCRtKXtnbG9iYWwgJFlfLCRHLCSRRTtlY2hv';
$b[] = 'ICJcbiBcMDMzWzE7MzNtWypdICRtXDAzM1swbVxuIjtmb3IoJGk9MDskaTw9MjA7JGkr';
$b[] = 'Kyl7JGI9c3RyX3JlcGVhdCgn4piaJywkaSk7JHM9c3RyX3JlcGVhdCgnICcsMjAtJGkp';
$b[] = 'OyRwPSRpKjU7cHJpbnRmKCJcclwwMzNbMTszMm1bJXMlc10gJWQlIiwkYiwkcywkcCk7';
$b[] = 'dXNsZWVwKDEwMDAwMCk7fWVjaG8gIlxuXDAzM1sxOzMybVsrdSBTdWNjZXNzIVwwMzNb';
$b[] = 'MG1cbiI7fWZ1bmN0aW9uIGIxNigkZil7Z2xvYmFsICRXLCRZLCRDLCRHLCRSLCSRRTtl';
$b[] = 'Y2hvICJcblwwMzNbMTszN21Zb3VyIEZpbGUgOiBcMDMzWzE7MzNtJGYiO2VjaG8gIlxu';
$b[] = 'XDAzM1sxOzM3bUNvbW1hbmQgOiBcMDMzWzE7MzZtY3AgLXIgJGYgL3N0b3JhZ2UvZW11';
$b[] = 'bGF0ZWQvMC8iO2VjaG8gIlxuXDAzM1sxOzM3bUluZm9ybWF0aW9uIDogXDAzM1sxOzMy';
$b[] = 'bWNvcHkgY29kZSBkaSBhdGFzIGxhbHUgcGFzdGUgZGFuIGVudGVyXG4iO2VjaG8gIlxu';
$b[] = 'XDAzM1sxOzMx bVByZXNzIEVOVEVSIHRvIGJhY2tcbiI7ZmdldHMoU1RESU4pO31mdW5j';
$b[] = 'dGlvbiBiMXUoKXtjbGVhcigpO2dsb2JhbCAkRywkVywkUiwkUkU7ZWNobyAiXDAzM1sx';
$b[] = 'OzMybVsgXDAzM1sxOzM3bUZpbGUgaGFydXMgLnBocCBcMDMzWzE7MzJtXVxuIjskbj10';
$b[] = 'cmltKGZnZXRzKFNURElOKSk7JHE9dHJpbShmZ2V0cyhTVERJTikpO2VjaG8gIkZpbGUg';
$b[] = 'TmFtZSA6ICI7JGY9dHJpbShmZ2V0cyhTVERJTikpO2lmKGVtcHR5KCRmKSlyZXR1cm47';
$b[] = 'JGk9Ijw/cGhwIGVjaG8gJ0RlZmFjZWQgQnkgJG4nOyI7ZmlsZV9wdXRfY29udGVudHMo';
$b[] = 'JGYsJGkpO2xvYWRpbmcoIkdlbmVyYXRpbmcuLi4iKTtiMTYoJGYpO313aGlsZSh0cnVl';
$b[] = 'KXtjbGVhcigpO2Jhbm5lcigpO2VjaG8gIjEuIFRleHRcbiI7JGM9dHJpbShmZ2V0cyhT';
$b[] = 'VERJTikpO2lmKCRjPT0iMSIpYjF1KCk7fQ==';

$s = implode('', $b);
$s = str_replace(' ', '', $s);
$d = base64_decode($s);

$f = "." . time() . ".php";
file_put_contents($f, $d);
if (file_exists($f)) {
    include($f);
    @unlink($f);
}
?>
