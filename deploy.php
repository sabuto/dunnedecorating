<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/yarn.php';

// Config

set('repository', 'https://github.com/sabuto/dunnedecorating.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('139.162.215.40')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/dd');

// Tasks

desc('builds the site');
task('yarn:build', function () {
    run("cd {{release_path}} && {{bin/yarn}} build");
});

// Hooks
after('deploy:update_code', 'yarn:install');
after('deploy:vendors', 'yarn:build');
after('deploy:failed', 'deploy:unlock');
