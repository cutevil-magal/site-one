<?php
// ������ ��� �����������
$serverMySQL="127.0.0.1:3306"; # ��� �������
$db="test"; # ���� ������
$dblog="root"; # �����
$dbpass=""; # ������
$table="test"; # ���� �������

$mi=new mysqli($serverMySQL, $dblog, $dbpass, $db);
$mi->set_charset("utf8"); # ���������
if($mi->connect_errno):
    die($mi->connect_error);
endif;
?>
<?php
$sql=$mi->query("select a1 from a");
print "$sql";
?>
