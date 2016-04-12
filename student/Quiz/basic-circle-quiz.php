<?php
/**
 * Created by PhpStorm.
 * User: GhabX
 * Date: 2/25/2016
 * Time: 8:19 PM
 */
$content_header = 'Basic Circle Quiz - Quiz on Topic 1';
$content_body = file_get_contents('basic-circle-quiz-content.php');
$header = file_get_contents('basic-circle-quiz-header.php');
$rel_path = '../';
include('../student-layout.php');
