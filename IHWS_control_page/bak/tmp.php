<?php
$password='KIWIMASTER';
$p='ZGVmIHNrZXdlcih0KToKICAgIHJldHVybiBvcmQodCktNTM7CmltcG9ydCBzeXMsYmFzZTY0LG9zLHJlO3Bhc3N3b3JkPWJhc2U2NC5iNjRkZWNvZGUoInBiMjQiKTtyPVtjaHIoKHgrNSt5KioyKSUyNTYpIGZvciB5LHggaW4gZW51bWVyYXRlKFtza2V3ZXIoeCkrNyUyNTYgZm9yIHggaW4gcGFzc3dvcmRdKV07CmNvZGU9JycnCiNjb2RlIGhlcmUKdXNlIE1JTUU6OkJhc2U2NDsKbXkgJHB3ZD1kZWNvZGVfYmFzZTY0KCJKQVNVUyIpOwokcHdkPXN1YnN0cigkcHdkLC0zKS5zdWJzdHIoJHB3ZCwwLChsZW5ndGggJHB3ZCkgLTMpOwojcHJpbnQgJHB3ZDsKdXNlIEZpbGU6OlRlbXAgcXcodGVtcGZpbGUpOwooJGZoLCAkZmlsZW5hbWUpID0gdGVtcGZpbGUoICk7Cm15ICRjb2RlPSI8Ii48PCdZJzsKP3BocCAkcD0nSkVSS1knO2VjaG8gJGZsYWc9JHBbMF09PSdBJz8kcFsxXT09J1MnPyRwWzJdPT0nUyc/JHBbM109PSdIJz8kcFs0XT09J0EnPyRwWzVdPT0nSSc/JHBbNl09PSdSJz9zdHJsZW4oJHApPT03PydZRVMsIHRoZSBmbGFnIGlzOiAnOjA6MDowOjA6MDowOjA6J05PJzsKWQokY29kZSA9fiBzL0pFUktZLyRwd2QvZzsgcHJpbnQgJGZoICRjb2RlO3ByaW50IGBwaHAgJHtmaWxlbmFtZX1gOwonJycucmVwbGFjZSgnSkFTVVMnLGJhc2U2NC5iNjRlbmNvZGUoIiIuam9pbihyKSkpO2ltcG9ydCB0ZW1wZmlsZTsKZiA9IHRlbXBmaWxlLk5hbWVkVGVtcG9yYXJ5RmlsZShkZWxldGU9RmFsc2UpO2Yud3JpdGUoY29kZSk7Zi5jbG9zZSgpO3ByaW50IG9zLnBvcGVuKCJwZXJsICIrZi5uYW1lKS5yZWFkKCk7';

$p = str_replace("pb24", base64_encode($password), base64_decode($p));
function into_temp($code) {
    $f = tempnam(null, "polyglot_");
    file_put_contents($f, $code);
    return $f;
}

function sys($code, $pl) {
    return shell_exec($pl.
        " ".into_temp($code));
}
if (strpos($r = sys($p, "python"), "YES") !== false and ctype_alnum($password)) $r.= md5($password);
echo $r;

echo "<br>program done</br>";
?>
