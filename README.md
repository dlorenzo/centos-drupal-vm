# centos-drupal-vm

### Vagrant 1.9.0 required.

## Vagrant

  + Install Virtualbox
    + Make sure to install "host-only network adapter" with it
  + Install Vagrant
  + Open terminal
  + Run "vagrant plugin install vagrant-guest_ansible"
  + Run "vagrant plugin install vagrant-vbguest"
  + cd to vm root directory
  + Run "vagrant up"
    + If any errors show up, retry with "vagrant provision"
  + If everything went ok, the vm is ready for use
    + To stop the vm, issue "vagrant halt"
    + To resume using it: "vagrant up"
  + **Details:**
    + URL: http://10.0.0.10/
    + SSH:
      + Host: 127.0.0.1
      + Port: 2222
      + User: vagrant
      + Password: vagrant
    + MariadDB:
      + User: root
      + Pass: toor
      + Adminer in http://10.0.0.10/adminer.php
    + Mailhog:
      + Server: localhost
      + Port: 1025