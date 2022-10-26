# Example Ansible playbook "managed" training environment for deploying hands-on activities to cPanel managed hosts

## Granular Details: playbooks
Includes various playbooks that allow for execution of hands on activities to hosts the Ansible master has access to. Playbooks include the following: 

- breaks.yml : playbook that interacts with tasks in the "training" role, the "hands on activities"
- coaching.yml : playbook to potentially setup/install WordPress on a cPanel managed account
- dnsadmin.yml : playbook that adds new dns zones on a DNS master server that uses BIND
- initial_setup.yml : playbook for configuration of the cPanel managed host that Ansible master will interact with
- root_breaks.yml: playbook that does root level "hands on activities" in the "training" role 

## Granular Details: roles
Various roles called upon via differing playbooks, each role created to minimize the size of the associated playbook while simplifying maintenance of them. 

- coaching : task and files to allow for setup of a WordPress on a cPanel managed host
- cpanel_env : to set local facts on target cPanel managed host for execution of other playbooks
- dnsadmin : task and templates for setting up DNS zones on host using BIND, _does not install BIND!_
- setup : setup and configuration of the "minion" that Ansible with be interacting with
- training : task, file and templates that allow for application of "breaks" on the "minion" host
