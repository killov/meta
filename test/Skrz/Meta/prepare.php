<?php

include __DIR__ . "/../../../vendor/autoload.php";
include __DIR__ . "/Fixtures/Base/BaseMetaSpec.php";

use Skrz\Meta\Fixtures\Base\BaseMetaSpec;
use Skrz\Meta\Fixtures\Constants\ConstantsMetaSpec;
use Skrz\Meta\Fixtures\JSON\JsonMetaSpec;
use Skrz\Meta\Fixtures\PHP\PhpMetaSpec;
use Skrz\Meta\Fixtures\XML\XmlMetaSpec;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

$files = array_map(function (SplFileInfo $file) {
    return $file->getPathname();
}, iterator_to_array(
    (new Finder())
        ->in(__DIR__ . "/Fixtures/Base")
        ->name("Class*.php")
        ->notName("*Meta*")
        ->files()
));

$spec = new BaseMetaSpec();
$spec->processFiles($files);

$files = array_map(function (\SplFileInfo $file) {
    return $file->getPathname();
}, iterator_to_array(
    (new Finder())
        ->in(__DIR__ . "/Fixtures/Constants")
        ->name("Class*.php")
        ->notName("*Meta*")
        ->files()
));

$spec = new ConstantsMetaSpec();
$spec->processFiles($files);

$files = array_map(function (\SplFileInfo $file) {
    return $file->getPathname();
}, iterator_to_array(
    (new Finder())
        ->in(__DIR__ . "/Fixtures/JSON")
        ->name("ClassWith*.php")
        ->notName("*Meta*")
        ->files()
));

$spec = new JsonMetaSpec();
$spec->processFiles($files);

$files = array_map(function (\SplFileInfo $file) {
    return $file->getPathname();
}, iterator_to_array(
    (new Finder())
        ->in(__DIR__ . "/Fixtures/PHP")
        ->name("ClassWith*.php")
        ->notName("*Meta*")
        ->notName("ClassWithNonTransientPrivateProperty.php")
        ->files()
));

$spec = new PhpMetaSpec(\DateTimeImmutable::class);
$spec->processFiles($files);

$files = array_map(function (\SplFileInfo $file) {
    return $file->getPathname();
}, iterator_to_array(
    (new Finder())
        ->in(__DIR__ . "/Fixtures/PHP")
        ->name("ClassWith*.php")
        ->notName("*Meta*")
        ->notName("ClassWithNonTransientPrivateProperty.php")
        ->files()
));

$spec = new PhpMetaSpec();
$spec->processFiles($files);

$files = array_map(function (\SplFileInfo $file) {
    return $file->getPathname();
}, iterator_to_array(
    (new Finder())
        ->in(__DIR__ . "/Fixtures/XML")
        ->name("*.php")
        ->notName("*Meta*")
        ->files()
));

$spec = new XmlMetaSpec();
$spec->processFiles($files);