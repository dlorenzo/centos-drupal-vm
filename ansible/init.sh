#!/bin/bash

echo "Add epel repositories"
sudo rpm -iUvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm

echo "Update packages"
sudo yum -y update

echo "Installing cifs-utils and Ansible"
sudo yum -y install cifs-utils ansible

sudo ansible-playbook -i localhost, /vagrant/ansible/playbook.yml --connection=local