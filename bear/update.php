<?php

$packages = [
    'Ray.Aop',
    'Ray.Di',
    'BEAR.Resource',
    'BEAR.Sunday',
    'BEAR.Package'
];
foreach ($packages as $package) {
    passthru("git clone git://github.com/koriym/{$package}.git");
    passthru("mv $package/src src/$package");
}
