@servers(['web' => 'root@162.243.70.85'])

@task('deploy', ['on' => 'web'])
  cd '/var/www/hyle.io'
  git fetch --all
  git reset --hard origin/master
@endtask