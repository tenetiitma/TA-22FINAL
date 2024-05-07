<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'finalproject');
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

// task('build:node', function () {
//     cd('{{release_path}}');
//     run('npm i');
//     run('npx vite build');
//     run('rm -rf node_modules');
// });
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    // 'build:node',
    'deploy:publish',
    'opcache:clear',
    'artisan:cache:clear'
]);
after('deploy:failed', 'deploy:unlock');
