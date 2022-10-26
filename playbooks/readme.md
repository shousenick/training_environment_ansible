# Quick notes on playbook execution

## initial_setup.yml
This playbook will prompt for domain, username & hostname of the "minion" that is being set up. 

## dnsadmin.yml
This playbook creates a DNS zone that's respectable for a host using BIND. Note that it will prompt for user input for: 
- domain
- private IPs for nameservers, _ns1 and ns2_

## coaching.yml
This playbook is fairly straight-forward and will be executed on the host you target. There's some issues remaining with doing it on multiple hosts at once... _I'll figure it out if/when I have time._ 

## breaks.yml & root_breaks.yml
These breaks are executed relying on additional arguments to allow for granular execution. Note that the break_name is the name of the task's .yml within the role directory excluding the file extension. 

Refer to readme in the roles/training for a list of different "hands on activities" for differing services.

## Example of execution: 
```
ansible-playbook ~ansible/playbooks/breaks.yml -l ${target_server} --extra-vars='{"break_name": "email_phpspam"}'
```

## Explanation of the execution: 
executes the break.yml playbook
```
ansible-playbook ~ansible/playbooks/breaks.yml
```
limits the execution to only the target server, or you can use groupings depending on configuration of inventory
```
-l ${target_server}
```
execution of specific "task" located in the role associated to playbook, in this case the roles/training/email/email_phpspam.yml
```
--extra-vars='{"break_name": "email_phpspam"}'
```
