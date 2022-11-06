<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/sabuto/dunnedecorating.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('139.162.215.40')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/dd');

// Hooks
after('deploy:failed', 'deploy:unlock');

// Tasks
desc('run yarn build prod');
task('yarn:run:prod', function(){
    cd('{{release_or_current_path}}');
    run('yarn run build');
});
