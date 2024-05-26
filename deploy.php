<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'finalProject');
set('remote_user', 'virt118412'); //virt...
set('http_user', 'virt118412');
set('keep_releases', 2);

// Hosts
host('ta22tiitma.itmajakas.ee')
    ->setHostname('ta22tiitma.itmajakas.ee')
    ->set('http_user', 'virt118412')
    ->set('deploy_path', '~/domeenid/www.ta22tiitma.itmajakas.ee/finalproject')
    ->set('branch', 'main');

// Tasks
set('repository', 'git@github.com:tenetiitma/TA-22FINAL.git');
//Restart opcache
task('opcache:clear', function () {
    run('killall php82-cgi || true');
})->desc('Clear opcache');

// Install npm dependencies
task('npm:install', function () {
    run('cd {{release_path}} && npm install');
})->desc('Install npm dependencies');

// Run npm build
task('npm:build', function () {
    run('cd {{release_path}} && npm run production');
})->desc('Build assets with npm');

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'npm:install',
    'npm:build',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'deploy:publish',
    'opcache:clear',
    'artisan:cache:clear'
]);
after('deploy:failed', 'deploy:unlock');
