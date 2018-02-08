# centos-drupal-vm

## Main features

  + Apache (with SSL support)
  + PHP 7
    + Includes optional PHP 5.6 role.
  + MariaDB
  + Mailhog
  + Pimp My Log
  + Drush
  + Adminer

## Installation

  + Install Virtualbox
    + Make sure to install "host-only network adapter" with it
  + Install Vagrant
  + Open terminal
  + Run `vagrant plugin install vagrant-vbguest`
  + *WINDOWS ONLY:_ Run `vagrant plugin install vagrant-winnfsd` if you wish to use nfs.
  + *UNIX ONLY:* comment the line directly below `## Windows` and uncomment the one below `## Unix` in the
  Vagrantfile file.
  + cd to vm root directory
  + Run `vagrant up`
    + If any errors show up, retry with `vagrant reload --provision`
  + If everything went ok, the vm is ready for use
    + To stop the vm, issue `vagrant halt`
    + To resume using it: `vagrant up`
  + **Details:**
    + URL: http://10.0.0.10/
    + SSH:
      + Host: 127.0.0.1
      + Port: 2222
      + User: vagrant
      + Password: vagrant
    + MariaDB:
      + User: root
      + Pass: toor
      + Adminer in http://10.0.0.10/adminer.php
    + Mailhog:
      + Server: localhost
      + Port: 1025