#!/bin/bash

echo "Add epel repositories"
sudo rpm -iUvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm

echo "Update packages"
sudo yum -y update

echo "Installing Ansible"
sudo yum -y install ansible

sudo ansible-playbook -i localhost, /vagrant/ansible/playbook.yml --connection=local