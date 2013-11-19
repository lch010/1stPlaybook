1stPlaybook
===========


My first Ansible playbook(LAMP stack on Ubuntu 12.04 LTS).

* Install and configure all necessary LAMP components on two web servers.
* Reset the password of MySQL root account.
* Install and configure Haproxy to handle load balancing for the HTTP traffic.

Command to run the playbook:
ansible-playbook -i hosts lamp.yml  OR ansible-playbook -i hosts lamp.yml  -K (only if you need to input your sudo pasword)
